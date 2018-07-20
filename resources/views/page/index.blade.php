@extends('layouts.common')

@section('title', '掲示板')
@section('styleCss')
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
@endsection
@include('layouts.head')


@section("twitterLoginState","false")
@include('layouts.top_menu')


@include('layouts.thread')

@include('layouts.post_Form')

@include('layouts.footer')
