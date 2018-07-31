<template>
    <div id="threadFrame">
        <ul id="threadContent">
            <span id="noTread">投稿が存在しません。</span>

        </ul>
        <button v-on:click='toggle'>投稿フォームを表示</button>
        <div class='postFormFraem' v-bind:style='vueStyle'>
            <postForm></postForm>
        </div>
        
    </div>
    
</template>

<!-- vue用スクリプト -->
<script>
    export default {
        props:{
            //imgList:Array
        },
        data: function(){
                return {
                    showFlag:true,
                    vueStyle:'',
                    styleHide:'display:none;'
                }
        },
        methods:{
            toggle:function(){
                
                this.showFlag=!this.showFlag;
                this.vueStyle = this.showFlag?'':this.styleHide;
                console.log({flag:this.showFlag,this:this});
            }
        }
    }
</script>