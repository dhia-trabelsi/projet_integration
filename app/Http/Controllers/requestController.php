<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class requestController extends Controller
{
    public function add_request($id) {
        $val = DB::table('requests') -> where('books_id', '=', $id) -> where('users_id', '=', session() -> all()['user_id']) -> get();
        if(count($val) > 0) {
            return back();
        }
        DB::table('requests') -> insert(['books_id' => $id, 'users_id' => session() -> all()['user_id'], 'status' => -1, 'date' => now(), 'date_return']);
        return back();
    }
    function show_request(){
        return view ('requests',
    [
        'request' => DB::table('requests') -> join('books', 'books.id', '=', 'requests.books_id') -> join('users', 'users.id', '=', 'requests.users_id') -> where('requests.status', '=', '-1') -> get()
    ]);
    }

    public function accept($id, $id1) {
        DB::table('requests') -> where('users_id', '=', $id1) -> where('books_id', '=', $id) -> update(['status' => 1]);
        $k = DB::table('books') -> where('id', '=', $id) -> get() -> first() -> Availability;
        DB::table('books') -> where('id', '=', $id) -> update(['Availability' => $k - 1]);
        return back();
    }

    public function reject($id, $id1) {
        DB::table('requests') -> where('users_id', '=', $id1) -> where('books_id', '=', $id) -> update(['status' => 0]);
        return back();
    }
}
