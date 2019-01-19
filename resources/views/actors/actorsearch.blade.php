@extends('layouts.master')

@section('content')
    <h1>page de recherche de films par acteur</h1>
    {!! Form::open(['action'=>'ActorController@show', 'method'=>'GET']) !!}
    <div>
        {{Form::label('actors', 'Acteur')}}
        {{Form::text('actors', '', ['placeholder'=>'Acteur'])}}
    </div>
        {{Form::submit('Validez')}}
    {!! Form::close() !!}
@endsection