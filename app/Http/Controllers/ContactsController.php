<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactForm;
use App\Mail\ContactFormAdmin;

class ContactsController extends Controller
{
    public function contactform(Request $requestData)
    {
//      $Clients = DB::table('tblclients')->get();
//      return json_encode($Clients);
      $response='';
      $name = $requestData->post('name');
      $contact = $requestData->post('contact_number');
      $email = $requestData->post('email');
      $message = $requestData->post('message');
      $bValid=true;
      $msg='Please fill in the following:<ul>';
      if($name=='')
      {
        $msg .= '<li>Name field</li>';
        $bValid=false;
      }
      if($email=='')
      {
        $msg .= '<li>Email field</li>';
        $bValid=false;
      }
      if($message=='')
      {
        $msg .= '<li>Message box</li>';
        $bValid=false;
      }
      $msg .= '</ul>';

      if($bValid)
      {
        $results = DB::table('tblcontactform')->insert(
          ['name'=>$name, 'email'=>$email, 'message'=>$message, 'contact'=>$contact]
        );

        Mail::to($email)->send(new ContactForm($name,$email,$message));
        Mail::to("sipho@alphatobeta.co.za")->send(new ContactFormAdmin($name,$email,$contact,$message));

        $response = json_encode($results);
      }
      else
      {
        $response = $msg;
      }
      return $response;
    }
}
