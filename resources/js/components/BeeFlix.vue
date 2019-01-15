<template>
  <div id="beeflix-container">
    <div id="container-movies">
      <img class="logoheader" src="./img/logo-transparent3.png" alt width="200" height="200">
      <a href="/profil">
        <input class="input-button-profil" type="button" value="Profil">
      </a>
      
      <input
        hover
        title="Click to search"
        v-model="search"
        class="searchbox"
        type="search"
        name="searchbox"
        id="searchbox"
        placeholder="Search by movie, actors, director,.."
      >
    </div>

    <div id="movie-carousel" v-show="AllFilms">
      <section class="card-container">
        <carousel :items="5" :autoplay="true">
          <article v-for="film in films" class="slides" track-by="$index">
            <film :film="film" :favorites="favorites"></film>
          </article>
        </carousel>
      </section>
    </div>

    <div id="movie-carousel" v-show="SelectedFilms">
      <section class="card-container">
        <carousel
          :dots="false"
          :nav="false"
          :autoplayHoverPause="true"
          :autoplayTimeout="2500"
          :autoHeight="false"
          :loop="false"
          :center="true"
          :autoplay="false "
        >
          <article v-for="searched in filteredFilms" class="slides-searched">
            <searched :searched="searched"></searched>
          </article>
        </carousel>
      </section>
    </div>

    <button class="back-button" @click="back()">Back</button>
  </div>
</template>

<script>
import carousel from "vue-owl-carousel";

export default {
    data() {
        return {
            favorites: [],
            AllFilms: true,
            SelectedFilms: false,
            search: "",
            films: [
                {
                    id: 1,
                    poster: "img/movies/interstellar.jpg",
                    title: "interstellar",
                    synopsis:
                        "Alors que la Terre se meurt, une équipe d'astronautes franchit un trou de ver apparu près de Saturne et conduisant à une autre galaxie, afin d'explorer un nouveau système stellaire et dans l'espoir de trouver une planète habitable pour sauver l'humanité",
                    release: "2014",
                    director: "Christopher Nolan",
                    link: "https://www.youtube.com/watch?v=zSWdZVtXT7E",
                    actors: [
                        "Matthew McConaughey",
                        "Anne Hathaway",
                        "Jessica Chastain",
                    ],
                },
                {
                    poster: "img/movies/venom.jpg",
                    title: "venom",
                    synopsis:
                        "Possédé par un symbiote qui agit de manière autonome, le journaliste Eddie Brock devient le protecteur létal Venom",
                    release: "2018",
                    director: "Ruben Fleischer",
                    link: "https://www.youtube.com/watch?v=u9Mv98Gr5pY",
                    actors: [
                        "Matthew McConaughey",
                        "Anne Hathaway",
                        "Jessica Chastain",
                    ],
                },

                {
                    poster: "img/movies/trainingday.jpg",
                    title: "training day",
                    synopsis:
                        "Jake Hoyt est une nouvelle recrue de la police de Los Angeles. Décidé à devenir inspecteur, il sollicite une mise à l'essai de 24 heures auprès du sergent chef Alonzo Harris, un vétéran de la lutte antidrogue qui opère depuis douze ans dans les quartiers les plus chauds de la ville..",
                    release: "2001",
                    director: " Antoine Fuqua",
                    link: "https://www.youtube.com/watch?v=DXPJqRtkDP0",
                    actors: [
                        "Matthew McConaughey",
                        "Anne Hathaway",
                        "Jessica Chastain",
                    ],
                },

                {
                    poster: "img/movies/inception.jpg",
                    title: "inception",
                    synopsis:
                        "Dom Cobb est un voleur expérimenté – le meilleur qui soit dans l’art périlleux de l’extraction : sa spécialité consiste à s’approprier les secrets les plus précieux d’un individu, enfouis au plus profond de son subconscient, pendant qu’il rêve..",
                    release: "2010",
                    director: "Christopher Nolan",
                    link: "https://www.youtube.com/watch?v=B4nIVh1yvvc",
                    actors: [
                        "Matthew McConaughey",
                        "Anne Hathaway",
                        "Jessica Chastain",
                    ],
                },

                {
                    poster: "/img/movies/pulpeficion.jpg",
                    title: "pulpe fiction",
                    synopsis:
                        "L'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s'entremêlent..",
                    release: "1994",
                    director: "Quentin Tarentino",
                    link: "https://www.youtube.com/watch?v=s7EdQ4FqbhY",
                    actors: [
                        "Matthew McConaughey",
                        "Anne Hathaway",
                        "Jessica Chastain",
                    ],
                },
            ],
        };
    },
    methods: {
        back() {
            window.history.back();
        },
    },
    components: {
        carousel,
    },
    computed: {
        filteredFilms: function() {
            if (this.search === "") {
                this.AllFilms = true;
                this.SelectedFilms = false;
            } else {
                this.AllFilms = false;
                this.SelectedFilms = true;
            }

            return this.films.filter((film, director) => {
                return film.title.match(this.search);
            });
        },
    },
};
</script>

<style>
.card-container {
    font-family: "Roboto", sans-serif;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    grid-gap: 1rem;
    max-width: auto;
}

.card .button {
    align-self: end;
}

/* Simple Card styles for prettying */

.slides {
    border: 2px solid rgb(27, 38, 59);
    margin-left: 50px;
    border-radius: 5px;
    width: 240px;
    min-width: 180px;
    max-width: 260px;
    display: grid;
    box-shadow: 3px 5px 12px #2e3f5f;
    background-color: rgba(255, 255, 255, 0.205);
    transition: 0.4 ease-in-out;
    transition-duration: 0.4s;
}

.slides:hover {
    box-shadow: 6px 4px 11px #2e3f5f;
}

.card__title h3 {
    font-weight: bolder;
    padding: 2px;
    color: rgba(250, 250, 250, 0.596);
    font-size: 18px;
    border: 1px dotted rgba(0, 46, 98, 0.428);
    border-width: thin;
}

.releasedate {
    font-style: italic;
    font-size: 8px;
    color: rgba(255, 255, 255, 0.5);
}

.director {
    font-size: 8px;
    font-style: italic;
    color: rgb(223, 169, 52);
}

/* .actors { 
        font-size: 9px;
        font-style: italic;
        color: rgba(0, 46, 98, 0.428);
    } */

.card__description {
    border-top: 1px dotted rgba(0, 46, 98, 0.428);
    border-width: thin;
    font-style: italic;
    font-size: 11px;
    margin: 2px;
    width: auto;
    height: auto;
    display: grid;
    color: rgba(255, 255, 255, 0.493);
}

.button-more {
    display: block;
    background-color: rgba(0, 46, 98, 0.428);
    padding: 3px;
    color: rgb(255, 255, 255);
    text-decoration: none;
    text-align: center;
    transition: 0.4s ease-out;
    font-weight: bolder;
    border-radius: 0 0 5px 5px;
    font-size: 10px;
}

.button-more:hover {
    background-color: rgba(0, 61, 131, 0.212);
    color: rgb(223, 169, 52);
}

.button-watchlater {
    /* height: 16px;
        width: 16px;
        margin: 5px;
        cursor: pointer;
        border: none;
        background-color: rgba(255, 255, 255, 0);
        padding: auto;
        color: rgb(0, 0, 0);
        text-decoration: none;
        text-align: center; */

    display: inline-block;
    padding: 3px;
    vertical-align: middle;
    line-height: 1;
    font-size: 16px;
    color: #ababab;
    cursor: pointer;
    -webkit-transition: color 0.2s ease-out;
    transition: color 0.2s ease-out;
}

.card__thumbnail img {
    outline: none;
    width: 100%;
    position: relative;
    border-radius: 5px 5px 5px 5px;
    cursor: pointer;
}

#beeflix-container {
    position: relative;
    text-align: center;
    margin-left: 10px;
    margin-right: 10px;
    max-width: auto;
}

#movie-carousel {
    border-radius: 5px;
    display: grid;
    width: auto;
    max-width: auto;
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 20px;
    margin-top: 20px;
}

.input-button-profil {
    cursor: pointer;
    position: absolute;
    right: 16px;
    margin-right: 35px;
    top: 100px;
    border: none;
    cursor: pointer;
    width: 75px;
    height: 24px;
    border-radius: 50px;
    background: #001935;
    font-size: 12px;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    color: #2e3f5f;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 10px;
}

input[type="search"] {
    background: #ededed
        url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png)
        no-repeat 8px center;
    border: solid 1px #001935;
    padding: 9px 10px 9px 32px;
    width: 30px;
    color: #c4c4c4;
    -webkit-border-radius: 10em;
    -moz-border-radius: 10em;
    border-radius: 10em;
    background-color: #2e3f5f;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    font-size: 10px;
}

input[type="search"]:focus {
    width: 200px;
    background-color: #2e3f5f;
    border: 2px solid #001935;
    -webkit-box-shadow: 0 0 5px rgba(109, 207, 246, 0.5);
    -moz-box-shadow: 0 0 5px rgba(109, 207, 246, 0.5);
    box-shadow: 0 0 10px rgba(109, 207, 246, 0.5);
    outline: none;
}

input::-webkit-input-placeholder {
    color: rgb(223, 169, 52);
}
</style>
