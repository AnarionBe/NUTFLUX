<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page de tests</title>
</head>
<body>
    <h1>test ajout de film</h1>
    <form action="/storeMovie" method="post">
        @csrf
        <input type="text" placeholder="titre" name="title">
        <input type="text" placeholder="date" name="release">
        <input type="text" placeholder="resumé" name="synopsis">
        <input type="submit" value="add film">
    </form>

    <h1>erreurs</h1>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <h1>test affichage de films</h1>
    <form action="/loadAllMovies" method="post">
        @csrf
        <input type="submit" value="show films">
    </form>

   @if(false)
    {{ dd(Input::all()) }}
    @endif
</body>
</html>