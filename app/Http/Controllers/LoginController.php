<?php


namespace App\Http\Controllers;


use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function twitter()
    {
        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret')
        );
        # 認証用のrequest_tokenを取得
        # このとき認証後、遷移する画面のURLを渡す
        $token = $twitter->oauth('oauth/request_token', array(
            'oauth_callback' => config('twitter.callback_url')
        ));

        # 認証画面で認証を行うためSessionに入れる
        session(array(
            'oauth_token' => $token['oauth_token'],
            'oauth_token_secret' => $token['oauth_token_secret'],
        ));

        # 認証画面へ移動させる(twiiterの認証は以下で変更できる)
        ## 毎回認証をさせたい場合： 'oauth/authorize'
        ## 再認証が不要な場合　　： 'oauth/authenticate'
        $url = $twitter->url('oauth/authorize', array(
            'oauth_token' => $token['oauth_token']
        ));

        return redirect($url);
    }
    
    public function twitterCallback(Request $request)
    {
        
        
        $oauth_token = session('oauth_token');
        $oauth_token_secret = session('oauth_token_secret');

        # request_tokenが不正な値だった場合エラー
        if ($request->has('oauth_token') && $oauth_token !== $request->oauth_token) {
            return Redirect::to('/login');
        }

        # request_tokenからaccess_tokenを取得
        $twitter = new TwitterOAuth(
            $oauth_token,
            $oauth_token_secret
        );
        $token = $twitter->oauth('oauth/access_token', array(
            'oauth_verifier' => $request->oauth_verifier,
            'oauth_token' => $request->oauth_token,
        ));

        # access_tokenを用いればユーザー情報へアクセスできるため、それを用いてTwitterOAuthをinstance化
        $twitter_user = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret'),
            $token['oauth_token'],
            $token['oauth_token_secret']
        );
        //session($key)
        return redirect("/");
        /*
        # 本来はアカウント有効状態を確認するためのものですが、プロフィール取得にも使用可能
        $twitter_user_info = $twitter_user->get('account/verify_credentials');
        dd($twitter_user_info);
         * 
         */
    }
    public function twitterLogout(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }
}