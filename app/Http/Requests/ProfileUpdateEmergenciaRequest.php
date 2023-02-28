<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateEmergenciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'e_nombre' => ['required','string'],
            'e_celular' => ['required', 'numeric', 'digits:8'],
            'e_direccion' => ['required', 'string'],
            'e_personas' => ['required', 'numeric']
        ];
    }
}
