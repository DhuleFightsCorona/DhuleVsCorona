<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class News extends Component
{
    public $response;
    public function mount()
    {
        $respons = Http::get('https://newsapi.org/v2/top-headlines?country=in&category=health&pageSize=3&q=corona&apiKey=9954a562c4124486afc2234966d0132d');
        if($respons->successful())
        {
            $this->response=$respons->json();
        }

    }

    public function render()
    {
        return view('livewire.news');
    }
}
