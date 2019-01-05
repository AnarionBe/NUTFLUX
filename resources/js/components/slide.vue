<template>
    <div id="slide">
  <figure class="card__thumbnail">
<img  :src='slide.src'  alt="">
</figure>
<header  class="card__title">
         <h3>Yolo</h3>
     </header>

        <main class="card__description">
            Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun
        </main>
        <a href="/movie" class="button-play">Play</a>

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
