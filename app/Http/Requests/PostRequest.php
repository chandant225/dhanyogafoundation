<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'post_category_id' => 'required',
            'title' => 'required',
            'slug' => 'nullable',
            'cover_image' => 'nullable',
            'content' => 'nullable',
            'excerpt' => [
                'nullable',
                'max:' . \App\Post::EXCERPT_LENGTH
            ],
            'published_date' => 'nullable',
            'is_draft' => 'nullable',
            'tags' => 'nullable',

            'seo_title' => 'nullable',
            'seo_description' => [
                'nullable',
                'max:' . \App\Post::SEO_DESCRIPTION_LENGTH
            ],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'excerpt' => $this->generateExcerpt(),
            'seo_description' => $this->generateSeoDescription()
        ]);
    }

    private function generateExcerpt()
    {
        if ($this->except) {
            return $this->except;
        }

        return substr($this->description, 0, \App\Post::EXCERPT_LENGTH);
    }

    private function generateSeoDescription()
    {
        if ($this->seo_description) {
            return $this->seo_description;
        }

        if ($this->except) {
            return substr($this->except, 0, \App\Post::SEO_DESCRIPTION_LENGTH);
        }

        return substr($this->except, 0, \App\Post::SEO_DESCRIPTION_LENGTH);
    }
}
