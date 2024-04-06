<?php

use Illuminate\Support\Facades\Route;

Route::get('tasks',
[App\Http\Controllers\TaskController::class, 'tasks']);
