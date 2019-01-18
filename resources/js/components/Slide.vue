<template>
    <div id="slide"   class="owl-items" >
    
        <figure class="card__thumbnail" hover title="Click to play">
            <router-link :to="`/films/${film.id}`">
                <img class="poster" :src="`${film.poster}`" :alt="`Poster of ${film.title}`">
            </router-link>
        </figure>
        <header class="card__title">
            <h3>{{film.title | to-uppercase}}</h3>
            <p class="releasedate"> {{film.release}}</p>
            <!-- <p class="actors" v-for="actor in film.actors"> {{actor}} </p> -->
            <p class="director"> by {{ `${film.firstname}`}} {{ `${film.lastname}` }} </p>
        </header>
    
        <main class="card__description">
            <span>{{film.synopsis | to-slice}} ...</span>
        </main>
        <div>
            <router-link :to="`/films/${film.id}`">
                <p class="button-more"> More </p>
            </router-link>
        </div>
        
        
        
        <div id="WatchLater">
            
           


            <a href="#" v-if="isFavorited" @click.prevent="unFavorite()">
                <i class="fab fa-forumbee" style="color:orange;margin:10px;" hover title="Already in your favorite"></i>
             </a>

    
            <a href="#" v-else @click.prevent="favorite($event) ">
                <i class="fas fa-heart" style="color:red;margin:5px;" hover title="Add to your favorite"></i>
            </a>

            <!--TODO fonctionnalité watch later -->
            <!-- toBeSeenLater = false at begin -->
            <a href="#" v-if="toBeSeenLater" @click.prevent="">
                <i class="fas fa-clock" style="color:green;margin:10px;" ></i>
            </a>

            <a href="#" v-else @click.prevent="addToWatchLater($event)" >
                <i class="fas fa-plus" style="color:grey;margin:10px;" hover title="Queue to Watchlater"></i>
            </a>
        </div>
    </div>
</template>

<script>
    import carousel from 'vue-owl-carousel';
    
    export default {
        components: {
            carousel
        },

        data() {
            return {
                isFavorited: false,
                toBeSeenLater: false,
            }
        },
        props: {
            search: Object,
            favorites: Array,
            watchLater: Array,
            film: Object,
        },

        methods: {
    
            favorite() {
                this.$snotify.success(
                    'You can watch it later',
                    'Add in favourite list', {
                        timeout: 2000,
                        showProgressBar: true,
                        backdrop: 0.3,
                        closeOnClick: true,
                    });
    
                this.isFavorited = true;
                this.favorites.push(this.film);
                // axios.post('/favorite/'+post)
                //     .then(response => this.isFavorited = true)
                //     .catch(response => console.log(response.data));
            },
    
            unFavorite() {
                this.$snotify.warning(
                    'No more in your favorite',
                    'Removed from favorite', {
                        timeout: 2000,
    
    
                        closeOnClick: true,
                        showProgressBar: false,
                        backdrop: 0.3,
                    });
    
    
                this.isFavorited = false;
                
               /* remove from favorites */
                function findIndex(arraytosearch, key, valuetosearch) {
                    for (var i = 0; i < arraytosearch.length; i++) {
                        if (arraytosearch[i][key] == valuetosearch) {
                        return i;
                    }
                    }
                    return null;
                    }
                let index = findIndex(this.favorites, 'id', this.film.id);
                /* console.log(index); */
                this.favorites.splice(index, 1);
            },

            addToWatchLater() {
                this.$snotify.success(
                    'You can watch it later',
                    'Add to view later list', {
                        timeout: 2000,
                        showProgressBar: true,
                        backdrop: 0.3,
                        closeOnClick: true,
                    });
                
                  console.log(this.watchLater);
                    this.toBeSeenLater = true;
                    this.watchLater.push(this.film);
            },

            
    
    
    
            // axios.post('/unfavorite/'+post)
            //     .then(response => this.isFavorited = false)
            //     .catch(response => console.log(response.data));
        }
    }
</script>


<style>
    
</style>
