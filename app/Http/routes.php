<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('checkout', function () {
    return view('checkout');
});
Route::get('shop', function () {
    return view('shop');
});
Route::get('login', function () {
    return view('login');
});
Route::get('info', function () {
    return view('info');
});
Route::get('view', function () {
    return view('view');
});

Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/cart', 'CartController@showCart');
Route::get('/removeItem/{productId}', 'CartController@removeItem');

