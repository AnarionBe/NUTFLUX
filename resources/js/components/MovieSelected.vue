<template>
    <div id="movieselected">
        <div>

        </div>
        <div id="movieselected-container">

            <div class="movie-thumbnail">

                <img :src="film.poster" alt="" srcset="">
            </div>

            <div class="movie-info">
                <h2 class="movie-title">{{film.title}}</h2>
                <h3 class="movie-synopsis">Synopsis</h3>
                <p class="synopsis-info">
                   {{film.synopsis}}
                </p>
            </div>
            <youtube :video-id="film.link"></youtube>


            <div class="movie-actors">
                <span>

                </span>

            </div>

        </div>

        <button class="back-button" @click='back()'>Back</button>

    </div>
</template>

<script>
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
            axios(`/api/films/${this.$route.params.id}`).then(response => {
                this.film = response.data;
            });
        }
    }

</script>

<style>
    iframe {
        width: 100%;
        resize: true;
    }

    #movieselected {
        position: relative;
        text-align: center;
    }

    #movieselected-container {
        margin: 10px;
        text-align: center;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 25% 1fr 1fr;
        background-color: rgba(196, 196, 196, 0.25);
        width: auto;
        max-height: auto;
        border-radius: 10px;
    }

    .movie-thumbnail {
        height: auto;
        text-align: left;
        grid-column: 1/2;
        grid-row: 1/4;
    }

    .movie-thumbnail img {
        border-radius: 10px;
        margin: 10px;
        width: 65%;
        height: auto;
    }

    .movie-info {
        grid-column: 2/4;
        grid-row: 1/2;
        font-style: normal;
        line-height: normal;
        font-size: 20px;
        text-align: center;
        text-indent: 5px;
        color: #FFFFFF;
    }

    .movie-synopsis {
        text-align: left;
        font-size: 18px;
    }

    .synopsis-info {
        font-size: 10px;
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
