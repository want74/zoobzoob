<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\TaskData;

class ChallengeController extends Controller
{
    public function main()
    {
        date_default_timezone_set('Asia/Yakutsk');
        $challenges = DB::table('challenges')
            ->get();
        $tasks = DB::table('tasks')
            ->get();
        $taskdata = DB::table('task_data')
            ->where('userId', Auth::user()->id)
            ->where('day', date('Y-m-d'))
            ->select('taskId')
            ->get();
        for ($i=0; $i < count($tasks); $i++) { 
            $doneTask[$tasks[$i]->id] = false;
        }
        for ($i=0; $i < count($taskdata); $i++) { 
            $doneTask[$taskdata[$i]->taskId] = true;
        }
        $doneChallenge = 0;
        for ($i=0; $i < count($challenges); $i++) {
            $cnt[$challenges[$i]->id] = 0;
            $dcnt[$challenges[$i]->id] = 0;
            for ($j=0; $j < count($tasks); $j++) { 
                if ($tasks[$j]->challengeId == $challenges[$i]->id) {
                    $cnt[$challenges[$i]->id]++;
                    if ($doneTask[$tasks[$j]->id]) {
                        $dcnt[$challenges[$i]->id]++;
                    }
                }
            }
            if ($cnt[$challenges[$i]->id] == $dcnt[$challenges[$i]->id]) {
                $doneChallenge++;
            }
        }
        return view('challenges', [
            'challenges' => $challenges,
            'tasks' =>$tasks,
            'doneTask' => $doneTask,
            'cntChallenge' => $cnt,
            'cntDoneChallenge' => $dcnt,
            'doneChallenge' => $doneChallenge,
        ]);
    }

    public function update(Request $request)
    {
        date_default_timezone_set('Asia/Yakutsk');
        $taskdata = new TaskData;
        $taskdata->taskId = $request->taskId;
        $taskdata->day = date('Y-m-d');
        $taskdata->userId = Auth::user()->id;
        $taskdata->save();
        return redirect('/challenges');
    }
}
