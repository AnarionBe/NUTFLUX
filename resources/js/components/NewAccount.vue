<template>
   <div id="choose-account">
   
      <input type="button" class="input-add-user" value="Add" @click.prevent="addUser()">
      <br>
   
      <p class="text-center alert alert-danger" v-if="nouser"> Please complete a username </p>
      <p class="text-center alert alert-success" v-if="useradd">New user : {{ AddingUser }}
      </p>
      <p class="text-center alert alert-danger" v-if="maxusers"> Maximum 3 Users</p>
      <div id="account-ActualUsers">
         <span>
                  <div class="user">
                     <ul>
                        <li>
                            
                       <button class="AddAccount" v-for="ActualUser in ActualUsers.slice(0,3)"> {{ActualUser}} </button>  
                         
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
   
      props: {
         AddingUser: {
            type: String
         },
      },
   
   
      data() {
         return {
            ActualUsers: ['Youssef', 'Roger'],
            nouser: false,
            useradd: false,
            maxusers: false,
            newUser: {
               user: '',
            }
         }
      },
      methods: {
   
         addUser: function addUser() {
   
            var addNewUser = this.newUser;
            var vm = this;

            if (this.ActualUsers.length >= 3) {
               this.maxusers = true;
               this.nouser = false,
                  this.useradd = false,
                  console.log('Array plus grand que 3')
            } 
         
            
            else if (this.AddingUser === '') {
               console.log('Need to be completed');
               this.nouser = true;
               this.useradd = false;
               this.maxusers = false;
            }
   
   
            
            else {
               this.ActualUsers.push(this.AddingUser)
               this.useradd = true;
               this.nouser = false;
               axios.post('/users', addNewUser).then((response) => {
                  console.log("test");
                  //window.location = response.data.redirect;
               });
            }
   
         },
   
         back() {
            window.history.back()
         },
   
   
      }
   };
</script>

<style scoped>
   #choose-account {
      position: relative;
      text-align: center;
      padding-bottom: 80px;
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
      margin-bottom: 10px;
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
      list-style: none;
      display: inline-block;
      margin-right: 100px;
   }
   
   .AddAccount {
      margin-right: 15px;
      cursor: pointer;
      height: 100px;
      width: 100px;
      background-color: #001935;
      border-radius: 50%;
      display: inline-block;
   }
</style>