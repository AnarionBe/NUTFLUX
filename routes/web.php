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

Route::get('/usr1_session', function(){
    return view('usr1_session');
});

Route::get('/usr2_session', function(){
    return view('usr2_session');
});

Route::get('/usr3_session', function(){
    return view('usr3_session');
});

Route::resources([
    'tests-copy' => 'ActorController',
]);
