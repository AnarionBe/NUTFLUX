<template>
   <div id="beeflix-container">
    <input class='input-button' type="button" value='Profil'>
      <div id="container-movies">
      <img class="logoheader" src="./img/logo-transparent3.png" alt="" width="200" height="200">
</div>
   <form id="searchbox" action="get">
      <input class="searchbox" type="search" name="searchbox" id="searchbox" placeholder="Search by movie, actors, movies, director,...">
</form>

   <div id="movie-carousel">
            
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
 <div> Your Content </div>

   </div>
       </div>
</template>

<script>

export default {

    data() {
    return {
           

    } }
}


</script>

<style scoped>
body {
     
}
#beeflix-container {
 position: relative;
      text-align: center;
   margin-left: 50px;
   margin-right: 50px;
}

#movie-carousel {
   margin-top: 20px;
   width: auto;
   height: 400px;
   background-color: grey;

}

#movie {
   width: auto;
   display: block;
 
   grid-column: 1/2;
   background-color: red;
}

.input-button {
position: absolute;
  top: 8px;
  right: 16px;
   margin-right: 25px;
}

#container-movies {
   position: relative;
   align-content: right;
}


input[type=search] {
	background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
	border: solid 2px #827E8A;
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
	width: 280px;
	background-color: #2E3F5F;
	border-color: #827E8A;
	-webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
	-moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
	box-shadow: 0 0 5px rgba(109,207,246,.5);
   outline: none;
}


input::-webkit-input-placeholder {
	color: #C4C4C4;
}

</style>
