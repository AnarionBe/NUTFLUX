<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Film;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmTitre = nutflux::table('actors')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
    }

    /**
     * Show the form for searching films on actor's name base.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchFilmByActor()
    {
        $titre = Film::where('film-director', 1)->get();
        return view('test-copy', compact('titre'));
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
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
