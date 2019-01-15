<template>
    <div id="beeflix-container">
        <div id="container-movies">
                 <img class="logoheader" src="./img/logo-transparent3.png" alt="" width="200" height="200">
            <a href="/profil"><input class='input-button-profil' type="button" value='Profil'></a>

 <div id="navbar">

    <radial-menu
      style="color:white; margin: 0 auto; background-color: rgba(255, 255, 255, 0.205)"
      :itemSize="60"
      :radius="145"
      :angle-restriction="-180">
        <radial-menu-item
          v-for="(item, index) in menuitems" 
          :key="index" 
          style="background-color: rgba(255, 255, 255, 0.205); " 
          @click="() => handleClick(item)">
      <router-link :to="`/${item.id}`"><span style="color:rgb(223, 169, 52);font-size: 10px;">{{item}}</span></router-link> 



        
        </radial-menu-item>
        
      </radial-menu>
      <div style="color: rgb(223, 169, 52); margin-top: 5px;">{{ lastClicked }}</div>
  </div>
            <input hover title="Click to search" v-model="search" class="searchbox" type="search" name="searchbox" id="searchbox" placeholder="Search by movie, actors, director,..">
    
        </div>

        <div id="movie-carousel" v-show="AllFilms">
              
            <section class="card-container">
                <carousel :dots="true" :items="3" :nav="true" :autoplayHoverPause="true" :autoplayTimeout="2500" :autoHeight="false" :loop="true" :center="true" :autoplay="true ">
    
                    <article v-for="film in filmlist" class="slides" :key="film.id" >
                        <film :film='film' :favorites='favorites'></film>
    
                    </article>
              </carousel>
            </section>
        </div>
    
        <div id="movie-carousel" v-show="SelectedFilms">
            <section class="card-container">
                <carousel :items="4" :dots="true" :nav="false" :autoplayHoverPause="true" :autoplayTimeout="2500" :autoHeight="false" :loop="true" :center="true" :autoplay="false ">
    
                    <article v-for="searched in filteredFilms" class="slides-searched" :key="searched.id" >
    
                        <searched :searched='searched'></searched>
    
                    </article>
                </carousel>
            </section>
    
    
    
        </div>
        <vue-snotify></vue-snotify>

        <button class="back-button" @click="back()">Back</button>
    
    
    </div>
    
    
</template>

<script>
import { RadialMenu,  RadialMenuItem } from 'vue-radial-menu'
    import carousel from 'vue-owl-carousel'
    import Snotify from 'vue-snotify'

    export default {

  
           created() {
            axios.get(`/api/films/`).then(response => {
                this.filmlist = response.data;
            });
                },
                
        data() {
            return {
                      menuitems: [
                          'Profil', 
                          'Add a movie',
                           'Github',
                            'Disconnect',
                             'Favorites', 
                             'WatchLater'
                          ],
                  lastClicked: 'Bee-Menu',
                favorites: [],
                AllFilms: true,
                SelectedFilms: false,
                search: '',
                filmlist: [],
                    
            }
        },
        methods: {
        handleClick (item) {
      this.lastClicked = item;},
            back() {
                window.history.back()
            },

        },
        components: {
            carousel,
                RadialMenu,
    RadialMenuItem
        },
        computed: {
            filteredFilms: function() {
                if (this.search === '') {
                    this.AllFilms = true;
                    this.SelectedFilms = false;
                } else {
                    this.AllFilms = false;
                    this.SelectedFilms = true;
                };
    
                return this.filmlist.filter((film, director) => {
                  return film.title.match(this.search);
             
                })
            },

        },
    }
</script>

<style>



    .card-container {
        font-family: 'Roboto', sans-serif;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        grid-gap: 1rem;
        max-width: auto;
        position: relative;

    }

    .card .button {
        align-self: end;
    }
    
#navbar span:hover {
        background-color: grey;
    }
    
    /* Simple Card styles for prettying */
    
    .slides {
        border: 2px solid rgb(27, 38, 59);
        margin: 15px;
        border-radius: 5px;
        width: 200px;
        max-width: 240px;
        display: inline-block;
        box-shadow: 3px 5px 12px #2E3F5F;
        background-color: rgba(255, 255, 255, 0.205);
        transition: .4 ease-in-out;
        transition-duration: .4s;
    }
    
    .slides:hover {
        box-shadow: 6px 4px 11px #2E3F5F;

    }

    .card__title h3 {
        font-weight: bolder;
        padding: 2px;
        color: rgba(250, 250, 250, 0.596);
        font-size: 12px;
         border: 1px dotted rgba(0, 46, 98, 0.428);
         border-width: thin;
    }
    
    .releasedate {
        font-style: italic;
        font-size: 8px;
        color: rgba(255, 255, 255, 0.5);
    }
    
    .director {
        font-size: 8px;
        font-style: italic;
        color: rgb(223, 169, 52);
    }
    
    /* .actors { 
        font-size: 9px;
        font-style: italic;
        color: rgba(0, 46, 98, 0.428);
    } */

    .card__description {
        margin: 0 auto;
        border-top: 1px dotted rgba(0, 46, 98, 0.428);
        border-width: thin;
        font-style: italic;
        font-size: 10px;
        margin: 3px;
        width: auto;
        height: auto;
        display: grid;
        color: rgba(255, 255, 255, 0.493);
    }
    
    .button-more {
        
        background-color: rgba(0, 46, 98, 0.428);
        padding: 3px;
        color: rgb(255, 255, 255);
        text-decoration: none;
        text-align: center;
        transition: .4s ease-out;
        font-weight: bolder;
        border-radius: 0 0 5px 5px;
        font-size: 10px;
    }
    
    .button-more:hover {
        background-color: rgba(0, 61, 131, 0.212);
        color: rgb(223, 169, 52);
    }

    .button-watchlater{
  
    padding: 3px;
    vertical-align: middle;
    line-height: 1;
    font-size: 16px;
    color: #ABABAB;
    cursor: pointer;
    -webkit-transition: color .2s ease-out;
    transition: color .2s ease-out;
    }
    
    .card__thumbnail img {
        outline: none;
        width: 100%;
        border-radius: 5px 5px 5px 5px;
        cursor: pointer;
    }
    
    #beeflix-container {
        position: sticky;
        text-align: center;
        margin-left: 5px;
        margin-right: 5px;
        max-width: auto;
    }
    
    #movie-carousel {
        border-radius: 5px;
        width: auto;
        max-width: auto;
        margin-left: 50px;
        margin-right: 50px;
        margin-bottom: 20px;
      
    }
    
    .input-button-profil {
        cursor: pointer;
        position: absolute;
        right: 16px;
        margin-right: 35px;
        top: 100px;
        border: none;
        cursor: pointer;
        width: 75px;
        height: 24px;
        border-radius: 50px;
        background: #001935;
        font-size: 12px;
        font-style: normal;
        font-weight: normal;
        line-height: normal;
        color: #2E3F5F;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    
    input[type=search] {
        background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 8px center;
        border: solid 1px #001935;
        padding: 9px 10px 9px 32px;
        width: 30px;
        color: #C4C4C4;
        -webkit-border-radius: 10em;
        -moz-border-radius: 10em;
        border-radius: 10em;
        background-color: #2E3F5F;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        transition: all .5s;
        font-size: 10px;
    }
    
    input[type=search]:focus {
        width: 200px;
        background-color: #2E3F5F;
        border: 2px solid #001935;
        -webkit-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        -moz-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        box-shadow: 0 0 10px rgba(109, 207, 246, .5);
        outline: none;
    }
    
    input::-webkit-input-placeholder {
        color: rgb(223, 169, 52);
    }
</style>
