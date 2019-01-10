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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes added to resources
Route::post('/films/{param}', 'FilmController@showList');

Route::resources([
    'films' => 'FilmController',
    'filmdirectors' => 'FilmDirectorController',
]);

Route::resource('types', 'TypeController');

Route::resource('participations', 'ParticipationController');

Route::post('/storeMovie', 'FilmController@storeMovie');

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

/* Route::get('/addmovie', function () {
    return view('addmovie');
}); */

Route::get('/account', function () {
    return view('account');
});

Route::resource('actors', 'ActorController');

Route::get('/beeflix', function () {
    return view('beeflix');
});

Route::get('/profil', function () {
    return view('profil');
});


Route::get('/movie', function () {
    return view('movieselected');
});

