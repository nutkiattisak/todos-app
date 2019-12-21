<?php

namespace App\Http\Controllers;
use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoID){
        return view('todos.show')->with('todo', Todo::find($todoID));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);
        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->complated = false;
        $todo->save();

        $session->flash('success','Todo created successfully');

        return redirect('/todos');
    }

    public function edit($todoID){
        $todo = Todo::find($todoID);

        return view('todos.edit')->with('todo', $todo);
    }

    public function update($todoID){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();
        $todo = Todo::find($todoID);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();
        return redirect('/todos');
    }

    public function destroy($todoID){
        $todo = Todo::find($todoID);
        $todo->delete();
        return redirect('/todos');
    }
}
