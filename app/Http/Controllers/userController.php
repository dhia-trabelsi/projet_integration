<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Hash;
use Session;

class userController extends Controller
{
    //
    public function login() {
        return view('login');
    }

    public function verif() {
        $data = request() -> validate(
            [
                'Email' => 'required|email',
                'Password' => 'required|min:6'
            ]
        );
        $user = Admin::where('email', '=', request('Email')) -> first();
        if ($user) {
            if (Hash::check($data['Password'], $user['password'])) {
                request() -> session() -> put(['nom' => $user -> nom]);
                return redirect('/index');
            } else {
                return back() -> withErrors(['Password' => 'le mot de passe est incorrect']);
            }
        } else {
            $admin = User::where('email', '=', request('Email')) -> first();
            if ($admin) {
            if (Hash::check($data['Password'], $admin -> password)) {
                request() -> session() -> put(['nom' => $admin -> nom]);
                return redirect('/membre/index_m');
            } else {
                return back() -> withErrors(['Password' => 'le mot de passe est incorrect']);
            }
            } else {
                return back() -> withErrors(['email' => 'l\'email est incorrect']);
            }
        }
    }

    public function register() {
        $data = request() -> validate(
            [
                'Name' => 'required|min:4',
                'Email' => 'required|email|unique:users',
                'Password1' => 'required|min:6',
                'mobno' => 'required|numeric|min:10000000|max:99999999|unique:users'
            ]
        );
        $user = new User();
        $user -> name = $data['Name'];
        $user -> Email = $data['Email'];
        $user -> password = Hash::make($data['Password1']);
        $user -> mobno = $data['mobno'];
        $user -> save();
        return back();
    }

    public function index() {
        return view('index');
    }

    public function index_m() {
        return view('membre.indexm');
    }

    public function logout() {
        request()->session()->invalidate();
        return redirect('/');
    }

    public function show_student(){
        return view('/student',[
            'user' => user::all()
        ]);
    }
    public function student_details($id) {
        return view('studentdetails',[
            'user' => user::find($id) -> get()
        ]);
    }

    public function send_message(){
        return view('message',[
            'user' => user::all()
        ]);
    }
}
