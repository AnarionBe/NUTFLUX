<template>
  <div id="register">
                  <img class="logoheader" src="./img/logo-transparent3.png" alt="" width="200" height="200">

    <p class="title-register">Register</p>

    <div class="form-group">
      <div id="name">
        <label for>
          <img class="icon" src="./img/icon/user.svg" alt>
          <input class="registerinfo"
            type="text" name="firstname"
            id="firstname" placeholder="Firstname"
            v-model="newUser.firstname">
        </label>
        <img class="icon" src="./img/icon/user.svg" alt>
        <input
          class="registerinfo"
          type="text"
          name="lastname"
          id="lastname"
          placeholder="Lastname"
          v-model="newUser.lastname"
        >
      </div>

      <div>
        <img class="icon" src="./img/icon/mail.svg" alt>
        
        <label for="email"></label>
        <input
          class="registerinfo"
          type="email"
          name="email"
          id="email"
          placeholder="Email"
          required
          v-model="newAccount.email"
        >
        
        <label for="confirm_email"></label>
        <img class="icon" src="./img/icon/mail.svg" alt>
        <input
          class="registerinfo"
          type="email"
          name="confirm_email"
          id="confirm_email"
          placeholder="Confirm email"
          required
          v-model="newAccount.confirm_email"
        >
      </div>
      <div>
        <label for="password"></label>
        <img class="icon" src="./img/icon/lock.svg" alt>
        <input
          class="registerinfo"
          type="password"
          name="password"
          id="password"
          placeholder="Password"
          required
          v-model="newAccount.password"
        >
        
        <label for="confirm_password"></label>
        <img class="icon" src="./img/icon/lock.svg" alt>
        <input
          class="registerinfo"
          type="password"
          name="confirm_password"
          id="confirm_password"
          placeholder="Confirm password"
          required
          v-model="newAccount.confirm_password"
        >
      </div>
      <div>
        <span>
          <div class="avatar">
            <label for="avatarUpload">
              <svg
                version="1.1"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                fill="rgba(46, 63, 95, 0.25)"
                width="30px"
                height="30px"
                viewBox="0 0 92 92"
                enable-background="new 0 0 92 92"
                xml:space="preserve"
              >
                <path
                  id="XMLID_1160_"
                  d="M46,27c-12.6,0-22.9,10.4-22.9,23.2c0,12.8,10.3,23.2,22.9,23.2s22.9-10.4,22.9-23.2
                           C68.9,37.4,58.6,27,46,27z M46,65.5c-8.2,0-14.9-6.8-14.9-15.2S37.8,35,46,35s14.9,6.8,14.9,15.2S54.2,65.5,46,65.5z M57.1,51.2
                           c-0.2,1.8-1.7,3-3.5,3c-0.2,0-0.3,0-0.5,0c-1.9-0.3-3.3-2-3-3.9c0.4-2.9-3-4.5-3.2-4.6c-1.7-0.8-2.5-2.9-1.7-4.6
                           c0.8-1.7,2.8-2.5,4.6-1.8C53,40.7,58,44.7,57.1,51.2z M49.4,55.6c0.7,0.7,1.2,1.8,1.2,2.8c0,1-0.4,2.1-1.2,2.8
                           c-0.8,0.7-1.8,1.2-2.8,1.2s-2.1-0.4-2.8-1.2c-0.7-0.8-1.2-1.8-1.2-2.8c0-1.1,0.4-2.1,1.2-2.8c0.8-0.8,1.8-1.2,2.8-1.2
                           S48.7,54.8,49.4,55.6z M88,26H72.6l-4.3-16c-0.5-1.7-2.1-3-3.9-3H27.5c-1.8,0-3.4,1.3-3.9,3l-4.3,16H4c-2.2,0-4,1.7-4,3.9V81
                           c0,2.2,1.8,4,4,4h84c2.2,0,4-1.8,4-4V29.9C92,27.7,90.2,26,88,26z M84,77H8V34h14.4c1.8,0,3.4-1.3,3.9-3l4.3-16h30.8l4.3,16
                           c0.5,1.7,2.1,3,3.9,3H84V77z"
                ></path>
              </svg>
            </label>
            <input type="file" name="avatarUpload" id="avatarUpload" >
          </div>
          <img class="icon" src="./img/icon/heart.svg" alt>
          <input class="registerinfo" type="text" name="pseudo" id="pseudo" placeholder="Pseudo" v-model="newUser.pseudo">
        </span>
      </div>
      <div class="error">
        <p class="alert alert-danger" v-if="seen">Please fill all fields</p>
      </div>
      <input
        @click.prevent="createAccount()/*, submitAvatar()*/"
        type="button"
        value="Register"
        class="input-button-register"
      >
      <a href="http://www.google.com" target="_blank">
        <p class="forgot">Already have an account ?</p>
      </a>
    </div>
    <button class="back-button" @click="back()">Back</button>
  </div>
</template>

<script>
export default {
    data() {
        return {
            accountinfo: [],
            seen: false,
            newAccount: {
                email: "",
                confirm_email: "",
                password: "",
                confirm_password: "",
            },
            newUser: {
                firstname: "",
                lastname: "",
                pseudo: "",
                avatar: "",
                account: "",
            },
        };
    },

    methods: {
        createAccount: function createAccount() {
            let register = this.newAccount;
            let _this = this;
            
            if (register["email"] == "" || register["password"] == "") {
                // TODO: Handle error no mail/password
            } else if (
                register["email"] != register["confirm_email"] ||
                register["password"] != register["confirm_password"]
            ) {
                // TODO: Handle error no match for mail/password
            } else {
                axios
                    .post("/api/register", register)
                    .then(response => {
                        if(true) {
                            let user = this.newUser;
                            user.account = response.data.account;
                            axios.post("/api/users", user)
                                .then(res => {
                                    this.$router.push({name: "home"});
                                })
                                .catch(err => {
                                    //TODO: manage error => ask for another if already used
                                    // console.log(err.response.data.errors);
                                });
                        }
                    })
                    .catch(err => {
                        //TODO: manage errors
                        console.log(err.response.data.errors);
                    });
            }
        },
        back() {
            window.history.back();
        },
    },
};
</script>

<style>
.logoheader {
    margin: 0 auto;
    margin-top: -20px;
    text-align: center;

    display: flex;
}

body {
    margin: 0 auto;
    width: 100%;
    height: auto;
    font-family: Roboto;
    position: absolute;
    z-index: 0;
    overflow: auto;
    background-color: #000010;
}

.error {
    padding-top: 10px;
    width: 200px;
    margin: 0 auto;
}

#register {
    position: relative;
    text-align: center;
}

.title-register {
    font-size: 14px;
    color: #002e62;
    margin-top: -20px;
}

form {
    margin-top: -10px;
}

#register input {
    border: none;
    font-size: 14px;
    margin-bottom: 15px;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    color: #2e3f5f;
    text-align: center;
    outline: none;
}

a {
    text-decoration: none;
    color: #002e62;
}

a:hover {
    text-decoration: none;
}

.input-button-register {
    cursor: pointer;
    width: 120px;
    height: 36px;
    border-radius: 50px;
    background: #001935;
    font-size: 18px;
    font-style: normal;
    font-weight: normal;
    line-height: normal;
    color: #2e3f5f;
    text-align: center;
    margin-top: 15px;
}

.registerinfo {
    padding-bottom: 5px;
    padding-top: 5px;
    border-radius: 15px;
    background-color: #c4c4c4;
    margin-top: 20px;
    margin-right: 15px;
}

.avatar {
    cursor: pointer;
    padding-top: 15px;
    margin-right: 10px;
    justify-content: center;
    font-size: 8px;
    color: rgba(46, 63, 95, 0.5);
    height: 64px;
    width: 64px;
    background-color: #c4c4c4;
    border-radius: 50%;
    display: inline-block;
    position: relative;
}

.avatar svg {
    cursor: pointer;
}

.avatar > input {
    display: none;
    cursor: pointer;
}

#avatarUpload {
    cursor: pointer;
}

.icon {
    position: absolute;
    margin-top: 25px;
    margin-left: 10px;
    pointer-events: none;
    width: 16px;
    height: 16px;
}

.avatartext {
    padding-top: 10px;
}

.registerinfo::placeholder {
    font-size: 12px;
    color: rgba(46, 63, 95, 0.5);
    text-align: center;
}

.back-button {
    cursor: pointer;
    mix-blend-mode: normal;
    width: 80px;
    height: 36px;
    background: rgba(0, 25, 53, 0.5);
    border-radius: 100px;
    font-size: 16px;
    color: #374d77;
    border: none;
}

footer {
    bottom: 0%;
    position: relative;
    text-align: center;
    color: #002e62;
    padding-top: 15px;
}
</style>