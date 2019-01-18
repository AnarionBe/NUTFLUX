<?php

namespace App\Http\Controllers;

use App\View;
use App\Film;
use App\User;
use Illuminate\Http\Request;

class ListsController extends Controller
{
    public function showFavs($user) {
        $views = View::where("user", "=", $user)
            ->where("favorite", "=", "1")
            ->get();

        return $views;
    }

    public function addFav(Request $request) {
        if(!View::where("user", $request->user)->where("film", $request->film)->count()) {
            View::create($request->all())->save();
            return response()->json(["message" => "Added to favorites"]);
        }

        $view = View::where("user", $request->user)->where("film", $request->film)->first();
        if(!$view->favorite) {
            View::where("user", $request->user)->where("film", $request->film)->update(["favorite" => 1]);
            return response()->json(["message" => "Added to favorites"]);
        }
        View::where("user", $request->user)->where("film", $request->film)->update(["favorite" => 0]);
        return response()->json(["message" => "Removed from favorites"]);
        
    }
}
