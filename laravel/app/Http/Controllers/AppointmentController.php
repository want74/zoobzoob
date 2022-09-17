<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function main()
    {
        return view('appointment');
    }
    
    public function insert(Request $request)
    {
        $appointment = new Appointment;
        $appointment->name = Auth::user()->name;
        $appointment->age = Auth::user()->age;
        $appointment->target = $request->target;
        $appointment->phone = Auth::user()->phone;
        $appointment->save();
        

    }
}
