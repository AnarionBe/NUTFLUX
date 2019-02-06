<template>
    <div id="movieselected">
    
        <img class="logoheader" src="./img/logo-transparent3.png" alt="logo-beeflix" width="200" height="200">
    
        <div id="movieselected-container">
    
            <div class="movie-thumbnail">
                <img :src="`${film.poster}`" alt="" srcset="">
            </div>
    
            <div class="movie-info">
                <h2 class="movie-title">{{film.title}}</h2>
                <h3 class="movie-synopsis">Synopsis</h3>
                <p class="synopsis-info">
                    {{film.synopsis}}
                </p>
            </div>
            <div id="youtube-player">
            <youtube :video-id="film.link"></youtube>
    </div>
            <div class="movie-actors">
                <span>
    
                    </span>
    
            </div>
    
        </div>
    
        <button class="back-button" @click='back()'>Back</button>
    
    </div>
</template>

<script>
    import BeeFlix from './BeeFlix';
    
    export default {
        data() {
            return {
                playerVars: {
                    autoplay: 0
                },
                film: {},
            }
        },
        methods: {
            playing() {
                console.log('\o/ we are watching!!!')
            },
            back() {
                window.history.back()
            }
        },
        created() {
            axios.get(`/api/films/${this.$route.params.id}`).then(response => {
                this.film = response.data;
            });
        }
    }
</script>

<style>

    #movieselected {
        margin: 0 auto;

        position: relative;
        text-align: center;
        
    }
    
    #movieselected-container {
        grid-column: 2/3;
        margin: 100px;
        text-align: center;

        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 10% 1fr 10%;
        background-color: rgba(196, 196, 196, 0.25);
        width: auto;
        height: 600px;
        border-radius: 10px;
        justify-content: center;
        justify-items: center;
    }
    
    .movie-thumbnail {
     
      
    }
    
    .movie-thumbnail img {
       grid-column: 1/2;
       margin:20px;
    width: 280px;
    position: relative;

       grid-row: 2/3;
       display: block;

border-radius: 10px;
    }
    
    .movie-title {
        font-size: 60px
    }
    #youtube-player {
       grid-column: 2/4;
       margin-top: 150px;
    width: auto;
    height:auto;
       grid-row: 2/4;
       display: grid;
position: relative;
float: right;

    }
    
    .movie-info {
         position: relative;
        grid-column: 2/4;
        grid-row: 1/4;
        font-style: normal;
        line-height: normal;

        text-indent: 5px;
        color: #FFFFFF;
        margin: 0 auto;

    }
    
    .movie-synopsis {
        text-align: center;
    
        font-size: 24px;
                margin-bottom: 15px;
    }
    
    .synopsis-info {
        font-size: 16px;
        font-weight: 400;
        margin-right: 10px;
        text-align: justify;
     
    }
    
    .movie-actors {
        width: 72px;
        height: 48px;
        grid-column: 2/4;
        text-align: center;
        grid-row: 3/5;
    }
</style>
