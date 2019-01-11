<template>
    <div id="slide">

        <figure class="card__thumbnail">
            <a href="/movie/play"><img class="poster" :src='film.poster' alt=""></a>
        </figure>
        <header class="card__title">
            <h3>{{film.title | to-uppercase}}</h3>
            <p class="releasedate"> {{film.release}}</p>
            <!-- <p class="actors" v-for="actor in film.actors"> {{actor}} </p> -->
            <p class="director"> by {{film.director}}</p>
        </header>

        <main class="card__description">
            <span>{{film.synopsis | to-slice}} ...</span>
        </main>
        <a href="/movie" class="button-play">More</a>

    </div>
</template>

<script>
    import carousel from 'vue-owl-carousel'


    export default {
        components: {
            carousel
        },
        data() {
            return {

            }
        },
        props: {
            search: Object,
        },
        

    }

</script>


<style>

</style>
