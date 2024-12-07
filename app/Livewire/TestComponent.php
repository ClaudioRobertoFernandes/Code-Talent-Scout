<?php

namespace App\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    public $name = 'Claudio';
    public $count = 1;

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.test-component');
    }
}
