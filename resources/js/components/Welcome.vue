<template>
    <div id="welcome">
        <div v-if="!log">
            <img class="logo-welcome" src="./img/logo-transparent-welcome.png" height="1080px" alt="logo-beeflix">

            <div class="button-welcome">
                <input class="welcome-button" type="submit" value="Sign-In" name="signin" @click.prevent="signin()">

                <input type="button" value="Register" class='welcome-button' @click.prevent="registering()">
            </div>
            <br>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            // return {
            //     favs: {
            //         user: 1,
            //         film: 3,
            //         favorite: 1
            //     },
            //     log: ""
            // }
            // try {
            //     return {
            //         log: account,
            //     }
            // } catch (err) {
            //     return {
            //         log: false,
            //     }
            // }


            return {
                welcome: true,
                sign_in: false,
                register: false,
                log: ""
            }
        },

        methods: {
            signin: function signin() {

            git 
                this.$router.push({name: "login"});
               //  this.sign_in = true;
               //  this.register = false;
               //  this.welcome = false;
            },
            registering: function registering() {
               this.$router.push({name: "register"});
               // this.register = true;
               // this.sign_in = false;
               // this.welcome = false;
            },
        }
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
