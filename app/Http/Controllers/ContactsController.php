<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $message= Message::create($request->only('nom','email','message'));

        $mailable = new ContactMessageCreated($message);
        Mail::to(config('laracarte.admin_support_email'))->send($mailable);   
        //flash('Nous vous répondrons dans les plus brefs délais!');
        return redirect()->route('root_path');
    }
}

