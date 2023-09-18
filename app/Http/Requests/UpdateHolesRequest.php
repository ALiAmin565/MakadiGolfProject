<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHolesRequest extends FormRequest
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
            'title' => 'string',
            'description' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3056',
            'logo'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:3056',
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title must be required',
            'title.string' => 'Title must be string',
            'description.required' => 'Description must be required',
            'description.string' => 'Description must be string',
            'image.required' => 'Image must be required',
            'image.image' => 'Image must be image',
            'image.mimes' => 'Image must be jpeg,png,jpg,gif,svg',
            'image.max' => 'Image must be less than 2MB',
            'logo.required' => 'Logo must be required',
            'logo.image' => 'Logo must be image',
            'logo.mimes' => 'Logo must be jpeg,png,jpg,gif,svg',
            'logo.max' => 'Logo must be less than 2MB',
        ];
    }
}
