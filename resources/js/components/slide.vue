<template>
    <div id="slide">
  <figure class="card__thumbnail">
   <a href="/movie/play"><img class="poster" :src='film.poster'  alt=""></a> 
</figure>
<header  class="card__title">
         <h3>{{film.title}}</h3> <p class="releasedate"> {{film.release}}</p>
         <p class="director"> by {{film.director}}</p>
     </header>

        <main class="card__description">
        {{film.synopsis}}
    </main>
        <a href="/movie" class="button-play">More</a>

    </div>
</template>

<script>
export default {

    data() {
        return {}
    },
    props:{
        film: Object,
    }

}
</script>


<style>

</style>
