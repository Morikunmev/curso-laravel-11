<?php

namespace App\Livewire;

use Livewire\Component;

class CounterComponent extends Component
{
    public $count = 1000;
    public function render()
    {
        return view('livewire.counter-component');
    }
    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        $this->count--;
    }
}
