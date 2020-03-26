<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Data2 extends Component
{
    public $is_medical_history,$steps;
    public function render()
    {
        return view('livewire.data2');
    }
}
