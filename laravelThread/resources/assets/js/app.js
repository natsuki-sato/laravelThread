//
import Vue from 'vue'
import VueRouter from 'vue-router'
//



require('./bootstrap');

window.Vue = require('vue');

//
Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes: [
    //{ path: '/', component: require('./components/Index.vue') }, 
    //{ path: '/', component: '<dvi>fake</div>' }, 
    //{ path: '/', template: '' }, 
  ]
})

//

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    //el: '#app',
    router
    
    
}).$mount('#app');
