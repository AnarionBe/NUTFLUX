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
            <input type="button" class="input-add-user" value="Add">
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

<style scoped>

#profil {
         position: relative;
      text-align: center;
}

   .input-add-user {
      border: none;
      cursor: pointer;
      width: 120px;
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
   }

</style>