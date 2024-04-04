<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StagiaireRequest extends FormRequest
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
            //
            'nom_complet'=>'required',
            'genre'=>'required',
            'date_naissance'=>'date',
            'note'=>'required|doubled',
            'groupe_id'=>'required|integer'
        ];
    }
}
