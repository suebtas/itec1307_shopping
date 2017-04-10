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

Route::get('/5714110039', function () {
<<<<<<< HEAD
    return view(' 5714110039 ');
});
=======
    return 'อยากไปเล่นน้ำสงกรานต์แล้ว';
});
>>>>>>> origin/testing-route
