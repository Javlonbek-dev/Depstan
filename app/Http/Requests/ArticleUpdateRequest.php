<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'author_id' => ['required', 'string'],
            'category_id' => ['required', 'string'],
            'status' => ['required', 'string'],
            'featured_image' => ['nullable', 'string'],
            'published_at' => ['nullable'],
        ];
    }
}
