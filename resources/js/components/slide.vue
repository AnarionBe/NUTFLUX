<template>
    <div id="slide">
  <figure class="card__thumbnail">
   <a href="/movie/play"><img class="poster" :src='slide.poster'  alt=""></a> 
</figure>
<header  class="card__title">
         <h3>{{slide.title}}</h3> <p class="releasedate"> {{slide.release}}</p>
         <p class="director"> by {{slide.director}}</p>
     </header>

        <main class="card__description">
        {{slide.synopsis}}
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
        slide: Object,
    }

}
</script>


<style>

</style>
