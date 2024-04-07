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

    public function getTask($id) {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function saveTask(Request $request) {
        $task = new Task();
        $task->name = $request->name;
        $task->completed = $request->completed ?? false;
        $task->save();
        return response()->json([
            'message' => 'Task Created Successfully!',
            'code' => 200
        ]);
    }

    public function deleteTask($id) {
        $task = Task::find($id);
        if($task) {
            $task->delete();
            return response()->json([
                'message' => 'Task Deleted Successfully!',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => "Task width id:$id does not exits",
                'code' => 200
            ]);
        }
    }

    public function updateTask($id, Request $request) {
        $task = Task::where('id', $id)->first();
        $task->name = $request->name;
        $task->completed = $request->completed ?? false;
        $task->save();
        return response()->json([
            'message' => 'Task Updated Successfully!',
            'code' => 200
        ]);
    }
}
