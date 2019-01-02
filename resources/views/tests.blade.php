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
    <form action="/films" method="post">
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

    
    <h1>test affichage des films</h1>
        <form action="/films" method="get">
            @csrf
            <input type="submit" value="show films">
        </form>
        @if(isset($listFilms))
        <ul>
            @foreach($listFilms as $film)
            <li><a href="/films/{{ $film->id }}">{{ $film->title }}</a></li>
            @endforeach
        </ul>
        @endif

    @if(isset($film))
    <h1>test recherche de films</h1>
        <h2>Cliqué dans liste d''un films</h2>

        @if(isset($film))
        <a href="/films/{{ $film->id }}/edit">{{ $film->title }}</a>
        @endif
    @endif
    
    @if(isset($filmToModify))
    <h1>test affichage form pour modif d''un film</h1>
        <h2>Cliqué dans liste des films</h2>
    
            <form action="/films/{{ $filmToModify->id }}" method="post">
                @csrf
                @method('patch')
                <input type="text" placeholder="titre" name="title" value="{{ $filmToModify->title }}">
                <input type="text" placeholder="date" name="release" value="{{ $filmToModify->release }}">
                <input type="text" placeholder="resumé" name="synopsis" value="{{ $filmToModify->synopsis }}">
                <input type="submit" value="modify film">
            </form>
    @endif



    <script>
        document.getElementById("search").addEventListener("click", (e) => {
            e.preventDefault();
            const button = e.target.parentNode;
            const value = document.getElementById("string").value;
            button.setAttribute("href", button.getAttribute("href") + "/" + value);
            window.location = button.href;
        });
    </script>
</body>
</html>