<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>BeeFlix - Selected Movie</title>
</head>
<body>
        <img class="logoheader" src="./img/logo-transparent3.png" alt="logo-beeflix" width="200" height="200">

    <div id="app">
          <movie></movie>
    </div>

    <footer>        
            <p class="copyright">Copyright © 2019</p>
        </footer>
    <script src="../js/app.js"></script>
</body>
</html>