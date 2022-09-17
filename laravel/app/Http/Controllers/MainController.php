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
    public function appointment()
    {
        return view('appintment');
    }
    

}
