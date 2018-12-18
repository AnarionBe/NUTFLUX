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
                  <label for="title">Movie name : </label>
                  <input type="text" class="form-control" id="title" name="title" 
                      required v-model="newItem.title" placeholder=" Enter movie name">
              </div>

              <div class="form-group">
                  <label for="director">Director : </label>
                  <input type="text" class="form-control" id="director" name="director" 
                      required v-model="newItem.director" placeholder=" Director name">
              </div>

              <div class="form-group">
                  <label for="link">Youtube Link : </label>
                  <input type="url" class="form-control" id="link" name="link" 
                      required v-model="newItem.link" placeholder=" Youtube Url">
                      
              </div>
              
              
              <div class="form-group">
                  <label for="release">Release Date : </label>
                  <input type="numers" class="form-control" id="release" name="release" 
                      required v-model="newItem.release" placeholder=" Enter the release date"> 
              </div>

              <div class="form-group">
                  <label for="synopsis">Synopsis:</label>
                  <input type="text" class="form-control" id="synopsis" name="synopsis"
                  required v-model="newItem.synopsis" placeholder=" Enter synopsis"> <br>
                  <p class="text-center alert alert-danger" v-if="seen"> Please fill all fields </p>
                  <p class="text-center alert alert-success" v-if="movieadd">Your Movie is added</p>
              </div>

              <button class="btn btn-primary" @click.prevent="createItem()">
              <span class="glyphicon glyphicon-plus"></span> ADD
              </button>
              <br>

              <table class="table table-borderless" id="table-movie">
                <thead>
                <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Link</th>
                <th>Date</th>
                <th>Synopsis</th>
                </tr>
                </thead>
                <tr>
                
                    <td>Interstellar</td>
                    <td>Christopher Nolan</td>
                    <td><a href="https://youtu.be/HsPP6xSzQoE">https://youtu.be/HsPP6xSzQoE</a></td>
                    <td>2014</td>
                    <td>Alors que la Terre se meurt, une équipe d'astronautes franchit un trou de ver apparu près de Saturne et conduisant à une autre galaxie, afin d'explorer un nouveau système stellaire et dans l'espoir de trouver une planète habitable pour sauver l'humanité.</td>
                </tr>
              
              </table>

              
            </div>   
         </body>
    <script src="../js/app.js"></script>
    </body>
</html>
