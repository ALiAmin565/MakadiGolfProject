<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberShipRequest extends FormRequest
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
            // 'familyName' => 'required|string',
            // 'firstName' => 'required|string',
            // 'presentHomeAddress' => 'required|string',
            // 'passportNumber' => 'required|string',
            // 'cellNumber' => 'required|numeric',
            // 'homeNumber' => 'required|numeric',
            // 'emailAddress' => 'required|string',
            // 'membershipType' => 'required|in:Ordinary,Family,Corporate,Life,Individual',
            // 'residentOrTourist' => [
            //     'required',
            //     'array', // Ensure it's an array
            //     'in:Resident,Tourist', // Validate the array values
            // ],
            // 'hotelName' => 'required|string',
        ];
    }
}
