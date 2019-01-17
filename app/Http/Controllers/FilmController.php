<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFilm;
use Illuminate\Support\Facades\DB;
use App\Film_director;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $listFilms = DB::table('films')
            ->join('film_directors', 'films.filmdirector', '=', 'film_directors.id')
            ->select('films.*', "film_directors.firstname", "film_directors.lastname")
            ->get();
        return $listFilms;
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilm $request) {
        $request->validated();
        Film::create($request->all())->save();
        return response()->json([
            "status" => "success",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $film = Film::find($id);
        $film->actors = $film->actors()->get();

        return $film;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFilm $request, Film $film) {
        $request->validated();
        $film->update($request->all());
        $film->save();
        return response()->json([
            "status" => "success",
        ]);
    }
}
