<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('sriram@sriram-r.com')->send(new ContactMail($validated['name'], $validated['email'], $validated['subject'], $validated['message']));

        // Once validated, email can be sent
        return['success' => true];
    }
}
