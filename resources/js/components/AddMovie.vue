<template>
    <div id="addmovie">
                          <img class="logoheader" src="./img/logo-transparent3.png" alt="" width="200" height="200">
<navbar></navbar>
        <div class="form-group">
            <label for="title">Movie name : </label>
            <input type="text" class="form-control" id="title" name="title" required v-model="newItem.title"
                placeholder=" Enter movie name">
        </div>

        <div class="form-group">
            <label for="director">Director : </label>
            <input type="text" class="form-control" id="director" name="director" required v-model="newItem.director"
                placeholder=" Director name">
        </div>

        <div class="form-group">
            <label for="link">Youtube Link : </label>
            <input type="url" class="form-control" id="link" name="link" required v-model="newItem.link" placeholder=" Youtube Url">

        </div>


        <div class="form-group">
            <label for="link">Poster Link : </label>
            <input type="url" class="form-control" id="poster" name="poster" required v-model="newItem.poster" placeholder=" Poster image url">

        </div>

        <div class="form-group">
            <label for="release">Release Date : </label>
            <input type="numers" class="form-control" id="release" name="release" required v-model="newItem.release"
                placeholder=" Enter the year release">
        </div>

        <div class="form-group">
            <label for="synopsis">Synopsis:</label>
            <input type="text" class="form-control" id="synopsis" name="synopsis" required v-model="newItem.synopsis"
                placeholder=" Enter synopsis"> <br>
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
                    <th>Poster</th>
                </tr>
            </thead>
            <tr v-for="(filmdatabase,i) in filmdatabases" :key="`
            ${i}-${filmdatabase.id}`">

               <router-link :to="`/films/${filmdatabase.id}`"> <td>{{filmdatabase.title}}</td>  </router-link> 
                <td>{{filmdatabase.firstname}} {{filmdatabase.lastname}} </td>
                <td><a :href="`https://youtube.com/embed/${filmdatabase.link}`">https://youtu.be/{{filmdatabase.link}}</a></td>
                <td>{{filmdatabase.release}} </td>
                <td>{{filmdatabase.synopsis | to-slice }}...</td>
                <td><img class="poster-list" :src="`${filmdatabase.poster}`" alt="" srcset=""></td>
            </tr>

        </table>


    </div>

</template>

<script>
import { RadialMenu,  RadialMenuItem } from 'vue-radial-menu'

    export default {

            created() {
            axios.get(`/api/films/`).then(response => {
                this.filmdatabases = response.data;
            });
                },



        data() {
            return {
                filmdatabases: [],
                items: [],
                seen: false,
                movieadd: false,
                newItem: {
                    'title': '',
                    'synopsis': '',
                    'release': '',
                    'director': '',
                    'poster':'',
                    'link': ''
                },
            }

        },
        methods: {
            createItem: function createItem() {
                var inputMovie = this.newItem;
                var _this = this;
                console.log(inputMovie);

                if (inputMovie['title'] == '' || inputMovie['release'] == '' || inputMovie['synopsis'] == '' ||
                    inputMovie['director'] == '' || inputMovie['link'] == '') {
                    this.seen = true;
                    this.movieadd = false;
                } else {
                    this.movieadd = true;
                    this.seen = false;
                    axios.post('/api/films', inputMovie).then((response) => {
                        window.location = response.data.redirect;
                    });
                }     
        }
    },
    watch: {
        
    }
    }

</script>

<style>
    body {
                background-color: #000010;
                color: white;
                font-size: 12px;
                position: absolute;
                   margin: 0 auto;
              
            }
            
            button {
                border: none;
                border-radius: 5px;
                font-size: 10px;
                background-color: #002E62;
                color: white;
            }

            tr {
                font-size: 16px;
                                     text-align: center;

            }

            td {
            }

     td img {
                width: 15%;
                height: auto;
             
            }

</style>
