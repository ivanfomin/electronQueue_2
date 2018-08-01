<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('page')->with(['tasks' => $tasks]);
    }

    public function increment($id)
    {
        Task::find($id)->increment('counter', 1);

        //return redirect()->action('LogController@logging', ['id' => $id]);

        return redirect()->route('logging', ['id' => $id]);
    }

}
