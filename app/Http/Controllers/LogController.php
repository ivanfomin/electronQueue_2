<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LogController extends Controller
{

     public function logging($task_id)
    {

        Log::create(['task_id' => $task_id, 'status' => 1, 'created_at' => now()]);

        return redirect('/');
    }

    public function show()
    {
        $logs = Log::records(1);

        return view('show')->with(['logs' => $logs]);
    }

    public function showDone()
    {
        $logs = Log::records(2);

        return view('show')->with(['logs' => $logs]);
    }

    public function work()
    {
        Log::records(1)->first()->update(['status' => 2]);

        return redirect('/');
    }


}
