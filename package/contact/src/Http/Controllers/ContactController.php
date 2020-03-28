<?php

namespace Bitfumes\Contact\Http\Controllers;

use Bitfumes\Contact\Mail\ContactMailable;
use Bitfumes\Contact\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name, $request->body));
        Contact::create($request->all());
        return redirect()->back();
    }
}
