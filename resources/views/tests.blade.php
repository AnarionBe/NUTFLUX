<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page de tests</title>
</head>
<body>
    <form action="/storeMovie" method="post">
        @csrf
        <input type="text" placeholder="titre" name="title">
        <input type="text" placeholder="date" name="release">
        <input type="text" placeholder="resumé" name="synopsis">
        <input type="submit" value="add">
    </form>
</body>
</html>