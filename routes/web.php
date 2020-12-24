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

Route::get('/home', function () {
    // return view('about');
    return redirect("about");
});

Route::get('/about/{moonlight}', function($moonlight){
    //contoh kalau nak pass value through route ke dalam view.
    //now, gi edit about.blade.php
    return view('about',$moonlight);
});
//url , page

Route::get('/contact', function(){

    return view('about');
});

//cara senang
Route::view('/senang', 'senang');
