<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateTask extends Component
{
    public $is_visible = false;
    public $task;
    public $title = '';
    public $description = '';
    public $is_done = false;
    public $comment = '';

    #[On('update-task.set-task')]
    public function setTask(Tasks $task)
    {
        $this->task = $task;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->is_done = $task->is_done;
        $this->comment = $task->comment;
        $this->is_visible = true;
    }

    public function updateTask()
    {
        $model = new Tasks();
        $model->updateTask($this->task, [
            'title' => $this->title,
            'description' => $this->description,
            'is_done' => $this->is_done,
            'comment' => $this->comment,
        ]);

        return redirect()->to('/tasks')
            ->with('status', 'Task updated!');
    }

    public function render()
    {
        return view('livewire.tasks.update-task', [
            'is_visible' => $this->is_visible
        ]);
    }
}
