<?php

namespace App\Livewire;

use App\Models\Tasks as ModelsTasks;
use Livewire\Component;

class Tasks extends Component
{
    private $tasks = [];
    public $task;

    private function getTasks()
    {
        $model = new ModelsTasks();
        $this->tasks = $model->fetchTasks();
    }

    public function setTask(ModelsTasks $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        $this->getTasks();
        return view('livewire.tasks', [
            'tasks' => $this->tasks,
            'task' => $this->task,
        ]);
    }
}
