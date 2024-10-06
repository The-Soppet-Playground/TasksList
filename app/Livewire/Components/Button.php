<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{
    public $label = "Submit";
    public $type = "button";

    public function render()
    {
        return view('livewire.components.button', [
            'label' =>  $this->label,
            'type'  =>  $this->type
        ]);
    }
}
