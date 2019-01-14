<template>

    <div id="searching">
    
  <figure class="card__thumbnail">
   <a href="/movie/play"><img class="poster" :src='searched.poster'  alt=""></a> 
</figure>
<header  class="card__title">
         <h3>{{searched.title | to-uppercase}}</h3> <p class="releasedate"> {{searched.release}}</p>
         <p class="director"> <strong> by </strong> {{searched.director}}</p>
     </header>

        <main class="card__description">
        <span>{{searched.synopsis}}</span>
    </main>
        <a href="/movie" class="button-more">More</a>

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


export default {
       props:{
        search: Object,
        searched: Object,
        isFavorited: Boolean,
    },

}
</script>

<style>
    
    .slides-searched {
        border: 2px solid rgb(27, 38, 59);
        margin-left: 50px;
        border-radius: 5px;
        width: 240px;
        min-width: 180px;
        max-width: 260px;
        display: grid;
        box-shadow: 3px 5px 12px #2E3F5F;
        background-color: rgba(255, 255, 255, 0.205);
        transition: .4 ease-in-out;
        transition-duration: .4s;
    }


    .slides-searched:hover {
        box-shadow: 6px 4px 11px #2E3F5F;
        width: 260px;
    }
    
</style>