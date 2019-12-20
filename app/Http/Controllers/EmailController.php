<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {

        Mail::to('1f3d7ba35d-a46650@inbox.mailtrap.io')->send(new sendEmail);
        return view('emails.responseEmail');

    }

}
