<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function editUser(Request $request){
        $validateFields = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $name = $request->input('name');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $email = $request->input('email');
        $language = $request->input('language');
        DB::table('users')->where('id', Auth::user()->id)->update(['name' => $name,'phone' => $phone, 'city' => $city,'email' => $email, 'language' => $language]);
        return back()->with('message', 'Успешно!');
    }
}
