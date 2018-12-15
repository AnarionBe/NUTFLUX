@extends('layouts.master')

@section('content')
<h1>BEFLIX</h1>
<h2>Register</h2>
    <div>
        <form action="" method="POST">
            <p>
                <input type="text" name="firstname" placeholder="Name">
                <input type="text" name="lastname" placeholder="Last Name">
            </p>
            <p>
                <input type="email" name="email" placeholder="Email">
                <input type="email" name="email" placeholder="Confirm Email">
            </p>
            <p>
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password" placeholder="Confirm Password">
            </p>
            <p>
                <img src="#" alt='avatar' height="50" width="50">
                <input type="text" name="pseudo" placeholder="Pseudo">
            </p>
            <p>
                <input type="submit" value="Submit">
            </p>
            <p>
                <input type="button" value="Back">
            </p>
        </form>
    </div>    
@endsection

