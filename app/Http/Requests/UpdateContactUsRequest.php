<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactUsRequest extends FormRequest
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
            'description' => 'required|string',
            'numbers' => 'required|string',
            'emails' => 'required|string',
            'location' => 'required|string',
            'google_map_link' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required!',
            'description.required' => 'Description is required!',
            'numbers.required' => 'Numbers is required!',
            'emails.required' => 'Emails is required!',
            'location.required' => 'Location is required!',
            'google_map_link.required' => 'Google Map Link is required!',
        ];
    }
}
