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

Route::post('/storeMovie', 'FilmController@insert');

Route::post('/loadAllMovies', 'FilmController@loadAll');

Route::get('/addmovie', function () {
    return view('addmovie');
});

Route::get('/test', function() {
    return view('tests');
});