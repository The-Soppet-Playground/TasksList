<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Component;

class ListTasks extends Component
{
    public $tasks;

    private function getTasks()
    {
        $model = new Tasks();
        $this->tasks = $model->fetchTasks();
    }

    public function setTask(Tasks $task)
    {
        $this->dispatch('setTask', $task);
    }

    public function render()
    {
        $this->getTasks();
        return view('livewire.tasks.list-tasks', [
            'tasks' => $this->tasks,
        ]);
    }
}
