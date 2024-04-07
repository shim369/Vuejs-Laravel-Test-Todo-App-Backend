<?php

use Illuminate\Support\Facades\Route;

Route::get('tasks',
[App\Http\Controllers\TaskController::class, 'tasks']);

Route::post('save_task',
[App\Http\Controllers\TaskController::class, 'saveTask']);

Route::delete('delete_task/{id}',
[App\Http\Controllers\TaskController::class, 'deleteTask']);
