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
        'pregnent_count' => 'nullable|lt:10|integer',
        'newborn_count' => 'nullable|lt:10|integer',
        'family_count' => 'required|between:1,10|integer',
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
        'travel.*' => 'nullable|string|max:100'
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
            'name.required' => 'Please enter your Full Name',
            'name.max' => 'Name should not exceed 200 Characters.',
            'mobile.required'  => 'Please enter your Mobile no.',
            'adress.required'  => 'Please enter your Address',
            'adress.max'  => 'Address should not exceed 200 Characters.',
            'pregnent_count.required'  => 'Please mention if there is a Pregnant Woman in your Family.',
            'newborn_count.required'  => 'Please mention if there is a New-born in your Family.',
            'family_count.required'  => 'Please mention number of Family Members.',
            'blood_group.required'  => 'Please mention Blood Group.',
            'blood_group.max'  => 'Blood Group should not exceed 100 Characters.',            
            'disease_history.max'  => 'Disease History should not exceed 100 Characters.',            
            'operative_history.max'  => 'Operation History should not exceed 100 Characters.',            
            'is_physically_challenged.required'  => 'Please mention if you are Physically Challenged.',
            'medicine.required'  => 'Please mention your Medicines.',
            'medicine.max'  => 'Medicines details should not exceed 100 Characters.',
            'insulin.required'  => 'Please mention your Insulin intake.',
            'insulin.max'  => 'Insulin details should not exceed 100 Characters.',
            'weight.max'  => 'Weight should not exceed 30 Characters.',
            'height.max'  => 'Height should not exceed 30 Characters.',
            'age.required'  => 'Please mention your Age.',
            'gender.required'  => 'Please mention your Gender.',
            'temp.required'  => 'Please mention your Body Temperature (in Degree Celsius).',
            'symptoms.max'  => 'Symptoms should not exceed over 100 Characters.',
            'symptoms.required'  => 'Please mention your Symptoms you are facing.',
            'exposure.required'  => 'Please mention your Travel Exposure Details.',
            'exposure.required'  => 'Travel Exposure Details should not exceed over 100 Characters.',
            
        ];
    }
}
