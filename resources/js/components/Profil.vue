<template>
   <div id="profil">
      <img class="logoheader" src="./img/logo-transparent3.png" alt="logo-beeflix" width="200" height="200">
   <div id="profil-container">

      <div id="actualusers">
       
      </div>

      <form action="" method="post">
               <div class="add-account">
            <label for="email"></label>
            <img class="icon-login" src="./img/icon/user.svg" alt="">
            <input class="input-info" type="email" placeholder="New User">
<br>
            <input type="button" class="input-button" value="Add">
         </div>
         </form>
   </div>
   
   
   <br>
      <button class="back-button" @click="back()">Back</button>

   </div>
</template>

<script>
export default {
         methods: {
         back() {
            window.history.back()
         }
      }
}

</script>

<style>

#profil {
         position: relative;
      text-align: center;
}

</style>