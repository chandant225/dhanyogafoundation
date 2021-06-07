<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class HomePageSettingRequest extends FormRequest
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
            'show_topbar_notice' => 'nullable',
            'topbar_notice' => 'nullable',
            'topbar_notice_action_text' => 'nullable',
            'topbar_notice_action_link' => 'nullable',

            'show_our_mission_section' => 'nullable',
            'our_mission_title' => 'nullable',
            'our_mission_description' => 'nullable',
            'our_mission_page' => 'nullable',

            'show_latest_blogs_section' => 'nullable',
            'latest_blogs_section_title' => 'nullable',
            'latest_blogs_display_count' => 'nullable',

            'hp_our_programs_section_title' => 'nullable',

            'hp_our_programs_one_title' => 'nullable',
            'hp_our_programs_one_desc' => 'nullable',
            'hp_our_programs_one_link' => 'nullable',

            'hp_our_programs_two_title' => 'nullable',
            'hp_our_programs_two_desc' => 'nullable',
            'hp_our_programs_two_link' => 'nullable',

            'hp_our_programs_three_title' => 'nullable',
            'hp_our_programs_three_desc' => 'nullable',
            'hp_our_programs_three_link' => 'nullable',
        ];
    }
}
