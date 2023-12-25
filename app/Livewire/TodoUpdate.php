<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\todo;
use App\Livewire\TodoView;

class TodoUpdate extends Component
{
    public Todo $todo;
    protected array $rules =[
        'task_name' => 'required|string|max:255',
        'task_description' => 'required|string|max:255',
        'assing_person_name' => 'required|string|max:255',
        'estimate_hour' => 'required|string|max:255',
    ];
    
    public function update($id)
    {
        $todo = todo::find($id);
    }

    // public function update()
    // {
    //     $this->validate();
    //     $this->todos->update();
    // }
    public function render()
    {
        return view('livewire.todo_update');
    }
}
