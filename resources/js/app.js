
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueCookies from 'vue-cookies'

require('./bootstrap');
Vue.use(VueCookies);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('addmovie', require('./components/AddMovie.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('register', require('./components/Register.vue').default);
Vue.component('welcome', require('./components/Welcome.vue').default);
Vue.component('new-account', require('./components/NewAccount.vue').default);
Vue.component('account', require('./components/Account.vue').default);

Vue.component('beeflix', require('./components/BeeFlix.vue').default);
Vue.component('profil', require('./components/Profil.vue').default);
Vue.component('movie', require('./components/MovieSelected.vue').default);
Vue.component('film', require('./components/slide.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",

})



