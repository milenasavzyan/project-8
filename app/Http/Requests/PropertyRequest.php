<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'title' => 'required|string',
            'status' => 'required|string',
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
            'building_age' => 'required|string',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

    }
}
