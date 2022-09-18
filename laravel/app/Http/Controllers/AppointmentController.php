<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Notifications\LaravelTelegramNotification;
use Illuminate\Support\Facades\Notification;

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

        $apiToken = "5486037622:AAGSYuYZKEUVc_tvzvTEo9JBq2nTZqTFSFY";
        $data = [
            'chat_id' => '864640107',
            'text' => $appointment->name.' '.$appointment->age.' +'.$appointment->phone.' '.$appointment->target
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
        return redirect('/home');
    }
}
