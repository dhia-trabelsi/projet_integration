<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\author;
use App\Models\publisher;

class bookController extends Controller
{
    //
    public function add_book() {
        return view('addbook', [
            'authors' => author::all(),
            'publishers' => publisher::all()
        ]);
    }




    public function add() {
        $data = request() -> validate(
            [
                'title' => 'required|min:4',
                'author' => 'required',
                'publisher' => 'required',
                'year' => 'required|numeric|min:1900',
                'availability' => 'required|numeric|min:0'
            ]
        );

        $book = new book();
        $book -> titre = $data['title'];
        $book -> authors_id = $data['author'];
        $book -> publishers_id = $data['publisher'];
        $book -> year = $data['year'];
        $book -> Availability = $data['availability'];
        $book -> save();
        return redirect('/allbook');
    }

    public function list() {
        return view('book', [
            'books' => book::all()
        ]);
    }

    public function details($id) {
        return view('bookdetails',[
            'book' => book::find($id) -> get(),
            'authors' => author::all(),
            'publishers' => publisher::all()
        ]);
    }

    public function edit_book($id) {
        return view('edit_book', [
            'book' => book::find($id) -> get() -> first(),
            'authors' => author::all(),
            'publishers' => publisher::all()
        ]);
    }

    public function update_book($id) {
        $val = book::find($id);
        $data = request() -> validate(
            [
                'titre' => 'required|min:4',
                'authors_id' => 'required',
                'publishers_id' => 'required',
                'year' => 'required|numeric|min:1900',
                'Availability' => 'required|numeric|min:0'
            ]
        );
        $val -> update($data);
        return redirect('/allbook');
    }

    public function destroy($id) {
        $val = book::find($id);
        $val -> delete();
        return redirect('/allbook');
    }
    public function search(Request $request){
        //$res=$_GET['title'];
        //$val=book::where('titre',LIKE,$res) -> get();
        //return view('book',compact($val));
        $name = $request ->title;
        return view('allbook');
    }
    


    public function listm() {
        return view('membre.bookm', [
            'books' => book::all()
        ]);
    }

    public function detailsm($id) {
        return view('membre.bookdetailsm',[
            'book' => book::find($id) -> get(),
            'authors' => author::all(),
            'publishers' => publisher::all()
        ]);
    }


    
}
