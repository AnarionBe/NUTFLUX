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

        <ul>
            @if(isset($listFilms))
                @foreach($listFilms as $film)
                <li>{{ $film->title }}</li>
                @endforeach
            @endif
        </ul>

    <h1>test recherche de films</h1>
        <input type="text" name="string" id="string">
        <a href="/films" id="search"><button>rechercher</button></a>

        <ul>
            @if(isset($rechercheFilms))
                @foreach($rechercheFilms as $film)
                <li>{{ $film->title }}</li>
                @endforeach
            @endif
        </ul>


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