<?php
// code for MailController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $mailData = [
            'title' => $request->first_name . ' ' . $request->last_name, 
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'body' => $request->message
        ];

   
        config(['mail.from.address' => $request->email]);
        config(['mail.from.name' => $request->first_name . ' ' . $request->last_name]);

        Mail::to('daandrenthenpr@gmail.com')->send(new DemoMail($mailData));

        config(['mail.from.address' => env('MAIL_FROM_ADDRESS')]);
        config(['mail.from.name' => env('MAIL_FROM_NAME')]);

        return redirect('/')->with('success', 'Email sent successfully!');
    }
}




?>
