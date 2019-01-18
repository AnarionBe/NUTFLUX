<?php

namespace App\Http\Controllers;

use App\View;
use App\Film;
use App\User;
use Illuminate\Http\Request;

class ListsController extends Controller
{
    public function showFavs($id) {
        $views = View::where("user", "=", $id)
            ->where("favorite", "=", "1")
            ->get();

        return $views;
    }

    public function addFav(Request $request) {
        $request->favorite = 1;
        View::create($request->all())->save();
        return "ok";
    }
}
