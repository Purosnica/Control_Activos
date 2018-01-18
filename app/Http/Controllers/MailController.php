<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Sendmail;

class MailController extends Controller
{

  public function send(){

  Mail::send( new Sendmail());
    // $message->to('purosnica507@gmail.com','To steven')->subject('test mail');
    // $message->from('purosnica@gmail.com','Hello');




}

    //
}
