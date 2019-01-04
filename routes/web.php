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

Route::get('/', function () {
    return view('welcome');
});

Route::post('login', 'AccountController@login');

Route::get('login', 'AccountController@loginForm')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', function () {
    return view('register');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/account', function () {
    return view('account');
});
Route::resources([
    'films' => 'FilmController',
]);




//Routes added to resources
Route::post('/films/{param}', 'FilmController@showList');

//resources
Route::resources([
    'films' => 'FilmController',
    'filmdirectors' => 'FilmDirectorController',
]);
