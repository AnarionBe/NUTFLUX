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
<article v-for="slide in slides" class="slides">
        
    
        <slide :slide='slide' ></slide>
           

    </article>


    
<!-- 

    <article class="card">
        
        <figure class="card__thumbnail">
            <img src="./img/movies/interstellar.jpg" alt="" srcset="">
            
        </figure>
        <header class="card__title">
         <h3>Interstellar</h3>
     </header>
        <main class="card__description">
            Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun
        </main>
        <a href="/movie" class="button-play">Play</a>

    </article>

    
    <article class="card">
        
      <figure class="card__thumbnail">
          <img src="./img/movies/venom.jpg" alt="" srcset="">
          
      </figure>
      <header class="card__title">
       <h3>Venom</h3>
   </header>
      <main class="card__description">
          Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun
      </main>
      <a href="/movie" class="button-play">Play</a>

  </article>

  <article class="card">
        
   <figure class="card__thumbnail">
       <img src="./img/movies/trainingday.jpg" alt="" srcset="">
       
   </figure>
   <header class="card__title">
    <h3>Training Day</h3>
</header>
   <main class="card__description">
       Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun
   </main>
   <a href="/movie" class="button-play">Play</a>

</article>
<article class="card">
        
   <figure class="card__thumbnail">
      
      
       <img src="./img/movies/inception.jpg" alt="" srcset="">

         
   </figure>
   
   <header class="card__title">
    <h3>Inception</h3>
</header>
   <main class="card__description">
       Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun
   </main>
   <a href="/movie" class="button-play">Play</a>

</article>

<article class="card">
        
   <figure class="card__thumbnail">
       <img src="./img/movies/pulpeficion.jpg" alt="" srcset="">
       
   </figure>
   <header class="card__title">
    <h3>Puple Fiction</h3>
</header>
   <main class="card__description">
       Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun
   </main>
   <a href="/movie" class="button-play">Play</a>

</article>

<article class="card">
        
   <figure class="card__thumbnail">
       <img src="./img/movies/avengers.jpg" alt="" srcset="">
       
   </figure>
   <header class="card__title">
    <h3>Avengers : Infinity Wars</h3>
</header>
   <main class="card__description">
       Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun Lorem Ipsum dolor amet sun
   </main>
   <a href="/movie" class="button-play">Play</a>

</article> -->

</section>

       

</div>
            <!-- <div id="movie"><svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.1761 20.9932C16.976 20.9932 16.801 20.9432 16.626 20.8433L11 17.1695L5.37404 20.8433C5.02398 21.0682 4.5739 21.0432 4.24885 20.8183C3.92379 20.5684 3.77376 20.1435 3.87378 19.7436L5.64908 13.4956L0.348178 9.02209C0.0481264 8.77217 -0.0768949 8.34731 0.0481264 7.94744C0.173148 7.54757 0.523208 7.29765 0.923276 7.24766L7.24936 6.79781L10.0998 0.574815C10.2499 0.224928 10.5999 0 11 0C11.4001 0 11.7501 0.224928 11.9002 0.574815L14.7506 6.79781L21.0767 7.24766C21.4768 7.27266 21.8269 7.54757 21.9519 7.94744C22.0769 8.32232 21.9519 8.74718 21.6518 9.02209L16.3759 13.4707L18.1512 19.7186C18.2762 20.1185 18.1262 20.5434 17.7762 20.7933C17.6011 20.9183 17.4011 20.9932 17.1761 20.9932ZM11 14.9952C11.2 14.9952 11.3751 15.0451 11.5501 15.1451L15.5008 17.7193L14.2756 13.3957C14.1755 13.0208 14.3006 12.6209 14.6006 12.371L18.4763 9.09707L14.0255 8.74718C13.6505 8.72219 13.3504 8.49726 13.1754 8.17237L11 3.3989L8.82463 8.17237C8.6746 8.49726 8.34955 8.72219 7.97448 8.74718L3.52372 9.07207L7.39938 12.346C7.69944 12.5959 7.82446 12.9958 7.72444 13.3707L6.49923 17.7193L10.4499 15.1701C10.6249 15.0451 10.8 14.9952 11 14.9952Z" fill="#F3DC11"/>
</svg>
</div> -->
 <button class="back-button" @click="back()">Back</button>


   </div>

       </div>
</template>

<script>
import slide from './slide';

export default {

    data() {
    return {
           slides: [
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
    components: {

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
   padding: 1px;
  
    font-style: italic;
    font-size: 10px;
    background-color:  #9C9A9A;
    border: 2px solid rgb(129, 129, 129);
    min-height: 30px;
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
    max-width: 100%;
    position: relative;
    border-radius: 0 0 15px 15px ;
    cursor: pointer;
}

.card__thumbnail img:hover {
    max-width: 100%;
    position: relative;
}



#beeflix-container {

   position: relative;
    text-align: center;
   margin-left: 10px;
   margin-right: 10px;
}

#movie-carousel {
    border-radius: 5px;
   margin-top: 10px;
   margin-bottom: 10px;
   background-color: grey;
   display: grid;
   width: auto;
   max-width: 100%;
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
