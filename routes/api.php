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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', 'HomeController@index')->name('home');

//gestion des comptes
    Route::get('login', 'AccountController@loginForm')->name('login');
    Route::post('login', 'AccountController@login');
    Route::get('register', 'AccountController@registerForm');
    Route::post('register', 'AccountController@register');
//*******************

Route::get('/account', function () {
    return view('welcome');
});

//Routes added to resources
//Route::post('/films/{param}', 'FilmController@showList');

//resources
Route::resources([
    'films' => 'FilmController',
    'filmdirectors' => 'FilmDirectorController',
    'users' => 'UserController',
]);