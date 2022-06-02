<?php

namespace App\Http\Controllers;
use App\Models\message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function add() {
        $data = request() -> validate(
            [
                'message' => 'required|min:10',
                'user_id' => 'required'
            ]
        );

         $message = new message();
         $message -> text = $data['message'];
         $message -> users_id = $data['user_id'];
         $message -> save();
        return redirect('/showmessage');
    }
}
