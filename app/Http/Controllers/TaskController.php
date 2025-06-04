<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return response()->json(Task::all());
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->title,
            'done' => false
        ]);

        return response()->json([
            'message' => 'Tarefa criada com sucesso',
            'task' => $task
        ]);
    }
}
