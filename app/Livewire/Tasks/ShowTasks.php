<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Component;

class ShowTasks extends Component
{
    public $task;
    protected $listeners = ['setTask' => 'setTask'];

    public function setTask(Tasks $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.tasks.show-tasks', [
            'task'  =>  $this->task,
        ]);
    }
}
