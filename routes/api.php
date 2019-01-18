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
Route::post('login', 'AccountController@login');
Route::post('register', 'AccountController@register');
// *******************

// gestion des users
Route::get("users/account/{account}", "UserController@index");
Route::post("users", "UserController@store");
Route::get("users/{user}", "UserController@show");
// *****************

// gestion des films
Route::get("films", "FilmController@index");
Route::post("films", "FilmController@store");
Route::get("films/{id}", "FilmController@show");
Route::put("films/{id}", "FilmController@update");
Route::patch("films/{id}", "FilmController@update");
// *****************

// gestion des listes
route::get("favs/{user}", "ListsController@showFavs");
route::post("favs", "ListsController@addFav");
route::get("watchlist/{user}", "ListsController@showWatchLater");
route::post("watchlist", "ListsController@addToWatchList");
route::get("watched/{user}", "ListsController@showWatched");
route::post("watched", "ListsController@addWatched");
// ******************


// gonna disapear :o
Route::resources([
    'filmdirectors' => 'FilmDirectorController',
]);