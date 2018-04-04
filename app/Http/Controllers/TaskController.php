<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function show($id)
    {
        $task = Task::find($id);
      return view('tasks.show', compact('task'));
     
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        $task = new Task();
        $task->name =$request->name;
        $task->save();

       return redirect('/tasks');
    }
}
