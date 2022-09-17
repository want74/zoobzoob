<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!Auth::user()->advanced){
            return redirect('/advanced');
        }
        date_default_timezone_set('Asia/Yakutsk');
        $challenges = DB::table('challenges')
            ->get();
        $tasks = DB::table('tasks')
            ->get();
        $taskdata = DB::table('task_data')
            ->where('userId', Auth::user()->id)
            ->where('day', date('Y-m-d'))
            ->select('taskId')
            ->get();
        for ($i=0; $i < count($tasks); $i++) { 
            $doneTask[$tasks[$i]->id] = false;
        }
        for ($i=0; $i < count($taskdata); $i++) { 
            $doneTask[$taskdata[$i]->taskId] = true;
        }
        for ($i=0; $i < count($challenges); $i++) {
            $cnt[$i] = 0;
            $dcnt[$i] = 0;
            for ($j=0; $j < count($tasks); $j++) { 
                if ($tasks[$j]->challengeId == $challenges[$i]->id) {
                    $cnt[$i]++;
                    if ($doneTask[$tasks[$j]->id]) {
                        $dcnt[$i]++;
                    }
                }
            }
        }
        return view('home');
    }
}
