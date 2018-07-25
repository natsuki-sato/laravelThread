@extends('layouts.common')

@section('title', '掲示板')
@section('styleCss')
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
@endsection
@include('layouts.head')

<!--コントローラーからの変数を渡す-->
@include('layouts.top_menu',['twitterLoginState' => $twitterLogin])


@include('layouts.thread')

@include('layouts.post_Form')

@include('layouts.footer')
