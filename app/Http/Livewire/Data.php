<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;


class Data extends Component
{
    public $is_preg,$pregnent_count,$is_newborn,$newborn_count,$family_count,$steps,$name,$mobile,$adress;
    public $is_validated=0;

    public function check_validation()
    {
        $this->validate([
        'name' => 'required|max:25',
        'mobile' => 'required|digits:10',
        'adress' => 'required|max:200',
        'pregnent_count' => 'requiredIf:$is_preg,1|nullable|integer',
        'newborn_count' => 'requiredIf:$is_newborn,1|nullable|integer',
        'family_count' => 'required|between:1,10|integer',
        ]);
        $this->is_validated=1;
        $this->emit('validated', $this->is_validated);
       
    }
    // public function updated($field)
    // {
    //     $this->validateOnly($field, [
    //     'name' => 'required|max:25',
    //     'mobile' => 'required|digits:10',
    //     'adress' => 'required|max:200',
    //     'pregnent_count' => 'required|lt:10|integer',
    //     'newborn_count' => 'required|lt:10|integer',
    //     'family_count' => 'required|between:1,10|integer',
    //     ]);
    // }

    public function render()
    {
        return view('livewire.data');
    }
}
