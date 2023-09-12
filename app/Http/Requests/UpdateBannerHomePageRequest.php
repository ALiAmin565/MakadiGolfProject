<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBannerHomePageRequest extends FormRequest
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
            'sub_title' => 'string',
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:5120',
            'description' => 'string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'title.string' => 'Title must be string',
            'sub_title.string' => 'Sub Title must be string',
            'image.image' => 'Image must be image',
            'image.mimes' => 'Image must be jpg,jpeg,png,bmp,gif,svg,webp',
            'image.max' => 'Image must be less than 5MB',
            'description.string' => 'Description must be string',
        ];
    }
}
