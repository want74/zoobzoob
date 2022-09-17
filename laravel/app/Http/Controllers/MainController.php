<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teeth;
use App\Models\Advanced;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function entries()
    {
        $entries = DB::table('entries')
            ->where('userId', Auth::user()->id)
            ->get();
        return view('entries', [
            'entries' => $entries,
        ]);
    }
    

}
