<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{
    public $label = "Submit";
    public $type = "button";
    public $target;
    public $var_arg;

    public function doDispatch()
    {
        if($this->target !== null)
        {
            $this->dispatch($this->target, $this->var_arg);
        }
    }

    public function render()
    {
        return view('livewire.components.button', [
            'label' =>  $this->label,
            'type'  =>  $this->type
        ]);
    }
}
