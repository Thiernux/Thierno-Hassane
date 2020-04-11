<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactFormTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    //Here we testing show view contact form page

    public function test_contact_form_page()
    {
        $response = $this->get('/contact');

        $response->assertOk();
    }


    //Here we use Mocking Mail Fake for testing de sending message
     public function test_sending_single_model_Messages_class()
    {

         $request = new Request();
        
        Mail::fake();
        $messages = new ContactFormMail($request->name, $request->email, $request->msg);

        Mail::to('test@test.com')->send($messages);

        Mail::assertSent(ContactFormMail::class);

     }

     
}
