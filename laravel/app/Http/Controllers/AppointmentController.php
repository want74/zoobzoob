<?php

namespace App\Http\Controllers;

use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use DefStudio\Telegraph\Keyboard\ReplyButton;
use DefStudio\Telegraph\Keyboard\ReplyKeyboard;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Notifications\LaravelTelegramNotification;
use Illuminate\Support\Facades\Notification;
use DefStudio\Telegraph\Models\TelegraphChat;

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

        $apiToken = "5417001771:AAGZ6y759eXJ9TOyndv_W6E1Jlt_VE9I_DA";
        $data = [
            'chat_id' => '864640107',
            'text' => $appointment->name.' '.$appointment->age.' полных лет +'.$appointment->phone.' '.$appointment->target
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
    }
}
