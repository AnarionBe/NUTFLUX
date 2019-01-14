<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div id="app">
    <router-view></router-view>
    </div>

    <footer>        
        <p class="copyright">Copyright © 2019</p>
    </footer>
    <script src="../js/app.js"></script>
    <script src="../resources/js/routes.js"></script>
</body>
</html>