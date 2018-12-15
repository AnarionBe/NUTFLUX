@extends('layouts.master')

@section('content')
<h1>BEFLIX</h1>
<h2>Sign-In</h2>
<div>
        <form action="" method="POST">
            <p>
                <input type="text" name='pseudo' placeholder='Pseudo'>
            </p>
            <p>or</p>
            <p>
                <input type="email" placeholder='Email'>
            </p>
            <p>
                <input type="password" placeholder="Password">
            </p>
            <p>
                <input type="submit" placeholder="Submit">
            </p>
        </form>
        <p>Forgot your Password / Login ?</p>
        <p>
            <input type="button" value='Sign in with Google'>
        </p>
        <p>
            <input type="button" value='Back'>
        </p>
</div>
@endsection

