<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function tasks() {
        $tasks = Task::all();
        return response()->json(
            [
                'tasks' => $tasks,
                'message' => 'Tasks',
                'code' => 200
            ]
        );
    }
}
