<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentUpdateRequest extends FormRequest
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
            'article_id' => ['required', 'string'],
            'user_id' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'status' => ['required', 'string'],
        ];
    }
}
