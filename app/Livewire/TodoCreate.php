<?php

namespace App\Livewire;

use Illuminate\Support\Composer;
use Livewire\Component;
use App\Models\todo;

class TodoCreate extends Component
{
    public string $task_name = "";
    public string $task_description = "";
    public string $assing_person_name = "";
    public string $estimate_hour = "";

    protected array $rules = [
        'task_name' => 'required|string|max:255',
        'task_description' => 'required|string|max:255',
        'assing_person_name' => 'required|string|max:255',
        'estimate_hour' => 'required|string|max:255',
    ];
    public function render()
    {
        return view('livewire.todo_create');
    }
    public function create()
    {
        $this->validate();
        Todo::create([
            "task_name" => $this->task_name,
            "task_description" => $this->task_description,
            "assing_person_name" => $this->assing_person_name,
            "estimate_hour" => $this->estimate_hour
        ]);
        
        $this->reset();
        return redirect('/admin/view');
    }

}