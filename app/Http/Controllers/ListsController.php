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
            ->where("favorite", 1)
            ->get();

        return $views;
    }

    public function addFav(Request $request) {
        if(!View::where("user", $request->user)->where("film", $request->film)->count()) {
            View::create($request->all())->save();
            View::where("user", $request->user)->where("film", $request->film)->update(["favorite" => 1]);
            return response()->json(["message" => "added"]);
        }

        $view = View::where("user", $request->user)->where("film", $request->film)->first();
        if(!$view->favorite) {
            View::where("user", $request->user)->where("film", $request->film)->update(["favorite" => 1]);
            return response()->json(["message" => "added"]);
        }
        View::where("user", $request->user)->where("film", $request->film)->update(["favorite" => 0]);
        return response()->json(["message" => "removed"]);
    }

    public function showWatchLater($user) {
        $views = View::where("user", "=", $user)
            ->where("watchlater", 1)
            ->get();

        return $views;
    }

    public function addToWatchList(Request $request) {
        if(!View::where("user", $request->user)->where("film", $request->film)->count()) {
            View::create($request->all())->save();
            View::where("user", $request->user)->where("film", $request->film)->update(["watchlater" => 1]);
            return response()->json(["message" => "added"]);
        }

        $view = View::where("user", $request->user)->where("film", $request->film)->first();
        if(!$view->watchlater) {
            View::where("user", $request->user)->where("film", $request->film)->update(["watchlater" => 1]);
            return response()->json(["message" => "added"]);
        }
        View::where("user", $request->user)->where("film", $request->film)->update(["watchlater" => 0]);
        return response()->json(["message" => "removed"]);
    }
}
