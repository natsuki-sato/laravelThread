// vueとvue-routerの定義
import Vue from 'vue'
import VueRouter from 'vue-router'


window.Vue = require('vue');

// bootstrap.jsのrequire
require('./bootstrap');

// vue-routerを使う宣言
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
};

//変数名は「router」固定
const router = new VueRouter({
  //mode: 'history', //アクセス時に「＃」がurlが入れないようにする
  routes: [
    { path: '/', component: User }
  ]
});


const contentFrame1 = new Vue({
    el:'#contentFrame', 
    router,
    /*
    created: function () {
        
        //console.log('test');
    },
    */
});//.$mount('#contentFrame');

