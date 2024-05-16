<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class guidesController extends Controller
{
    public function getData(){
        $results = DB::select('select * from guides');
        return view('guides', compact(['results']));
    }
    public function getDataGuide(){
        $id = $_GET['id'];
        $results = DB::select('select * from guides where id ='.$id);
        return view('guide', compact(['results']));
    }
}
