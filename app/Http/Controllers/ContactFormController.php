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

    public function store(Request $request)
    {
        $this->validate($request, [
             'name'=> 'required|min:3',
            'email'=> 'required|email',
            'msg'=> 'required|min:10'
        ]);

    	$messages = new ContactFormMail($request->name, $request->email, $request->msg);

        // Saving mail data in the database by using the model Messages
        Messages::create($request->only('name', 'email', 'msg'));

    	Mail::to('test@test.com')
    		->send($messages);


         // redirect to the home page after sending the mail   
    	flashy('Merci pour votre message ! Nous vous répondrons dans les plus brefs délais !');
    	return redirect()->route('root_path');
    }
}
