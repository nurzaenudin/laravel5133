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

Route::get('/udin', function () {
    return ('udin percobaan kelima');
});

/* 
Route::get('/home', ['middleware' => 'auth', function () {
return "Anda berhasil login";
}]);
 */


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/home', function () {
    return view('home');
});

Route::get('event', ['middleware' => ['auth', 'role:organizer'], function() {
return "Berhasil mengakses halaman event";
}]);
Route::get('event-history', ['middleware' => ['auth', 'role:participant'], function() {
return "Berhasil mengakses history event.";
}]);
