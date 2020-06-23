<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;

class MessageController extends Controller
{
    public function create()
    {
        return view("contacts.create");
    }

    public function store(ContactRequest $request)
    { 
        $message = Message::create($request->only('name', 'email', 'message'));
        $mailable = new ContactMessageCreated($message);
        Mail::to(config('laracarte.admin_support_email'))
                ->send($mailable);
        flashy()->success('Mail envoyé, nous vous repondrons dans un bref delais!');
        return redirect()->route('home_path');
    }
}
