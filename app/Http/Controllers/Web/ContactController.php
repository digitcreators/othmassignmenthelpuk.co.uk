<?php

namespace App\Http\Controllers\Web;

use App\Contact;
use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactMail;
use App\Mail\ContactAdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
        $countries=Country::all();
        return view('pages.contact',compact('countries'));
    }

    public function store(StoreContactRequest $request){


      // contactController
// Get the reCAPTCHA response from the request
        $recaptcha = $request->input('g-recaptcha-response');
        // Check if the reCAPTCHA response is null
        if (is_null($recaptcha)) {
            return response()->json([
                'errors' => [
                    'g-recaptcha-response' => ['Please complete the reCAPTCHA.']
                ]
            ], 422);
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
            return response()->json([
                'errors' => [
                    'g-recaptcha-response' => ['reCAPTCHA verification failed. Please try again.']
                ]
            ], 422);
        }



        //  return $request ;
        $contact= Contact::create($request->all());
             
         // Send mail to user   
         Mail::to($contact->email)->send(new ContactMail($contact));
        // Send mail to admin
         Mail::to(env('MAIL_FROM_ADDRESS', config('app.app_email')))->send(new ContactAdminMail($contact));

        return response()->json(['success'=>"Thank you for showing your intrest, We've receive your query successfully."]);
    }
}
