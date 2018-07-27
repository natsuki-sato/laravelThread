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
//上部メニューの設定（twiiter認証ボタン・スクロールボタン）
const menuContent = new Vue({
    el:'#menuContent',
    data:{
        showLoginBtnFlag: true  
    },
    created: function () {
        

    },
    methods:{
        setLoginState:function(){
            
           var parent = document.getElementById('menuContent')
           var loginState=parent.getAttribute('data-twitterlogin');
           
           //contentFrameのデータ属性に応じてフラグを切り替える
           this.showLoginBtnFlag = loginState==='logout' ? true : false;
           
           console.log({showLoginBtnFlag:this.showLoginBtnFlag,loginState:loginState});
        },
        hello: function () {
            console.log({this:this});
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


const User = {
  template: '<div>User </div>'
}


const content_router = new VueRouter({
  //mode: 'history',
  routes: [
    {
        path: '/', component: User 

    }
  ]
});


const contentFrame = new Vue({
    //el:'#contentFrame', 
    content_router  
    
    
}).$mount('#contentFrame');
