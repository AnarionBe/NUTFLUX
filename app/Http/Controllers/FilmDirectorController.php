<?php

namespace App\Http\Controllers;

use App\Film_director;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFilmDirector;

class FilmDirectorController extends Controller
{
    //TODO: rename all return variables to $director or $listDirector
    //TODO: modify return views
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $listFilmsDirectors = Film_director::orderBy('updated_at', 'DESC')->get();
        return compact('listFilmsDirectors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tests');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilmDirector $request) {
        $request->validated();
        Film_director::create($request->all())->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film_director  $film_director
     * @return \Illuminate\Http\Response
     */
    public function show(Film_director $film_director) {
        return  compact('film_director');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film_director  $film_director
     * @return \Illuminate\Http\Response
     */
    public function edit(Film_director $film_director) {
        $filmDirectorToModify = $film_director;
        return compact('filmDirectorToModify');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film_director  $film_director
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFilmDirector $request, Film_director $film_director) {
        $request->validated();
        $film_director->update($request->all());
        $film_director->save();
        return compact('filmDirectorToModify');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film_director  $film_director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film_director $film_director) {
        $film_director->delete();
        return compact('filmDirectorToModify');
        }
}
