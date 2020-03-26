<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Data extends Component
{
    public $is_preg,$preg_count,$is_newborn,$newborn_count,$family_count,$steps;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'family_count' => 'lte:10',
        ]);
    }

    public function render()
    {
        return view('livewire.data');
    }
}
