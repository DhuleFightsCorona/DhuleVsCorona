<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilymemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'blood_group' => 'required|max:100|string',
        'disease_history' => 'nullable|max:100|string',
        'operative_history' => 'nullable|max:100|string',
        'weight' => 'nullable|max:30|string',
        'height' => 'nullable|max:30|string',
        'is_physically_challenged' => 'required',
        'medicine' => 'nullable|string|max:100',
        'allergy' => 'nullable|string|max:100',
        'insulin' => 'nullable|string|max:100',
        'age' => 'required|integer|between:1,100',
        'gender' => 'required|string|max:100',
        'temp' => 'required|string|max:100',
        'symptoms.*' => 'nullable|string|max:100',
        'symptoms_details' => 'nullable|string|max:200',
        'exposure.*' => 'nullable|string|max:100',
        'symptoms_condition' => 'required|string',
        'medical_condition.*' => 'nullable|string|max:100',
        'travel.*' => 'nullable|string|max:100',
        'family_name' => 'nullable|string|max:100'
        ];
    }
}
