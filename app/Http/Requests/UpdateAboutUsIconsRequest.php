<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsIconsRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'second_title' => 'required|string',
            'third_title' => 'required|string',
            'description' => 'required|string',
            'second_description' => 'required|string',
            'third_description' => 'required|string',
            'icon' => 'required|string',
            'second_icon' => 'required|string',
            'third_icon' => 'required|string',
        ];
    }

    // Make Massage For Error in English

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'second_title.required' => 'The second title field is required.',
            'third_title.required' => 'The third title field is required.',
            'description.required' => 'The description field is required.',
            'second_description.required' => 'The second description field is required.',
            'third_description.required' => 'The third description field is required.',
            'icon.required' => 'The icon field is required.',
            'second_icon.required' => 'The second icon field is required.',
            'third_icon.required' => 'The third icon field is required.',
        ];
    }
}
