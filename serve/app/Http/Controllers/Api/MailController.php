<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_email(Request $request)
    {
        dd($request);
        $details = [
            'title' => 'Mail from Surfside Media',
            'body' => 'This is testing email',
        ];

        Mail::to('sherzod.erkinov036@gmail.com')->send(new SendMail($details));

        return 'Email send!';
    }
}
