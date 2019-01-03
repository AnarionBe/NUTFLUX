<?php

namespace App\Http\Controllers;

use App\Film_director;
use Illuminate\Http\Request;

class FilmDirectorController extends Controller
{
    //TODO: rename all return variables to $data
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $listFilmsDirectors = Film_director::orderBy('updated_at', 'DESC')->get();
        return view('tests', compact('listFilms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film_director  $film_director
     * @return \Illuminate\Http\Response
     */
    public function show(Film_director $film_director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film_director  $film_director
     * @return \Illuminate\Http\Response
     */
    public function edit(Film_director $film_director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film_director  $film_director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film_director $film_director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film_director  $film_director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film_director $film_director)
    {
        //
    }
}
