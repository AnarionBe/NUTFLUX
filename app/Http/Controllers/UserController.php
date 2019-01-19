<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($account) {
        $users = User::where("account", $account)->get();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUser $request) {
        if(User::where("account", $request->account)->count() < 3) {
            $request->validated();
            $user = User::create($request->all());
            $user->save();
            return response()->json(["message" => "New User created", "user" => $user->account]);
        }
        return response()->json(["message" => "Max user reached for this account"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
