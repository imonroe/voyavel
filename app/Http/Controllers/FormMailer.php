<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\RequestInvite;
use App\Mail\ContactForm;

class FormMailer extends Controller
{
    public function contact_form(Request $request)
    {
        $input = $request->all();
        Mail::to( env('MAIL_SITE_OWNER_EMAIL') )->send(new ContactForm($input));
        return back()->with('status', 'Your message was sent. Thanks for getting in touch!');
    }
}
