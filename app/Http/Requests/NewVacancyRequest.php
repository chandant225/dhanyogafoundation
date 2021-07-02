<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewVacancyRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'nullable',
            'apply_link' => 'nullable',
            'deadline_date' => 'nullable|date',
            'show_cover_letter' => 'nullable|boolean',
            
            'questions.*.question' => 'required',
            'questions.*.answer_type' => 'required',
        ];
    }
}
