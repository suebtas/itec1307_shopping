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
    return view('welcome');
});



Route::get('/suebtas', function () {
    return 'อยากไปเล่นน้ำสงกรานต์แล้ว';
});

Route::get('/5714110024', function () {
    return 'Hello';
});


Route::get('/5714110039', function () {
    return 'สวัสดี';
});


Route::get('/5814210008', function () {
    return 'pimwimon ';
});

Route::get('/warakorn', function () {
    return 'asdasd';
});


