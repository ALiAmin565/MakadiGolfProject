<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartnersRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|string|max:255',
            'stars_count' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
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
            'link.required' => 'Link is required!',
            'stars_count.required' => 'Stars Count is required!',
            'image.image' => 'Image must be an image!',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Image must be at most 5000 kilobytes.',
        ];
    }
}
