<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){

        return view('contact');
    }

    public function store(){

        request()->validate([
            'email' => 'required|email'
        ]);

        Mail::to(request('email'))
            ->send(new Contact('Laravel'));

        return back()->with('message', 'Email sent');
    }
}
