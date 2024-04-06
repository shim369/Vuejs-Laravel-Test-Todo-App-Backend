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

    public function saveTask(Request $request) {
        $task = new Task();
        $task->name = $request->name;
        $task->completed = $request->completed ?? false;
        $task->save();
        return response()->json([
            'message' => 'Contact created Successfully!',
            'code' => 200
        ]);
    }
}
