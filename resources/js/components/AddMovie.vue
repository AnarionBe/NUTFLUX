<template>
    <div id="addmovie">
        <router-link to="/films">
            <img class="logoheader" src="./img/logo-transparent3.png" alt="" width="200" height="200">
        </router-link>
    
        <navbar></navbar>
        <div class="form-group">
            <label for="title">Movie name : </label>
            <input type="text" class="form-control" id="title" name="title" required v-model="newItem.title" placeholder=" Enter movie name">
    
        </div>
    
        <div class="form-group">
            <label for="filmdirector">Movie director : </label>
    
            <select name="directorlist" id="director" v-model="newItem.filmdirector" class="form-control" data-live-search="false">
        
                     <option type="text" v-for="(filmdirector) in filmdirectorslist.listFilmsDirectors" :key="`
                    ${filmdirector.id}`" :value="`${filmdirector.id}`">{{filmdirector.lastname}} {{filmdirector.firstname}}</option> -->
           
                   <!-- <v-select v-for="(filmdatabase) in filmdatabases" :key="`
                    ${filmdatabase.id}`" v-model="newItem.filmdirector" :options="[`${filmdatabase.lastname} ${filmdatabase.firstname}`]"></v-select> --> 
        
           </select>
    
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
            <input type="numers" class="form-control" id="release" name="release" required v-model="newItem.release" placeholder="Year of Release (ex: 2003)">
        </div>
    
        <div class="form-group">
            <label for="synopsis">Synopsis:</label>
            <textarea type="text" class="form-control" id="synopsis" name="synopsis" required v-model="newItem.synopsis" placeholder=" Enter synopsis"> </textarea> <br>
            <p class="text-center alert alert-danger" v-if="seen"> Please fill all fields </p>
            <p class="text-center alert alert-success" v-if="movieadd">Your Movie is added</p>
        </div>
    
        <button class="btn btn-primary" @click.prevent="createItem()">
                    <span class="glyphicon glyphicon-plus"></span> ADD
                </button>
        <br>
        <!--     
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
                    <router-link :to="`/films/${filmdatabase.id}`">
                        <td>
                            {{filmdatabase.title}}</td>
                    </router-link>
        
                    <td>{{filmdatabase.firstname}} {{filmdatabase.lastname}} </td>
                    <td><a :href="`https://youtube.com/embed/${filmdatabase.link}`">https://youtu.be/{{filmdatabase.link}}</a></td>
                    <td>{{filmdatabase.release}} </td>
                    <td>{{filmdatabase.synopsis | to-slice }}...</td>
                    <td><img class="poster-list" :src="`${filmdatabase.poster}`" alt="" srcset=""></td>
                </tr>
        
            </table> -->
    
    
    </div>
</template>

<script>
    import {
        RadialMenu,
        RadialMenuItem
    } from 'vue-radial-menu'
    
    export default {
    
        created() {
            axios.get(`/api/films/`).then(response => {
                this.filmdatabases = response.data;
            });



            axios.get(`/api/filmdirectors/`).then(response => {
                this.filmdirectorslist = response.data;
            });
        },
    
    
    
        data() {
            return {
                filmdatabases: [],
                filmdirectorslist: [],
                items: [],
                seen: false,
                movieadd: false,
                newItem: {
                    'title': '',
                    'synopsis': '',
                    'release': '',
                    'filmdirector': '999',
                    'poster': '',
                    'link': ''
                },
            }
    
        },
        methods: {
    
            createItem: function createItem() {
    
                var inputMovie = this.newItem;
                var YoutubeId = inputMovie['link'].slice(32, 100);

                if (inputMovie['title'] == '' || inputMovie['release'] == '' || inputMovie['synopsis'] == '' ||
                    inputMovie['link'] == '') {
                    this.seen = true;
                    this.movieadd = false;
    
    
                } else {
                    this.movieadd = true;
                    this.seen = false;
                    inputMovie.link = YoutubeId;
    
     
                    axios.post('/api/films', inputMovie).then((response) => {
                        this.$router.push('/films')
                    });
                }
    
            }
    
        },
    
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
    
    select {
        padding: 4px;
        margin: 0;
        background: #fff;
        color: #888;
        border: none;
        outline: none;
        display: inline-block;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
        width: 150px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }
    
    
    /* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
    
    @media screen and (-webkit-min-device-pixel-ratio:0) {
        select {
            padding-right: 18px
        }
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
    
    td {}
    
    td img {
        width: 15%;
        height: auto;
    }
</style>
