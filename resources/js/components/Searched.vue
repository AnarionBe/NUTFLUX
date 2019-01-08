<template>

    <div id="searching">
    
  <figure class="card__thumbnail">
   <a href="/movie/play"><img class="poster" :src='searched.poster'  alt=""></a> 
</figure>
<header  class="card__title">
         <h3>{{searched.title}}</h3> <p class="releasedate"> {{searched.release}}</p>
         <p class="director"> by {{searched.director}}</p>
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
#searching {

}
</style>