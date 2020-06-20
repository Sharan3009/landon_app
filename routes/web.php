<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', "ContentsController@home");

Route::get('/clients', "ClientController@index");

Route::get('clients/new', "ClientController@newClient");

Route::post('clients/new', "ClientController@create");

Route::get('/home', function () {
    $data = [];
    $data["limerick"] = "Just kidding";
    return view('welcome',$data);
});

Route::get('/di', "ClientController@di");


Route::get('/facades/db', function(){
    return DB::select('SELECT * from table');
});

Route::get('/facades/encrypt', function(){
    return Crypt::encrypt('123456789');
});

Route::get('/facades/decrypt', function(){
    return Crypt::decrypt('eyJpdiI6IkhxRWM5MEtXSEFHWmFXR2JxaXNYa1E9PSIsInZhbHVlIjoiK1R0enQ5L2ZHZHg1L2xNTU5Ib3N2bVI0RVNUTmR1SGpKQTRMWGlKYkNmQT0iLCJtYWMiOiI3OTczNzI0NzM3YmZjMDkxZDdmMzRmNmIzOTRmMmQ3NTQ0NWNmNjEzYjA2ZTY4ZmRiYTk2MTY1NDBmNjRiZGE2In0=');
});