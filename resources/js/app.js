
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import Router from 'vue-router';
import router from './routes';
import Cookie from "js-cookie";
import view from "./components"; //infos dans routes.js

require('./bootstrap');
window.Vue = require('vue');
Vue.use(Router);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue.component('register', require('./components/Register.vue').default);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('addmovie', require('./components/AddMovie.vue').default);
Vue.component("login", view.Login);

Vue.component("register", view.Register);
Vue.component("welcome", view.Welcome);
Vue.component('new-account', require('./components/NewAccount.vue').default);
Vue.component('account', require('./components/Account.vue').default);
Vue.component('searched', require('./components/Searched.vue').default);

Vue.component('beeflix', require('./components/BeeFlix.vue').default);
Vue.component('profil', require('./components/Profil.vue').default);
Vue.component('movie', require('./components/MovieSelected.vue').default);
Vue.component('film', require('./components/slide.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.filter('to-uppercase', function (value) {
        return value.toUpperCase();
 } );

 Vue.filter('to-slice', function (value) {
    return value.slice(0,105);
} )


const app = new Vue({
    router,
    Cookie,
}).$mount("#app");