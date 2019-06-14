<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public $msgName;
  public $msgEmail;
  public $msgMessage;
  public function __construct($name,$email,$message)
  {
    $this->msgName = $name;
    $this->msgEmail = $email;
    $this->msgMessage = $message;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    $name = $this->msgName;
    $email = $this->msgEmail;
    $message = $this->msgMessage;
    return $this->view('emails.contactform')
    ->subject('Alphatobeta')
    ->with('name',$name)
    ->with('email',$email)
    ->with('msg',$message);
  }
}
