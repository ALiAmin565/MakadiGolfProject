<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdategalleryRequest extends FormRequest
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
            "images" => 'required|array|max:5', // Maximum of 5 images (you can adjust this number as needed)
            "images.*" => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Each image must be an image and have a maximum size of 2MB (2048 KB)
        ];
    }
}
