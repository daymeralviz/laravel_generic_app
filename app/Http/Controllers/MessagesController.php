<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $message =  request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject'=> 'required',
            'content'=> 'required|min:3',
         ],
        [
           'name.required' => __('I need you name'), 
        ]);

        // enviar el email

        Mail::to('daymer21@gmail.com')->queue(new MessageReceived($message));
       // envio con mailtrap
       // return new MessageReceived($message);

         return 'Mensaje enviado';
    }
}
