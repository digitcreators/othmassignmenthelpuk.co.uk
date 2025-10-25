<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Request;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $user;
    protected $invoice;
    protected $flag;
    protected $attachmentsPath;
    protected $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $request, $files, $user , $invoice , $flag ,$password)
    {
        $this->data = $request->all();
        $this->attachmentsPath = $files;
        $this->user = $user;
        $this->invoice = $invoice;
        $this->flag = $flag;
        $this->password =$password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->flag);
        $email = $this->markdown('email.order')->subject('Order Confirmation')->with(["data" => $this->data,'user' => $this->user,'invoice' => $this->invoice,'flag' => $this->flag , 'password' => $this->password]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        // dd($email);
        return $email;

    }
}
