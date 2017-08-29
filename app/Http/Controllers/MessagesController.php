<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests\CreateMessageRequest;

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

    public function create(CreateMessageRequest $request){
        $user = $request->user();

        $image = $request->file('image');

        $message = Message::create([
            'user_id' => $user->id,
            'content' => $request->input('message'),
            'image' => $image->store('messages','public'),
        ]);
        return redirect('/messages/' . $message->id);
    }
}
