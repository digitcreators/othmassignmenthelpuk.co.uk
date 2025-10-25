<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
  
    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        // Validate reCAPTCHA
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

         // Check if the user has already requested a reset within the last 15 minutes
        $email = $request->input('email');
        $cacheKey = 'password-reset-attempts-' . $email;

         if (Cache::has($cacheKey)) {
            $expiresAt = Cache::get($cacheKey);
            $remainingTime = $expiresAt->diffInMinutes(now());

            return redirect()->back()->with(
                'error', "You have requested a password reset recently. Please wait $remainingTime minute(s) before trying again."
            );
        }

        // Store the current time in cache for 15 minutes
        Cache::put($cacheKey, now()->addMinutes(15), now()->addMinutes(15));

        // Proceed with password reset email
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }
}
