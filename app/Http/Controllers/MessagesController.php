<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function show(Message $message){
        // Ir a buscar el Message por ID
        // $message = Message::find($id);

        // Una view de un message
        return view('messages.show',[
            'message' => $message,
        ]);
    }
}