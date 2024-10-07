<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Component;

class CreateTasks extends Component
{
    public $title = '';

    public $description = '';

    public function save()
    {
        $model = new Tasks();

        $model->createTask([
            'title' =>  $this->title,
            'description' => $this->description
        ]);

        return redirect()->to('/tasks')
            ->with('status', 'Task created!');
    }

    public function render()
    {
        return view('livewire.tasks.create-tasks', [
            'title' => $this->title
        ]);
    }
}
