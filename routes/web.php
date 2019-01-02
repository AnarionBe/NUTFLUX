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

Route::get('/traitement', 'TraitementController@redirectUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/actors', function () {
    $actors=App\Actors::all(); /* va retourner la liste des acteurs */
    var_dump($actors);
    echo $actors;
        
    /* dd($actors); */
    return view('actors', ['actors'=>$actors]);
});
