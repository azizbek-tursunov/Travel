<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Contact::create(request(['name', 'email', 'message']));

        return redirect()->route('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
