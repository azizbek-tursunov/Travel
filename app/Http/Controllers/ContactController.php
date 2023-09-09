<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = Contact::first();

        return view('contact', compact('contact'));
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Message::create(request(['name', 'email', 'message']));

        return redirect()->route('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
