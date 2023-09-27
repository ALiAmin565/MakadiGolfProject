<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
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
            "images" => 'required|array|max:100', 
            "images.*" => 'required|image|mimes:jpeg,png,jpg,gif|max:10048', 
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            "images.required" => 'Please upload at least one image',
            "images.max" => 'You can upload a maximum of 50 images',
            "images.*.required" => 'Please upload at least one image',
            "images.*.image" => 'The file must be an image',
            "images.*.mimes" => 'The image must be : jpeg, png, jpg, gif',
            "images.*.max" => 'The image must be a maximum of 10MB',
        ];
    }
}
