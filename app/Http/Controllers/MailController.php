<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
/*     public function testMail(Request $request)
    {
        Mail::to($request->receiver)->send(new MailSender($request));

        return back();
    } */
}
