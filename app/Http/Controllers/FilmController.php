<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFilm;
use Illuminate\Support\Facades\DB;
use App\Film_director;

class FilmController extends Controller
{
    //TODO: rename all return variables to $film or $listFilm
    //TODO: modify return views
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // $listFilms = Film::orderBy('updated_at', 'DESC')->get();
        $listFilms = DB::table('films')
            ->join('film_directors', 'films.filmdirector', '=', 'film_directors.id')
            ->get();
        // $listFilms = Film::orderBy('updated_at', 'DESC')

        return $listFilms;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilm $request) {
        $request->validated();
        Film::create($request->all())->save();
        return ['redirect' => 'home', 'error' => '', 'user' => ''];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film) {
        return $film;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film) {
        $filmToModify = $film;
        return view('tests', compact('filmToModify'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFilm $request, Film $film) {
        $request->validated();
        $film->update($request->all());
        $film->save();
        return view('tests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film) {
        $film->delete();
        return view('tests');
    }

    /**
     * Display a list of resources that contain the given string
     *
     * @return \Illuminate\Http\Response
     */
    //TODO: update to search in more column and having more params
    public function showList($param) {
        $rechercheFilms = Film::where('title', 'like', '%'.$param.'%')->get();
        return view('tests', compact('rechercheFilms'));
    }
}
