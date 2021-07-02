<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerApplicationRequest extends FormRequest
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
            'vacancy_id' => 'required',
            'applicant_name' => 'required',
            'applicant_email' => 'required',
            'cover_letter' => 'nullable',
            'resume' => 'nullable',
            'questions' => 'nullable'
        ];
    }
}
