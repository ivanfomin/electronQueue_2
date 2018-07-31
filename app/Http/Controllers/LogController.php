<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LogController extends Controller
{

    protected $table = 'logs';
    protected $log;

    public function __construct()
    {
        $this->log = new Log();
    }

    public function logging($task_id)
    {

        Log::create(['task_id' => $task_id, 'status' => 1, 'created_at' => now()]);

        return redirect('/');
    }

    public function show()
    {
        $logs = $this->log->queuedRecords();

        return view('show')->with(['logs' => $logs]);
    }

    public function work()
    {

        Log::where('status', 1)->limit(1)->update(['status' => 2]);

        return redirect('/');
    }

    public function showDone()
    {
        $logs = $this->log->doneRecords();

        return view('show')->with(['logs' => $logs]);
    }
}
