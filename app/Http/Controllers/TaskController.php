<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    

    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }
    
    public function getPost()
    {
        $tasks = Task::orderBy('id','DESC')->get();
        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // create data
        $validatedData = $request->validate([
            'description' => 'required'
        ]);
        Task::create($validatedData);
        return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }


    public function update(Request $request, Task $task, $id)
    {
        $task = Task::find($id);
        $task->update($request->all());
        return back()->with('post_created', 'Berhasil Diupdate');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
