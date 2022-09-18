<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    public function insertGuide(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'youtube_url' => 'url|required',
            'description' => 'required'
        ]);
        $name = $request->input('name');
        $youtube_url = $request->input('youtube_url');
        $description = $request->input('description');
        $data = array('name' => $name, 'youtube_url' => $youtube_url, 'description' => $description,"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        DB::table('guides')->insert($data);
        return back();
    }
    public function getData(){
        if(!Auth::user()->advanced){
            return redirect('/advanced');
        }
        $results = DB::select('select * from guides');
        $userData = DB::select('select * from users where id = '.Auth::user()->id);
        $records = DB::select('select * from records where userid = '.Auth::user()->id);
        $editorRecords = DB::select('select * from records');
        return view('home', compact(['results','userData','records','editorRecords']));
    }
    public function editGuide(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'youtube_url' => 'url|required',
            'description' => 'required'
        ]);
        $id = $request->input('id');
        $name = $request->input('name');
        $youtube_url = $request->input('youtube_url');
        $description = $request->input('description');
        DB::table('guides')->where('id', $id)->update(['name' => $name,'youtube_url' => $youtube_url, 'description' => $description]);
        return back()->with('message', 'Успешно!');
    }
    public function deleteGuide(Request $request){
        $id = $request -> input('id');
        DB::table('guides')->where('id', $id)->delete();
        return back()->with('message', 'Успешно!');
    }
}
