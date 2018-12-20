<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Film;
use App\Http\Requests\StoreFilm;

class FilmController extends Controller {
    public function store(StoreFilm $request) {
        $request->validated();
        Film::create($request->all())->save();
        return redirect()->back();
    }

    public function loadAll(Request $request) {
        dd($request);
        $films = Film::all()->toArray();
        return redirect()->back()->withInput($films);
    }
}
