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
        <a href="/movie" class="button-play">More</a>

    </div>
</template>


<script>
export default {
       props:{
        search: Object,
        searched: Object,
    },

}
</script>

<style>
    
    .slides-searched {
        border: 2px solid rgb(27, 38, 59);
        margin: 8px;
        border-radius: 5px;
        width: auto;
        max-width: 240px;
        height: auto;
        display: grid;
        box-shadow: 3px 5px 12px #2E3F5F;
        background-color: rgba(255, 255, 255, 0.5);
        display: grid;
        transition: .3 ease-in-out;
        transition-duration: .3s;
    }


    .slides-searched:hover {
        box-shadow: 6px 4px 11px #2E3F5F;
        margin: 15px;
    }
    
</style>