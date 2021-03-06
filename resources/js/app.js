/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueRouter from 'vue-router';
require('./bootstrap');

// require('/mdbootstrap/js/popper.js');
// require('mdbootstrap/js/bootstrap.min');
// require('mdbootstrap/js/mdb');
// require('mdbootstrap/js/bootstrap.min');

window.Vue = require('vue');
window.Vuex = require('vuex');
import Vue from "vue";
import VueSimpleAlert from "vue-simple-alert";
// window.VueRouter = require('vue-router');
Vue.use(VueSimpleAlert);
Vue.use(require('vuex'));
Vue.use(VueRouter);
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
Vue.component('users-component', require('./components/UsersComponent.vue').default);
Vue.component('users-component', require('./components/UsersComponent.vue').default);
Vue.component('users-create-component', require('./components/UserCreateComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = new VueRouter({
    // mode: 'history',
    routes: [
        {path: '/users', name: 'users', component: require('./components/UsersComponent').default,},
        {path: '/advertisers', name: 'advertisers', component: require('./components/AdvertiserComponent').default,},
        {path: '/example', name: 'example', component: require('./components/ExampleComponent').default},
        {path: '/user_create', name: 'user_create', component: require('./components/UserCreateComponent').default},
        {path: '/advertiser_create', name: 'advertiser_create', component: require('./components/AdvertiserCreateComponent').default},
        {path: '/user_show/:id', name: 'user_show', component: require('./components/UserShowComponent').default, props: true},
        {path: '/cases/:id', name: 'cases', component: require('./components/AdvertiserCasesComponent').default, props:true},
        {path: '/case_create/:id/:type/:case', name: 'case_create', component: require('./components/AdvertiserCaseCreateComponent').default, props:true}
    ],
});

const app = new Vue({
    el: '#app',
    router,
});
