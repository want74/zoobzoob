<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class recordController extends Controller
{
    public function insertRecord(Request $request){
        $userId = Auth::user()->id;
        $data = array('doctor'=>'null','time'=>'null','name'=>Auth::user()->name,'email'=>Auth::user()->email,'phone'=>Auth::user()->phone,'date'=>Auth::user()->date,'status' => 'Ожидаем ответа от агента', 'userid' => $userId, 'datetime' => 'null','address' => 'null',"created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'));
        DB::table('records')->insert($data);
        $apiToken = "5625049867:AAEQUnhu6LrEiD1bZj2RVhTtanSNVERF2x8";
        $data = [
            'chat_id' => '822620780',
            'text' => Auth::user()->name.' '.Auth::user()->date.' полных лет +'.Auth::user()->phone
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
        return back();
    }
    public function deleteRecord(Request $request){

    }
    public function editRecord(Request $request){
        $validateFields = $request->validate([
            'date' => 'required',
            'address' => 'required',
            'time' => 'required',
            'doctor' => 'required'
        ]);
        $id = $request->input('id');
        $date = $request->input('date');
        $time = $request->input('time');
        $doctor = $request->input('doctor');
        $address = $request->input('address');
        DB::table('records')->where('id', $id)->update(['doctor'=>$doctor,'time'=> $time,'status'=>'true','datetime' => $date,'address' => $address]);
        return back()->with('message', 'Успешно!');
    }
    public function endRecord(Request $request){
        $id = $request->input('id');
        DB::table('records')->where('id', $id)->update(['status'=>'ended']);
        return back()->with('message', 'Успешно!');
    }
}
