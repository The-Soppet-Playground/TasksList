<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowTasks extends Component
{
    public $task;

    #[On('tasks.set-task')]
    public function setTask(Tasks $task)
    {
        $this->task = $task;
    }

    #[On('tasks.update-task')]
    public function updateTask()
    {
        $this->dispatch('update-task.set-task', $this->task);
    }

    public function render()
    {
        return view('livewire.tasks.show-tasks', [
            'task'  =>  $this->task,
        ]);
    }
}
