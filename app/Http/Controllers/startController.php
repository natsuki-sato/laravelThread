<?php
namespace App\Http\Controllers;
use App\Task;
//use Illuminate\Http\Request;
class startController extends Controller
{
    public function index() {
        //$tasks = Task::all();
                
        require_once './php/check_twitter_auth.php';
        
        return view('page.index',compact('twitterLogin'));
    }
    
    public function show(Task $task) {
            return view('tasks/show', compact('task'));
    }

    public function call() {
            echo "9";
    }
    public function load(){
        

    }
    
    /* //上記のように書き換えができます
    public function show($id) {
            $task = Task::find($id);
            return view('tasks/show', compact('task'));
    }
    */
}