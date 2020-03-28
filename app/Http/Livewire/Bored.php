<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class Bored extends Component
{
    public $bored;
    public $type=["education", "recreational", "diy", "charity", "cooking", "relaxation", "music"];
    
    public function generate()
    {
        $type=Arr::random($this->type);
        $bored = Http::get('https://www.boredapi.com/api/activity?type='.$type);
        if($bored->successful())
        {
            $this->bored=$bored->json();
        }
    }
    public function render()
    {
        return view('livewire.bored');
    }
}
