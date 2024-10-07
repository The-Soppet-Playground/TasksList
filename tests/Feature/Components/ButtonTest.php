<?php

namespace Tests\Feature\Components;

use App\Livewire\Components\Button;

use Livewire\Livewire;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ButtonTest extends TestCase
{
    #[Test]
    public function it_renders_button(): void
    {
        Livewire::test(Button::class)
            ->assertStatus(200);
    }

    #[Test]
    public function it_renders_button_with_label(): void
    {
        $button_label = 'Button';
        Livewire::test(Button::class)
            ->set('label', $button_label)
            ->assertSet('label', $button_label);
    }
}
