<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class MailController extends Controller
{
    public function sendMail(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $msg = $request->message;

        Mail::to($email)->send(new ContactMessage($name, $email, $msg));
        return redirect("/#contact")->with("msg", " ");
}
}