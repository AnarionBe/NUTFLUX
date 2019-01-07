<template>
    <div id="beeflix-container">
    
    
        <div id="container-movies">
    
            <img class="logoheader" src="./img/logo-transparent3.png" alt="" width="200" height="200">
            <a href="/profil"><input class='input-button-profil' type="button" value='Profil'></a>
               <form id="searchbox" action="get">
      <input v-model="search" class="searchbox" type="search" name="searchbox" id="searchbox" placeholder="Search by movie, actors, director,..">

</form>

        </div>
    
        <div id="movie-carousel">
    
    
            <section class="card-container">
                <carousel :loop="true" :items="5" :center="true" :autoplay="true">
                    <article v-for="film in films" class="slides">
    
                        <film :film='film'></film>
    
                    </article>
                </carousel>
            </section>
    
    
    
        </div>
    
        <button class="back-button" @click="back()">Back</button>
    
    
    </div>
    
    </div>
</template>

<script>
    import slide from './slide';
    import carousel from 'vue-owl-carousel'
    
    export default {

        data() {
            return {
                search:'',
                films: [{
                        poster: "img/movies/interstellar.jpg",
                        title: 'interstellar',
                        synopsis: "Alors que la Terre se meurt, une équipe d'astronautes franchit un trou de ver apparu près de Saturne et conduisant à une autre galaxie, afin d'explorer un nouveau système stellaire et dans l'espoir de trouver une planète habitable pour sauver l'humanité",
                        release: '2014',
                        director: 'Christopher Nolan',
                        link: 'https://www.youtube.com/watch?v=zSWdZVtXT7E',
                    },
                    {
                        poster: "img/movies/venom.jpg",
                        title: 'Venom',
                        synopsis: "Possédé par un symbiote qui agit de manière autonome, le journaliste Eddie Brock devient le protecteur létal Venom",
                        release: '2018',
                        director: 'Ruben Fleischer',
                        link: 'https://www.youtube.com/watch?v=u9Mv98Gr5pY',
                    },
    
                    {
                        poster: "img/movies/trainingday.jpg",
                        title: 'Training Day',
                        synopsis: "Jake Hoyt est une nouvelle recrue de la police de Los Angeles. Décidé à devenir inspecteur, il sollicite une mise à l'essai de 24 heures auprès du sergent chef Alonzo Harris, un vétéran de la lutte antidrogue qui opère depuis douze ans dans les quartiers les plus chauds de la ville..",
                        release: '2001',
                        director: ' Antoine Fuqua',
                        link: 'https://www.youtube.com/watch?v=DXPJqRtkDP0',
                    },
    
                    {
                        poster: "img/movies/inception.jpg",
                        title: 'Inception',
                        synopsis: "Dom Cobb est un voleur expérimenté – le meilleur qui soit dans l’art périlleux de l’extraction : sa spécialité consiste à s’approprier les secrets les plus précieux d’un individu, enfouis au plus profond de son subconscient, pendant qu’il rêve..",
                        release: '2010',
                        director: ' Christopher Nolan',
                        link: 'https://www.youtube.com/watch?v=B4nIVh1yvvc',
                    },
    
                    {
                        poster: "/img/movies/pulpeficion.jpg",
                        title: 'Pulpe Fiction',
                        synopsis: "L'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s'entremêlent..",
                        release: '1994',
                        director: ' Quentin Tarentino',
                        link: 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
                    },
    
                ],
    
    
            }
        },
        methods: {
            back() {
                window.history.back()
            },
    
        },
        components: {
            carousel
        },
    
    }
</script>

<style>
    .card-container {
   font-family: 'Roboto', sans-serif;

        display: grid;
        padding: 0.1rem;
        grid-template-columns: repeat(auto-fit, minmax(90px, 1fr));
        grid-gap: 0.6rem;
        max-width: auto;
    }
    
    .card .button {
        align-self: end;
    }
    
    
    /* Simple Card styles for prettying */
    
    .slides {
        margin: 15px;
        border-radius: 5px;
        width: auto;
        height: auto;
        display: grid;
        box-shadow: 0px 1px 5px #555;
        background-color: rgba(255, 255, 255, 0.5);
    }
    
    .card__title h3 {
        font-weight: bolder;
        color: #2E3F5F;
        font-size: 16px;
    }
    
    .releasedate {
        font-style: italic;
        color: #2E3F5F;
    }
    
    .director {
        font-size: 9px;
        font-style: italic;
        color: rgba(255, 255, 255, 0.65);
    }
    
    .card__description {
        font-style: italic;
        font-size: 0px;
        background-color: rgba(255, 255, 255, 0.503);
        width: 0px;
        height: 0px;
        display: flex;
    }
    
    .button-play {
        display: block;
        background-color: rgba(0, 46, 98, 0.428);
        padding: 5px;
        color: rgb(255, 255, 255);
        text-decoration: none;
        text-align: center;
        transition: .4s ease-out;
        font-weight: bolder;
        border-radius: 0 0 5px 5px;
    }
    
    .button-play:hover {
     background-color: rgba(0, 46, 98, 0.65);
     color: rgb(255, 255, 255);
    }
    
    .card__thumbnail img {
        outline: none;
        width: 80%;
        position: relative;
        border-radius: 5px 5px 5px 5px;
        cursor: pointer;
        transition: .5 ease-in-out;
        transition-duration: .3s;
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
        margin-left: 100px;
        margin-right: 100px;
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
        width: 90px;
        height: 36px;
        border-radius: 50px;
        background: #001935;
        font-size: 18px;
        font-style: normal;
        font-weight: normal;
        line-height: normal;
        color: #2E3F5F;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    
    #container-movies {
        position: relative;
        align-content: center;
       justify-content: center;
    }
    
    input[type=search] {
        background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 8px center;
        border: solid 1px #827E8A;
        padding: 9px 10px 9px 32px;
        width: 30px;
        color: #C4C4C4;
        -webkit-border-radius: 10em;
        -moz-border-radius: 10em;
        border-radius: 10em;
        background-color: #2E3F5F;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        transition: all .5s;
    }
    
    input[type=search]:focus {
        width: 235px;
        background-color: #2E3F5F;
        border-color: rgba(255, 166, 0, 0.544);
        -webkit-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        -moz-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        outline: none;
    }
    
    input::-webkit-input-placeholder {
        color: #C4C4C4;
    }
</style>
