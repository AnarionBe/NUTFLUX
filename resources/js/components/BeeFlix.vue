<template>
   <div id="beeflix-container">

   <a href="/profil"><input class='input-button' type="button" value='Profil'></a> 
      <div id="container-movies">

      <img class="logoheader" src="./img/logo-transparent3.png" alt="" width="200" height="200">
</div>
   <form id="searchbox" action="get">
      <input class="searchbox" type="search" name="searchbox" id="searchbox" placeholder="Search by movie, actors, director,..">

</form>


 <div id="movie-carousel">


<section class="card-container">
<article v-for="film in films" class="slides">
        
        <film :film='film' ></film>
           
    </article>

</section>

       

</div>
           
 <button class="back-button" @click="back()">Back</button>


   </div>

       </div>
</template>

<script>
import slide from './slide';

export default {

    data() {
    return {
           films: [
               

              { 
                poster: "img/movies/interstellar.jpg",
                title : 'interstellar',
                synopsis: "Alors que la Terre se meurt, une équipe d'astronautes franchit un trou de ver apparu près de Saturne et conduisant à une autre galaxie, afin d'explorer un nouveau système stellaire et dans l'espoir de trouver une planète habitable pour sauver l'humanité",
                release: '2014',
                director:'Christopher Nolan',
                link: 'https://www.youtube.com/watch?v=zSWdZVtXT7E',
               },
               { 
                poster: "img/movies/venom.jpg",
                title : 'Venom',
                synopsis: "Possédé par un symbiote qui agit de manière autonome, le journaliste Eddie Brock devient le protecteur létal Venom",
                release: '2018',
                director:'Ruben Fleischer',
                link: 'https://www.youtube.com/watch?v=u9Mv98Gr5pY',
                },

               { 
                poster: "img/movies/trainingday.jpg",
                title : 'Training Day',
                synopsis: "Jake Hoyt est une nouvelle recrue de la police de Los Angeles. Décidé à devenir inspecteur, il sollicite une mise à l'essai de 24 heures auprès du sergent chef Alonzo Harris, un vétéran de la lutte antidrogue qui opère depuis douze ans dans les quartiers les plus chauds de la ville..",
                release: '2001',
                director:' Antoine Fuqua',
                link: 'https://www.youtube.com/watch?v=DXPJqRtkDP0',
                },

               { 
                poster: "img/movies/inception.jpg",
                title : 'Inception',
                synopsis: "Dom Cobb est un voleur expérimenté – le meilleur qui soit dans l’art périlleux de l’extraction : sa spécialité consiste à s’approprier les secrets les plus précieux d’un individu, enfouis au plus profond de son subconscient, pendant qu’il rêve et que son esprit est particulièrement vulnérable. Très recherché pour ses talents dans l’univers trouble de l’espionnage industriel..",
                release: '2010',
                director:' Christopher Nolan',
                link: 'https://www.youtube.com/watch?v=B4nIVh1yvvc',
               },

               { 
                poster: "/img/movies/pulpeficion.jpg",
                title : 'Pulpe Fiction',
                synopsis: "L'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s'entremêlent..",
                release: '1994',
                director:' Quentin Tarentino',
                link: 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
               },
               
           ],


    } },
methods: {
         back() {
            window.history.back()
         },
   
}

}


</script>

<style>

.card-container {
    font-style: roboto;
    display: grid;
    padding: 0.1rem;
    grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
    grid-gap: 0.6rem;
    max-width: auto;
    
}

.card .button {
    align-self: end;
}

/* Simple Card styles for prettying */

.slides {
    width: auto;

    display: grid;
    box-shadow: 0px 1px 5px #555;
    background-color: rgb(127, 127, 127);
}


.card__title h3 {
   font-weight: bolder;
    color: #2E3F5F;
    font-size: 18px;
}

.releasedate {
    font-style: italic;
    color:#2E3F5F;
}

.director {
    font-size: 9px;
    font-style: italic;
    color: rgb(86, 81, 96);
}

.card__description {
    font-style: roboto;
   padding: 2px;
  
    font-style: italic;
    font-size: 10px;
    background-color:  #9C9A9A;
    border: 2px solid rgb(129, 129, 129);
    min-height: auto;
    max-height: auto;
}

.button-play {
    display: block;
    background-color: rgb(175, 175, 175);
    padding: 10px 10px;
    color: #2E3F5F;
    text-decoration: none;
    text-align: center;
    transition: .4s ease-out;
    font-weight: bolder;
    border-radius: 0 0 5px 5px;
}

.button-play:hover {
     background-color: rgb(129, 129, 129);
}

.card__thumbnail img {
    outline: none;
    max-width: 100%;
    position: relative;
    border-radius: 0 0 15px 15px ;
    cursor: pointer;
        transition: .10 ease-in-out;
        transition-duration: .5s;

}

.card__thumbnail img:hover {
     outline: none;
    border: 2px solid grey;

}



#beeflix-container {
   position: relative;
    text-align: center;
   margin-left: 10px;
   margin-right: 10px;
}

#movie-carousel {
    padding: 3px;
    border-radius: 3px;
   background-color: grey;
   display: grid;
   width: auto;
   max-width: 1280px;
     margin: 0 auto;


}


.input-button {
position: absolute;

  right: 16px;
   margin-right: 25px;
   z-index:30;
}

#container-movies {
   position: relative;
   align-content: right;
}


input[type=search] {
	background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
	border: solid 1px #827E8A;
	padding: 9px 10px 9px 32px;
	width: 40px;
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
	-webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
	-moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
	box-shadow: 0 0 5px rgba(109,207,246,.5);
   outline: none;
}


input::-webkit-input-placeholder {
	color: #C4C4C4;
}

</style>
