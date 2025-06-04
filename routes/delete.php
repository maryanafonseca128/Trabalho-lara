<?php
use App\Http\Controllers\TaskController;

Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
