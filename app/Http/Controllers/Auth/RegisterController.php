<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\UserCreateMail;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' =>   ['required', 'string', 'max:255'],
            'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
            "phone" =>  ['required'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

            $password = Str::random(8);

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($password),
            ]);

            //customer
            $user->roles()->sync(2);

            Mail::to($data['email'])->send(new UserCreateMail($user, $password));

            return $user;


    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
         
        // Check if the reCAPTCHA response is present
        $recaptcha = $request->input('g-recaptcha-response');
        if (is_null($recaptcha)) {
            return redirect()->back()->with('error', 'Please complete the reCAPTCHA to proceed.');
        }
    
        // Verify reCAPTCHA with Google's API
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $params = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha,
            'remoteip' => $request->ip()
        ];
    
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, ['form_params' => $params]);
        $responseBody = json_decode($response->getBody(), true);
    
        // If reCAPTCHA verification fails, return with an error
        if (!$responseBody['success']) {
            return redirect()->back()->with('error', 'reCAPTCHA verification failed. Please try again.');
        }

        event(new Registered($user = $this->create($request->all())));

        return redirect()->route('login')->withSuccess('Auto-Generated password has been sent to your email.');
    }
}
