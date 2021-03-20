require('./bootstrap');

//import vue js
window.Vue = require('vue').default;
//import Vue from 'vue'
//when console shows vue is not a constructor then we import this file
import Vue from 'vue/dist/vue.common.js';

//Import vue router and routes
 import VueRouter from 'vue-router';
 Vue.use(VueRouter);

// import Example from './components/ExampleComponent'
 Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//import AdminHome from './components/admin/AdminHome'
 Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);
//Vue.component('admin-home', require('./components/admin/AdminHome.vue').default);

//Import v-form
import { Form, HasError, AlertError } from 'vform'
window.Form = Form
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


import {routes} from './routes'
const router = new VueRouter({
  routes,
  mode: 'history' //mode use na korle # sign ta thakle url a and component load hbena
});
const app = new Vue({
    el: '#app',
    router
});
