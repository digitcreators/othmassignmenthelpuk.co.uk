<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Invoice;
use App\PaperType;
use App\User;
use App\Deadline;
use App\AcademicLevel;
use App\Country;
use App\Order;
use App\RefrenceStyle;
use App\Subject;
use App\Fare;
use App\File;
use App\Http\Requests\StoreOrderRequest;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Reference\Reference;
use Illuminate\Support\Str;


class OrderController extends Controller
{
    public function create()
    {
        $paper_types = PaperType::orderBy('id', 'ASC')->get();
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = RefrenceStyle::orderBy('id', 'ASC')->get();
        $subjects = Subject::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        $web_setting=WebSetting::first();
        $fares          = Fare::all();
        // dd($fares);
        return view('pages.order-now', compact('paper_types', 'academic_levels', 'deadlines', 'reference_styles', 'subjects', 'countries','web_setting','fares'));
    }

    public function store(StoreOrderRequest $request)
    {
    //   dd($request->hasfile('emailAttachments'));
        //   Get the reCAPTCHA response from the request
        $recaptcha = $request->input('g-recaptcha-response');
    
        // Check if the reCAPTCHA response is null
        if (is_null($recaptcha)) {
            return redirect()->back()->with('error', 'Please complete the reCAPTCHA to proceed.');
        }
    
        // Verify the reCAPTCHA response with Google's API
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $params = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha,
            'remoteip' => $request->ip()
        ];
        
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, ['form_params' => $params]);
        $responseBody = json_decode($response->getBody(), true);
    
        // Check if the reCAPTCHA verification was successful
        if (!$responseBody['success']) {
            return redirect()->back()->with('error', 'reCAPTCHA verification failed. Please try again.');
        }

        $user = User::Where(['email' => $request->email])->first();
        $password = Str::random(8);
        $flag = false;

        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'file quantity exceeded the limit.');
                return redirect()->route('order');
            }

            if ($fileSize >  25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.');
                return redirect()->route('order');
            }
        }

        $files = [];

        if ($request->spacing == 2) {
            $request->merge(['spacing' => true]);
        }

        else{
            $request->merge(['spacing' => false]);
        }
        //Dynamic getting price from database according to deadline and Academic level
        $fare = Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();
        // return $fare;
// dd($fare);

        $request->merge([
            "cost_per_page"    => $fare->per_page_price,
            "cost_per_slide"   => $fare->per_slide_price,
            "cost_per_poster"  => $fare->per_poster_price,
            "total_price"       => ($fare->per_page_price * $request->no_of_pages)+($fare->per_slide_price * $request->no_of_slides)+($fare->per_poster_price * $request->no_of_posters)
        ]);
        DB::beginTransaction();

        if (!$user) {

            $flag = true;

            $user = User::create(

                [
                    'name' => request('name'),
                    'email' => request('email'),
                    'phone' => request('phone'),
                    'country' => request('country'),
                    'password' => Hash::make($password),
                ]
            );

            $user->roles()->sync(2);

            $request->merge(['user_id' => $user->id]);

            // $this->user_created = true;

            session()->flash('userData', ['userEmail' => 'Customer Account' . ' ' . $user->email . ' ' . 'created successfully check your email for login credentials', 'userId' => $user->id]);
        }
        $request->merge(['user_id' => $user->id]);
        $order = Order::create($request->all());

        $invoice = Invoice::create([
            "ref_no" => Str::uuid()->toString(),
            "amount" => $order->total_price,
            "order_id" => $order->id,
            "user_id" => $user->id,
            "gateway" => "stripe",
            "currency" => "GBP",
        ]);

        if ($request->hasfile('emailAttachments')) {
            foreach ($request->file('emailAttachments') as $file) {
                $fileName = uniqid() . '_' . time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');

                array_push($files, $filePath);

                File::create([
                    "order_id" => $order->id,
                    "file_path" => $filePath
                ]);
            }
        }
        // Send mail to user
          Mail::to($request->email)->send(new OrderMail($request, $files , $user , $invoice , $flag , $password));
        // Send mail to admin
           Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')) )->send(new OrderAdminMail($request, $files));
        DB::commit();

        //  return $order;
        return redirect()->route('invoice', ['reference' => $invoice->ref_no]);
    }

    public function invoice(Request $request)
    {

        if ($request->query('reference')) {
            $invoice = Invoice::where(['ref_no' => $request->query('reference'), 'status_id' => 4])->with('order')->firstOrFail();
            $order = Order::where(['id' => $invoice->order_id])->firstorFail();

            return view('pages.invoice', compact('invoice', 'order'));
        }
    }
    
     public function order()
    {
        $paper_types = PaperType::orderBy('id', 'ASC')->get();
        $academic_levels = AcademicLevel::orderBy('id', 'ASC')->get();
        $deadlines = Deadline::orderBy('id', 'ASC')->get();
        $reference_styles = RefrenceStyle::orderBy('id', 'ASC')->get();
        $subjects = Subject::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        $web_setting=WebSetting::first();
        $fares          = Fare::all();
        return view('pages.order-now', compact('paper_types', 'academic_levels', 'deadlines', 'reference_styles', 'subjects', 'countries','web_setting','fares'));
    }

}

