<template>
   <div id="welcome">

      <img class="logo-welcome" src="./img/logo-transparent-welcome.png" height="1080px" alt="logo-beeflix">
      <div class="button-welcome">
         <a href="/login"><input class="welcome-button" type="submit" value="Sign-In" name="signin"> </a>
         <a href="/register">
            <input type="button" value="Register" class='welcome-button'></a>
      </div>
      <br>
   </div>
</template>

<script>
   export default {
   
   }
</script>

<style>
body {
         background-color: #000010;

}
   #welcome {
      position: relative;
      text-align: center;
   }

.welcome-button {
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
      margin-right: 80px;
}
   .logo-welcome {
      margin-top: -290px;
   }

   .button-welcome {
      margin-top: -270px;
       text-align: center;
       padding-bottom: 20px;
       margin-left: 40px;
   }


</style>