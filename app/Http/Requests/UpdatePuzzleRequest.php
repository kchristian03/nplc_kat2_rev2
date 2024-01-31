<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePuzzleRequest extends FormRequest
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
            'pos_code' => 'required|string|max:255',
            'pos_name' => 'required|string|max:255',
            'room' => 'required|string|max:255',
            'score_won' => 'required|integer',
            'score_lost' => 'required|integer',
            'score_mid' => 'required|integer',
            'code_won' => 'required|string|max:255',
            'code_lost' => 'required|string|max:255',
            'code_mid' => 'required|string|max:255',
            'entry_coin' => 'required|integer',
            'entry_exp' => 'required|integer',
            'forfitable' => 'required|boolean',
            'max_team' => 'required|integer',
            'time' => 'required|integer',
            'pic_committee' => 'required|string|max:255',
        ];
    }
}
