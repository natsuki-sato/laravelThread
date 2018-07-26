import Vue from 'vue'
import VueRouter from 'vue-router'


window.Vue = require('vue');
require('./bootstrap');
Vue.use(VueRouter);

/*
const router = new VueRouter({
  routes: [
    { path: '/user/:id', component: User }
  ]
})

//Vue.component('parent', require('./components/Parent.vue'));

const app = new Vue({ 
    router,
    methods:{

    }
}).$mount('#app');
*/

const menuContent = new Vue({
    el:'#menuContent',
    data:{
        
        showBtn: true,
        
    },
    created: function () {
        this.hello()
    },
    methods:{
        hello: function () {
            console.log(this);
        },
        //twiiter認証用ボタンのクリックイベント
        twLogin:function(){
            var result = window.confirm("twiiterによるログイン認証を行いますか？");
            if(result) location.href="/login";
        },
        twLogout:function(){
            var result=window.confirm("ログイン認証を解除しますか？");
            if(result) location.href="/logout";
        }
    }
});