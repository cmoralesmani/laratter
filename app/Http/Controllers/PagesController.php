<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller
{
    //
    public function home(){

        $messages = Message::all();
        
        //dd($messages);

        return view('welcome',[
            //'teacher' => 'Guido Contreras Woda',
            'messages' => $messages,
        ]);
    }
}