<?php

namespace App\Livewire\Tasks;

use App\Models\Tasks as ModelsTasks;
use Livewire\Component;

class Tasks extends Component
{
    public function render()
    {
        return view('livewire.tasks.tasks');
    }
}
