@extends('layouts.common')

@section('title', '掲示板')
@section('styleCss')
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
@endsection
@include('layouts.head')

<!--echo $twitterLogin;-->
<!--コントローラーからの変数を渡す-->
@include('layouts.top_menu',['twitterLoginState' => $twitterLogin])


@section('contentEle')
    <!-- vueファイルの呼び出し用にカスタムタグを指定 -->
    <!--<span>test</span>-->
    <router-view></router-view>

@endsection
@include('layouts.content')

@include('layouts.footer')
