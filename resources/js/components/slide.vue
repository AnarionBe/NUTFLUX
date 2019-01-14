<template>

    <div id="slide">
    
  <figure class="card__thumbnail" hover title="Click to play">
   <a href="/movie/play"><img class="poster" :src='film.poster'  alt=""></a> 
</figure>
          
<header  class="card__title">
         <h3>{{film.title | to-uppercase}}</h3> <p class="releasedate"> {{film.release}}</p>
         <!-- <p class="actors" v-for="actor in film.actors"> {{actor}} </p> -->
 <p class="director"> by {{film.director}}</p>
     </header>

        <main class="card__description">
        <span>{{film.synopsis  | to-slice}} ...</span>
    </main>
<div>
        <a href="/movie" class="button-more"  hover title="See more about the movie">More</a>
</div>
<div id="WatchLater">

       <a href="#" v-if="isFavorited" @click.prevent="unFavorite()">
          <i class="far fa-check-circle" style="color:green;margin:5px;" hover title="Already in your WatchList"></i>
        </a>
       
        
        <a href="#" v-else @click.prevent="favorite()">
            <i class="fas fa-heart" style="color:red;margin:5px;" hover title="Add to Watchlist"></i>
        </a>
     
        </div>
    </div>
</template>

<script>
import carousel from 'vue-owl-carousel'


export default {
 components: { carousel },
    data() {
        return {
            isFavorited: '',

        }
    },
    props:{
        search: Object,
        film: Object,
        favorites:Array,
    },

   computed: {
            isFavorite() {
                return this.favorited;
            },
        },
        methods: {
            favorite($event) {

            if(this.favorites.indexOf($event)) {
                this.isFavorited = true;
                this.favorites.push(this.film);
            }

                
                // axios.post('/favorite/'+post)
                //     .then(response => this.isFavorited = true)
                //     .catch(response => console.log(response.data));
            },

            unFavorite($event) {
                 if(this.favorites.indexOf($event)) {
                this.isFavorited = false
                this.favorites.splice(this.film);
            }

                
                // axios.post('/unfavorite/'+post)
                //     .then(response => this.isFavorited = false)
                //     .catch(response => console.log(response.data));
            }
        }

}

</script>


<style>

</style>
