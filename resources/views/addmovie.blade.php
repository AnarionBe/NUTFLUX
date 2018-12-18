<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>BeeTV - Add Movie</title>
        <style>
            body {
                background-color: #000010;
                color: white;
                font-size: 12px;
                position: absolute;
            }
            button {
                border: none;
                border-radius: 5px;
                font-size: 10px;
                background-color: #002E62;
                color: white;
            }
        </style>
        <body>

            <div id="add-movie">
               <div class="form-group">
                  <label for="moviename">Movie name:</label>
                  <input type="text" class="form-control" id="moviename" name="moviename" 
                      required v-model="newItem.moviename" placeholder=" Enter movie name">
              </div>
              <div class="form-group">
                  <label for="date">Release Date : </label>
                  <input type="numers" class="form-control" id="date" name="date" 
                      required v-model="newItem.date" placeholder=" Enter the release date">
                      
              </div>
              <div class="form-group">
                  <label for="synopsis">Synopsis:</label>
                  <input type="text" class="form-control" id="synopsis" name="synopsis"
                  required v-model="newItem.synopsis" placeholder=" Enter synopsis"> <br>
                  <p class="text-center alert alert-danger" v-if="seen"> Please fill all fields </p>
                  <p class="text-center alert alert-success" v-if="movieadd">Your Movie is added</p>
              </div>

              <button class="btn btn-primary" @click.prevent="createItem()" id="moviename" name="moviename">
              <span class="glyphicon glyphicon-plus"></span> ADD
              </button>

              
            </div>   
         </body>
    <script src="../js/app.js"></script>
    </body>
</html>
