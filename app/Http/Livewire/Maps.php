<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Maps extends Component
{
    public $stats;
    public function mount()
    {
        $stats = Http::get('https://api.covid19india.org/state_district_wise.json');
        if($stats->successful())
        {
            $this->stats=$stats->json();
            $this->stats=$this->stats['Maharashtra'];
        }
    }
    public function render()
    {
        return view('livewire.maps');
    }
}
