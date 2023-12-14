<?php

namespace App\Livewire;

use Illuminate\Support\Composer;
use Livewire\Component;
use App\Models\todo;

class TodoView extends Component
{
    
    public $count = 10;
    public $todos;
    public function mount()
    {
        $this->todos = todo::all();
    }
    public function dellTodo($id)
    {
        $this->todos = $this->todos->filter(function($value, $key) use($id){
            return $value['id'] != $id;
        });
        $todos = todo::find($id);
        $todos->delete();
    }
    public function render()
    {
        return view('livewire.todo_view');
    }
}