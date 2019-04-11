<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/user-homepage', function () {
    return view('user.homepage');
});

Route::get('/user-viewinvoice', function () {
    return view('user.viewinvoice');
});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
