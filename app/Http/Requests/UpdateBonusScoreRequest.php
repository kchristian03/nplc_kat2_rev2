<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBonusScoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'pos1' => 'required|numeric',
            'pos2' => 'required|numeric',
            'pos3' => 'required|numeric',
            'pos4' => 'required|numeric',
            'pos5' => 'required|numeric',
        ];
    }
}
