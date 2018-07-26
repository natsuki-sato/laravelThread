//
import Vue from 'vue'
import VueRouter from 'vue-router'
//



window.Vue = require('vue');
Vue.use(VueRouter);
require('./bootstrap');

/*

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
*/



const User = {
  template: `<div>User {{ $route.params.id }}</div>`
}

const router = new VueRouter({
  routes: [
    { path: '/user/:id', component: User }
  ]
})

Vue.component('parent', require('./components/Parent.vue'));

const app = new Vue({ 
    router,
    methods:{
        greet: function (event) {
            alert();
        }
    }
}).$mount('#app');




//Vue.component('parent', require('./components/Parent.vue'));
/*
const app = new Vue({
    el: '#app',
});//.mount('#app');
*/