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

Route::get('/show', 'UserController@call');
//Route::get('/show', "TasksController@call");

Route::get('/s{id}', function ($id) {
    //echo 0;
    echo "id = [".$id."]";
    
});

Route::get('/{id}', function ($id) {
    //echo 0;
    echo "id2 = [".$id."]";
    
});


