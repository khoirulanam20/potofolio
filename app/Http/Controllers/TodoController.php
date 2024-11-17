<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('page_admin.todo.index', compact('todos'));
    }

    public function create()
    {
        return view('page_admin.todo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'task' => 'required',
        ]);

        $todo = new Todo([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'task' => $request->get('task'),
        ]);
        $todo->save();

        return redirect('/todos')->with('success', 'Todo has been added');
    }

    public function show(Todo $todo)
    {
        return view('page_admin.todo.index', compact('todo'));
    }


    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'task' => 'required',
        ]);

        $todo->update($request->all());
        return redirect('/todos')->with('success', 'Todo has been updated');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos')->with('success', 'Todo has been deleted');
    }
}
