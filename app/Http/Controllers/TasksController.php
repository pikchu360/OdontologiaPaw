<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name'=>'required',
            'description'=>'required',
            'task_date'=>'required',
        ]);
        Task::find($id)->update($request->all());
        return redirect()->route('tasks.index')->with('success','Evento Actualizado');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect()->route('tasks.index')->with('success','Evento Eliminado.');
    }

    public function postDate(){
        return Request::input('task_date');
    }
}
