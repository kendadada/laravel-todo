<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Livewire\WithPagination;
use Livewire\Componet;


class TodoController extends Controller
{
    //
    //use WithPagination;
    public function todo_view()
    {
        $todo = Todo::all();
        return view('todo_view-page',['todos' => $todo]);
    }
    public function todo_create()
    {
        return view('todo_create-page');
    }
    public function create(Request $request)
    {
        $request->validate(['task_name' => 'required|min:3|max:20'], 
        [
            'task_name.required' => '必須項目です。',
            'task_name.min'=> 'min 文字以上入力',
            'task_name.max' => 'max 文字以下で入力'
        ]);

        $todo = new Todo();
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->assing_person_name = $request->assing_person_name;
        $todo->estimate_hour = $request->estimate_hour;
        $todo->save();

        return redirect('/todo');
    }
    public function todo_update($id)
    {
        $todo = Todo::find($id);
        return view('todo_update-page', ["todo" => $todo]);
    }


    public function todo_delete($id)
    {
        $todo = Todo::find($id);
        return view('todo_delete-page', ["todo" => $todo]);
    }
    public function delete(Request $request)
    {
        $delete = Todo::find($request->id);
        $delete->delete();
        return redirect('/todo');
    }
}
