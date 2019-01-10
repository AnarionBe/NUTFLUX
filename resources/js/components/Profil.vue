<template>
   <div id="profil">
      <div id="profil-container">
   
         <div id="actualusers">
   
         </div>
         <form action="" method="post">
            <div class="add-account">
               <label for="user"></label>
               <img class="icon-login" src="./img/icon/user.svg" alt="">
               <input maxlength="10" class="input-info" required v-model="newUser.user" type="user" placeholder="New User">
               <br>

               <br><br>

   
            </div>
         </form>
         <new-account :AddingUser='newUser.user' ></new-account>
      </div>
   
   
      <br>

   
   </div>
</template>

<script>
   export default {
      data() {
         return {
            nouser: false,
            useradd: false,
            newUser: {
               user: '',
            },
         }
   
      },
      methods: {

         addUser: function addUser() {
            var addNewUser = this.newUser;
            var vm = this;
   
            if (addNewUser['user'] === '') {
               console.log('Need to be completed');
               this.nouser = true;
               this.useradd = false;
            } else {
               this.ActualUsers.push('Yolo');

               this.useradd = true;
               this.nouser = false;
               axios.post('/users', addNewUser).then((response) => {
                  console.log("test");
                  // window.location = response.data.redirect;
               });

            }
   
         },
         back() {
            window.history.back()
         },
   
   
      }
   }
</script>

<style>
   #profil {
      position: relative;
      text-align: center;
   }

</style>