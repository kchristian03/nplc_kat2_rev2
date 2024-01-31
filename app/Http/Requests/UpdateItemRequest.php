<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'duration' => 'required|integer',
            'price' => 'required|integer',
            'image_path' => 'nullable|file|max:4096|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
