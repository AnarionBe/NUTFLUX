@extends('layouts.master')

@section('content')
    {{-- http lien /actors --}}
    <h1>page index de actors</h1>
    <ul>
        @if (count($actors) > 0)
            @foreach($actors as $actor)
                <li> {{$actor->lastname}} </li>
            @endforeach
        @else
            <p>Ces données n'existent pas</p>
        @endif
    </ul>
@endsection