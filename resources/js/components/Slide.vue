<template>
    <div id="slide" class="owl-items">
    
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
            <a href="#" @click.prevent="favorite($event)">
                <i v-if="isFavorited" class="fab fa-forumbee" style="color:orange;margin:10px;" hover title="Already in your favorite"></i>
    
                <i v-else class="fas fa-heart" style="color:red;margin:5px;" hover title="Add to your favorite"></i>
            </a>
    
            <!-- toBeSeenLater = false at begin -->
            <a href="#" @click.prevent="addToWatchLater()">
                <i v-if="toBeSeenLater" class="fas fa-clock" style="color:green;margin:10px;"></i>
                <i v-else class="fas fa-plus" style="color:grey;margin:10px;" hover title="Queue to Watchlater"></i>
            </a>
        </div>
    </div>
</template>

<script>
    import carousel from 'vue-owl-carousel';
    
    export default {
    
    
        created() {
    
            var filmsviews = this.film.views[0];
    
            if (filmsviews.user === 2) {
    
                    if (filmsviews.favorite === 1) {
                        this.isFavorited = true;
                    } else {
                        this.isFavorited = false;
        
                    };
        
                    if (filmsviews.watchlater === 1) {
                        this.toBeSeenLater = true;
                    } else {
                        this.toBeSeenLater = false;
        
                    }
    
            } else {
                this.toBeSeenLater = false;
                this.isFavorited = false;
    
            }
        },
    
        components: {
            carousel
        },
    
    
        data() {
            return {
                isFavorited: false,
                toBeSeenLater: false,
                userFavorite: {
                    user: '',
                    film: '',
                },
    
                userWatchLater: {
                    user: '',
                    film: '',
                    viewed: '',
                },
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
                if (this.isFavorited == false) {
                    this.$snotify.success(
                        'You can watch it later',
                        'Add in favourite list', {
                            timeout: 2000,
                            showProgressBar: true,
                            backdrop: 0.3,
                            closeOnClick: true,
                        });
              console.log('add to favorite database')
                } else {
                    this.$snotify.warning(
                        'No more in your favorite',
                        'Removed from favorite', {
                            timeout: 2000,
                            closeOnClick: true,
                            showProgressBar: false,
                            backdrop: 0.3,
                        });
               console.log('remove to favorite database')
                }
    
    
                this.isFavorited = !this.isFavorited;
                this.favorites.push(this.film);
    
                this.userFavorite.user = 2;
                this.userFavorite.film = this.film.id;
    
                axios.post('/api/favs', this.userFavorite).then((response) => {
          
                    this.$router.push('/films')
                });
            },
    
            addToWatchLater() {
    
                if (this.toBeSeenLater == false) {
                    this.$snotify.success(
                        'You can watch it later',
                        'Add to Watch Later list', {
                            timeout: 2000,
                            showProgressBar: true,
                            backdrop: 0.3,
                            closeOnClick: true,
                        });
               console.log('add to watchlist database')
                } else {
                    this.$snotify.warning(
                        'Warning !',
                        'Removed from the Watch Later list', {
                            timeout: 2000,
                            showProgressBar: true,
                            backdrop: 0.3,
                            closeOnClick: true,
                        });
                     console.log('remove to watchlist database')
                }
    
                this.toBeSeenLater = !this.toBeSeenLater;
                this.watchLater.push(this.film);
    
                this.userWatchLater.user = 2;
                this.userWatchLater.film = this.film.id;
    
                axios.post('/api/watchlist', this.userWatchLater).then((response) => {
         
                    this.$router.push('/films')
                });
    
            },
    
            removeFromWatchLater() {
    
    
                this.toBeSeenLater = false;
    
                /* get removed film index */
                function findIndex(arraytosearch, key, valuetosearch) {
                    for (var i = 0; i < arraytosearch.length; i++) {
                        if (arraytosearch[i][key] == valuetosearch) {
                            return i;
                        }
                    }
                    return null;
                }
                let watchIndex = findIndex(this.watchLater, 'id', this.film.id);
                console.log(watchIndex);
                this.watchLater.splice(watchIndex, 1);
            }
    
    
    
            // axios.post('/unfavorite/'+post)
            //     .then(response => this.isFavorited = false)
            //     .catch(response => console.log(response.data));
        }
    }
</script>


<style>
    
</style>
