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

Route::get('/user-searchresult', function () {
    return view('user.searchresult');
});


Route::get('/delivery-homepage', function () {
    return view('delivery.homepage');
});

Route::get('/delivery-billing', function () {
    return view('delivery.billinggenerate');
});

Route::get('/delivery-viewbilling', function () {
    return view('delivery.viewbilling');
});

Route::get('/delivery-proposedinvoice', function () {
    return view('delivery.proposedinvoice');
});

Route::get('/delivery-viewproposed', function () {
    return view('delivery.viewproposed');
});
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
