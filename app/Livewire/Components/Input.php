<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Input extends Component
{
    public $title;
    public $type = 'text';
    public $id = '';

    public function render()
    {
        return view(
            'livewire.components.input',
            [
                'type' => $this->type,
                'id' => $this->id
            ]
        );
    }
}
