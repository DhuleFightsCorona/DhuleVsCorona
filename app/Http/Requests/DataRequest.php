<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
        'name' => 'required|max:200',
        'mobile' => 'required|digits:10',
        'adress' => 'required|max:200',
        'pregnent_count' => 'required|lt:10|integer',
        'newborn_count' => 'required|lt:10|integer',
        'family_count' => 'required|between:1,10|integer',
        'blood_group.*' => 'required|max:100|string',
        'disease_history.*' => 'nullable|max:100|string',
        'operative_history.*' => 'nullable|max:100|string',
        'weight.*' => 'nullable|max:30|string',
        'height.*' => 'nullable|max:30|string',
        'is_physically_challenged.*' => 'required|boolean',
        'medicine.*' => 'required|string|max:50',
        'insulin.*' => 'required|string|max:50',
        'age.*' => 'required|integer|between:1:100',
        'gender.*' => 'required|string|max:50',
        'temp.*' => 'required|string|max:50',
        'symptoms.*' => 'required|string|max:50',
        'exposure.*' => 'required|string|max:50',
        'symptoms_condition.*' => 'string|max:50'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'body.required'  => 'A message is required',
        ];
    }
}
