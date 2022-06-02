<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\requestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::view('/','login');
// Route::view('/index','index');
// Route::view('/edit_admin','edit_admin');
// Route::view('/addbook','addbook');
// Route::view('/book','book');
// Route::view('/bookdetails','bookdetails');
// Route::view('/current','current');
// Route::view('/edit_book','edit_book');
// Route::view('/findbook','findbook');
// Route::view('/finduser','finduser');
// Route::view('/issue_requests','issue_requests');
// Route::view('/message','message');
// Route::view('/profile','profile');
// Route::view('/recommendations','recommendations');
// Route::view('/renew_requests','renew_requests');
// Route::view('/requests','requests');
// Route::view('/return_requests','return_requests');
// Route::view('/student','student');
// Route::view('/studentdetails','studentdetails');


// Route::view('/membre/bookm','membre/bookm');
// Route::view('/membre/indexm','membre/indexm');
// Route::view('/membre/currentm','membre/currentm');
// Route::view('/membre/edit_membre','membre/edit_membre');
// Route::view('/membre/findbookm','membre/findbookm');
// Route::view('/membre/history','membre/history');
// Route::view('/membre/bookdetailsm','membre/bookdetailsm');
// Route::view('/membre/messagem','membre/messagem');
// Route::view('/membre/profilem','membre/profilem');
// Route::view('/membre/recommendationsm','membre/recommendationsm');

// Route::view('/login','login');

Route::get('/', [userController::class, 'login']);
Route::post('/login', [userController::class, 'verif']);
Route::post('/register', [userController::class, 'register']);
route::get('/index', [userController::class, 'index']);
Route::get('/membre/index_m', [userController::class, 'index_m']);
Route::get('/logout', [userController::class, 'logout']);



Route::get('/addbook', [bookController::class, 'add_book']);

Route::get('/showstudent', [userController::class, 'show_student']);
Route::get('/studentdetails/{id}', [userController::class, 'student_details']);

Route::get('/showmessage', [userController::class, 'send_message']);
Route::get('/showmessagem', [userController::class, 'send_messagem']);
Route::post('/add_message', [messageController::class, 'add']);


Route::post('/add', [bookController::class, 'add']);
Route::get('/allbook', [bookController::class, 'list']);
Route::get('/bookdetails/{id}', [bookController::class, 'details']);
Route::get('/edit_book/{id}', [bookController::class, 'edit_book']);
Route::put('/update_book/{id}', [bookController::class, 'update_book']);
Route::delete('/destroy/{id}', [bookController::class, 'destroy']);
Route::post('/search', [bookController::class, 'search']);
Route::get('/recommendations', [bookController::class, 'book_rec']);

Route::get('/membre/bookdetailsm/{id}', [bookController::class, 'detailsm']);
Route::get('/membre/allbookm', [bookController::class, 'listm']);
Route::get('/membre/editm', [userController::class, 'edit']);
Route::put('/membre/update_user/{id}', [userController::class, 'update_user']);
Route::get('/membre/recommand', [bookController::class, 'recommand']);
//Route::get('/membre/bookdetailsm/{id}', [bookController::class, 'detailsm']);
Route::get('/edit_admin', [userController::class, 'edit_sakhta']);

Route::get('/membre/request/{id}', [requestController::class, 'add_request']);
Route::get('/showrequests',[requestController::class, 'show_request']);
Route::get('/acceptrenewal/{id}/{id1}',[requestController::class, 'accept']);
Route::put('/update_admin/{id}', [userController::class, 'update_admin']);