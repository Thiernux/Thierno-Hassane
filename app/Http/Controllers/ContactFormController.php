<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function create()
    {
    	return view('pages/contact');
    }

    public function store(ContactFormRequest $request)
    {

    	$message = Messages::create($request->only('name', 'email', 'msg'));

    	Mail::to('test@test.com')
    		->send(new ContactFormMail($message));

    	flashy('Merci pour votre message ! Nous vous répondrons dans les plus brefs délais !');
    	return redirect()->route('root_path');
    }
}
