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

//変数名は「router」固定
const router = new VueRouter({
  mode: 'history', //アクセス時に「＃」がurlが入ることを防ぐ
  routes: [
      
    {
        //「*」でurlが「/」のみでも適用される
        path: '/:path*',  component: require('./components/thread/postArea'),
        
        children: [//親コンポネート内の<router-view>に描画する
            //{path:'show_Post',component: require('./components/thread/postForm')}
        ]
        
    },

  ]
});


//投稿フォームの読み込み
Vue.component('postForm', require('./components/thread/postForm'));



const contentFrame = new Vue({
    el:'#contentFrame', 
    router,
    data:{
        formShowFlag: false  
    },
    created: function () {
        console.log({showFlag:this.formShowFlag});
    },
    methods:{
        toggle:function(){
            //console.log({showFlag:this.showFlag});
        }
    },

});
