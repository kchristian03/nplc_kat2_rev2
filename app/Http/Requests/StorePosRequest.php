<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePosRequest extends FormRequest
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
            'coin_won' => 'required|integer',
            'coin_lost' => 'required|integer',
            'exp_won' => 'required|integer',
            'exp_lost' => 'required|integer',
            'score_won' => 'required|integer',
            'score_lost' => 'required|integer',
            'item_won' => 'required|string|max:255',
            'item_rate' => 'required|integer',
            'room' => 'required|string|max:255',
            'pos_name' => 'required|string|max:255',
        ];
    }
}
