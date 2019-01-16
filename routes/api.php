<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// gestion des comptes
Route::get('login', 'AccountController@loginForm')->name('login');
Route::post('login', 'AccountController@login');
Route::get('register', 'AccountController@registerForm');
Route::post('register', 'AccountController@register');
// *******************

// gestion des films
Route::get("films", "FilmController@index");
Route::post("films", "FilmController@store");
Route::get("films/{id}", "FilmController@show");
Route::put("films/{id}", "FilmController@update");
Route::patch("films/{id}", "FilmController@update");
// *****************


// gonna disapear :o
Route::resources([
    'filmdirectors' => 'FilmDirectorController',
    'users' => 'UserController',
]);