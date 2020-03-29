<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Data2 extends Component
{
    public $is_medical_history,$steps,$blood_group,$weight,$height,$age,$gender,$is_physically_challenged,$symptoms_details,$temp,$symptoms_condition,$operative_history,$allergy,$medicine,$insulin,$medical_condition;
    
    public function sumbit()
    {
        $this->validate([
        'blood_group' => 'required|max:100|string',
        'operative_history' => 'nullable|max:100|string',
        'weight' => 'required|max:30|string',
        'height' => 'required|max:30|string',
        'is_physically_challenged' => 'required',
        'medicine' => 'nullable|string|max:100',
        'allergy' => 'nullable|string|max:100',
        'insulin' => 'nullable|string|max:100',
        'age' => 'required|integer|between:1,100',
        'gender' => 'required|string|max:100',
        'temp' => 'required|string|max:100',
        'symptoms_details' => 'nullable|string|max:200',
        'symptoms_condition' => 'required|string',
        ]);
        $this->emit('validatedas');
    }
    // public function updated($field)
    // {
    //     $this->validateOnly($field, [
    //     'blood_group' => 'required|max:100|string',
    //     'disease_history' => 'nullable|max:100|string',
    //     'operative_history' => 'nullable|max:100|string',
    //     'weight' => 'required|max:30|string',
    //     'height' => 'required|max:30|string',
    //     'is_physically_challenged' => 'required',
    //     'medicine' => 'nullable|string|max:100',
    //     'allergy' => 'nullable|string|max:100',
    //     'insulin' => 'nullable|string|max:100',
    //     'age' => 'required|integer|between:1,100',
    //     'gender' => 'required|string|max:100',
    //     'temp' => 'required|string|max:100',
    //     'symptoms_details' => 'nullable|string|max:200',
    //     'symptoms_condition' => 'required|string',
    //     ]);
    // }

    public function render()
    {
        return view('livewire.data2');
    }
}
