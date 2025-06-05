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
   public function destroy($id)
{
    $task = Task::find($id);
    if (!$task) {
        return response()->json(['error' => 'Tarefa não encontrada'], 404);
    }

    $task->delete();
    return response()->json(['message' => 'Tarefa deletada com sucesso'], 200);
}

}
