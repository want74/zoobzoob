<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teeth;
use App\Models\Advanced;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdvancedAuthController extends Controller
{
    public function main(){
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

    public function problem(Request $request){

        return view('advanced/problem', [
            'num' => $request->num,
        ]);
    }
    
    public function problem_insert(Request $request){
        $valid = $request->validate([
            'problem' => 'required',
        ]);
        $problems = json_encode($request->problem);
        $tooth = new Teeth();
        $tooth->num = $request->num;
        $tooth->userId = Auth::user()->id;
        $tooth->problem = $problems;
        $tooth->save();
        return redirect('/advanced');
    }

    public function insert(Request $request){
        $valid = $request->validate([
            'capId' => 'required',
            'target' => 'required',
        ]);
        $advanced = new Advanced();
        $advanced->capId = $request->capId;
        $advanced->target = $request->target;
        $advanced->userId = Auth::user()->id;
        $advanced->save();

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
                'advanced' => true,
            ]);
        return redirect('/home');
    }
}
