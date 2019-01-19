<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page de tests</title>
</head>
<body>
    <h1>test requetes acteurs</h1>
    {{-- <form action="/film/store" method="post">
        @csrf
        <input type="text" placeholder="titre" name="title">
        <input type="text" placeholder="date" name="release">
        <input type="text" placeholder="resumé" name="synopsis">
        <input type="submit" value="add film">
    </form>

    <h1>erreurs</h1>
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>

    <h1>test affichage de films</h1>
        <form action="/films" method="get">
            @csrf
            <input type="submit" value="show films">
        </form> --}}

        @if(isset($listActors))
        <ul>
            @foreach($listActors as $item)
            <li>{{ $item->lastname }} {{ $item->firstname }} </li>
            @endforeach
        </ul>
        @endif

        {{-- <p>
            <ul>
                {{$titre}}
            </ul>
        </p> --}}
</body>
</html>