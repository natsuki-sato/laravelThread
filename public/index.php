<?php




/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */




define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';




/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

//$response->send();

//$kernel->terminate($request, $response);




//echo url("/");

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php //require './php/check_twitter_auth.php'; ?>
<html>
    <head>
       
        <title>掲示板</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js"  type="text/javascript"></script>

        
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

    </head>
    <body>
        <?php //require './php/check_twitter_auth.php'; ?>
        <div id="contentFrame">
            <div id="menu">
                <div id="menuContent" data-twitterLogin="<?php require './php/check_twitter_auth.php';?>" >
                    <span id="twitterLoginBtn"><p>Login</p></span>
                    <span id="twitterLogoutBtn" ><p>Logout</p></span>
                    <span id="pageMoveBtn"></span>
                </div>
            </div>
            <div id="threadFrame">
                <ul id="threadContent">
                    
                    <span id="noTread">投稿が存在しません。</span>
                </ul>
            </div>
            <div id="postForm" name="postForm">
                <textarea id="threadTextArea" placeholder="文字を入力してください。"></textarea>
                <input id="pwForm" type="password" placeholder="編集用パスワード" ></input>
                <input id="resetBTN" type="submit" value="リセット" ></input>
                <input id="postBTN" type="submit" value="投稿する" ></input>
            </div>
        </div>
    </body>
    <script src="js/post_ajax.js" type="text/javascript"></script>
    <script src="js/post.js" type="text/javascript"></script>
    
    <?php 
        
        //require 'twitteroauth/auth.php'; 
    ?>
</html>
