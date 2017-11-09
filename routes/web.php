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



// Route::get('/', 'AppController@get');

Route::get('/', function () {
    return view('chat');
});

Route::get('/hello', function () {
    return View::make('home');
});

Route::get('/fiction', function () {
    return "Fiction";
});

Route::get('/{category}', function ($category) {
    return $category;
});
