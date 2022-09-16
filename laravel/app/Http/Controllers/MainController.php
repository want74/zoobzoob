<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teeth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{

    public function advanced(){
        $data = DB::table('teeths')
            ->where('userId', Auth::user()->id)
            ->get();
        $problems = [];
        for ($i=0; $i < count($data); $i++) { 
            $problems[$i] = json_decode($data[$i]->problem);
        }
        return view('advanced/advanced', [
            'data' => $data,
            'problems'=> $problems,
        ]);
    }

    public function advanced_problem(Request $request){

        return view('advanced/problem', [
            'num' => $request->num,
        ]);
    }

    public function advanced_insert(Request $request){
        $problems = json_encode($request->problem);
        $tooth = new Teeth();
        $tooth->num = $request->num;
        $tooth->userId = Auth::user()->id;
        $tooth->problem = $problems;
        $tooth->save();
        return redirect('/advanced');
    }
}
