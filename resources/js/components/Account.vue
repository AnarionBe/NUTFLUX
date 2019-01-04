<template>
   <div id="choose-account">
  <img class="logoheader" src="./img/logo-transparent3.png" alt="logo-beeflix" width="200" height="200">
         <p class="title-account">Choose your account</p>

   <div id="account-users">
      <span>
         <div class="user">
            <ul>
               <li v-for="user in users">
                   
              <a href="/beeflix"><button class="chooseAccount"> {{user}} </button>  </a> 
                
               </li>
            </ul>
         </div>


      </span>
      <button class="back-button" @click='back()'>Back</button>
   </div>

   </div>
</template>

<script>
export default {
   data() {
      return {
         users: [ 'Youssef', 'Marco', 'Roger']
      }
   }
}
</script>

<style scoped>

#choose-account {
        position: relative;
        text-align: center;
       padding-bottom: 80px;
}

.title-account {
         font-size: 14px;
      color: #002E62;
      margin-top: -20px;
}

.user {
   margin-left: 50px;
       margin-top: 100px;
       margin-bottom: 100px;

}

.user li {
   list-style:none;
   display: inline-block;
   margin-right: 100px;
}

.chooseAccount {
     cursor:pointer;
    height: 200px;
  width: 200px;
  background-color: #001935;
  border-radius: 50%;
  display: inline-block;
}

</style>