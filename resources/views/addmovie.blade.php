<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>BeeTV - Add Movie</title>
       
        <body>
                <img class="logoheader" src="./img/logo-transparent3.png" alt="logo-beeflix" width="200" height="200">

            <div id="app">
               <addmovie></addmovie>
            </div>   
         </body>
        <script src="../js/app.js"></script>
    </body>
</html>
