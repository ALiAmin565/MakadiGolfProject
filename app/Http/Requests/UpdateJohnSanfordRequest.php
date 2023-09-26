<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJohnSanfordRequest extends FormRequest
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            'description' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required!',
            'image.required' => 'Image is required!',
            'image.image' => 'Image must be an image!',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Image must be less than 4096 kilobytes.',
            'description.required' => 'Description is required!',
        ];
    }
}
