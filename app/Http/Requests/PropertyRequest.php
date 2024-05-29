<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'status' => 'required|integer',
            'type_id' => 'required|exists:types,id',
            'user_id' => 'required|exists:users,id',
            'price' => 'required|numeric',
            'area' => 'required|numeric',
            'rooms' => 'required|integer',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|integer',
            'description' => 'required|string',
            'building_age' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
        ];
    }
}
