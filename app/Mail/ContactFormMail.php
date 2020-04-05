<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $msg;    // We does not using message variable name for avoid ambiguity with the
                    //natif name

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $msg)
    {
        $this->name=$name;
        $this->email=$email;
        $this->msg=$msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.message.form');
    }
}
