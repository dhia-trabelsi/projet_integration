<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messageController extends Controller
{
    public function add() {
        $data = request() -> validate(
            [
                'message' => 'required|min:10|required',
                'user_id' => 'required',
                
            ]
        );

        $message = new message();
        $message -> id= $data['id'];
         $message -> text = $data['message'];
         $message -> user_id = $data['user_id'];
        $user -> save();
        return redirect('/showmessage');
    }
}
