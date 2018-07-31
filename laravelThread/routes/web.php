<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/show', 'UserController@call');
//Route::get('/', "TasksController@call");



//ルーティングは先に設定した方が優先されるため、範囲の広い方を下にする

//twitter認証の開始
Route::get('/login', 'LoginController@twitter');

//twitter認証のコールバック
Route::get('/login/twitter/callback', 'LoginController@twitterCallback');


//twitter認証の解除
Route::get('/logout', 'LoginController@twitterLogout');


//
Route::get('/{any}', 'startController@index')->where('any', '.*');

/*
Route::get('/{any}', function () {
    
    
    return view('layouts/vue_app');
})
->where('any', '.*');
*/
