<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Stats extends Component
{
    public $india,$stats,$last_updated,$last_updated_maharashtra;
    public function mount()
    {
        $stats = Http::get('https://api.covid19india.org/data.json');
        if($stats->successful())
        {
            $this->stats=$stats->json();
        }
        $this->last_updated=Carbon::parse(Str::replaceArray('/', ['-','-'],$stats['statewise'][0]['lastupdatedtime']),'Asia/Kolkata')->diffForHumans();
        $this->last_updated_maharashtra=Carbon::parse(Str::replaceArray('/', ['-','-'],$stats['statewise'][1]['lastupdatedtime']),'Asia/Kolkata')->diffForHumans();
    }
    public function render()
    {
        return view('livewire.stats');
    }
}
