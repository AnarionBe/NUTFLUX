<?php

namespace App\Http\Controllers;

use DB;
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
        /* return 'actors.index'; */
        $actors = Actor::orderby('lastname', 'asc')->get();
        return view('actors.index')->with('actors', $actors);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('actors.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname'=>'required',
            'nastname'=>'required',
            'born'=>'required',
            'death'=>'required'
        ]);

        $actors = new Actor;
            $actors->firstname = $request->input('firstname');
            $actors->lastname = $request->input('lastname');
            $actors->born = $request->input('born');
            $actors->death = $request->input('death');
            $actors->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    { 
        return $actor;
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

    /**
        * Show the form for searching films on actor's name base.
        *
        * @return \Illuminate\Http\Response
        */
       public function searchFilmByActor()
       {
           return 'test';
       }
}
