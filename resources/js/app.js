
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import Router from 'vue-router';
import router from './routes';
import view from "./components"; //infos dans routes.js
import store from "./storage";
import VueYoutube from 'vue-youtube';
import Snotify from 'vue-snotify';
import './components/assets/notification.css';
import { RadialMenu,  RadialMenuItem } from 'vue-radial-menu'

Vue.use(Snotify)


require('./bootstrap');
window.Vue = require('vue');
Vue.use(Router);
Vue.use(VueYoutube);
Vue.use(RadialMenu, RadialMenuItem);



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

Vue.component("login", view.Login);
Vue.component("addMovie", view.AddMovie);
Vue.component("register", view.Register);
Vue.component("welcome", view.Welcome);
Vue.component("movieSelected", view.MovieSelected);
Vue.component("searched", view.Searched);
Vue.component("film", view.Slide);
Vue.component("navbar", view.navbar);
Vue.component('new-account', view.NewAccount);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.filter('to-uppercase', function (value) {
        return value.toUpperCase();
 } );

 Vue.filter('to-slice', function (value) {
    return value.slice(0,80);
} );


const app = new Vue({
    router,
    store,
    
}).$mount("#app");

