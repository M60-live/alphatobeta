<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormAdmin extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public $msgName;
  public $msgEmail;
  public $msgContact;
  public $msgMessage;
  public function __construct($name,$email,$contact,$message)
  {
    $this->msgName = $name;
    $this->msgEmail = $email;
    $this->msgContact = $contact;
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
    $contact = $this->msgContact;
    return $this->view('emails.contactformadmin')
    ->subject('A2B Contact Form')
    ->with('name',$name)
    ->with('email',$email)
    ->with('msg',$message)
    ->with('contact',$contact);
  }
}
