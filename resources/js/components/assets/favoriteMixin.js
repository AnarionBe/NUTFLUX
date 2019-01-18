export default {
    methods:{
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
    
    
    
            // axios.post('/unfavorite/'+post)
            //     .then(response => this.isFavorited = false)
            //     .catch(response => console.log(response.data));

    }
}