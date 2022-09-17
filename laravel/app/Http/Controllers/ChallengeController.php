<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ChallengeController extends Controller
{
    public function main()
    {
        date_default_timezone_set('UTC+9');
        $challenges = DB::table('challenges')
            ->where('userId', Auth::user()->id)
            ->where('day', date('Y-m-d'))
            ->first();
        echo $challenges;
    }
}
