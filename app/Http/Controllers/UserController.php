<?php

namespace App\Http\Controllers;

use App\User;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
    /**
     * ユーザーリポジトリの実装
     *
     * @var UserRepository
     */
    
    protected $users;
    
    /**
     * 新しいコントローラインスタンスの生成
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }
    

    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //echo "call show";
        $user = $this->users->find($id);
        
        return view('sample', ['user' => $user]);
    }
    public function call(){
        echo "userCtr";
    } 
    
}
