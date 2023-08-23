<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFacilitiesRequest extends FormRequest
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
            'name' => 'string',
            'icon' => 'string',
            'youtube_link' => 'string',
            'related_to' => 'string',
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:5120',
            'description' => 'string',
        ];
    }
}
