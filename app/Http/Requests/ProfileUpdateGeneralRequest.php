<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateGeneralRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cedula' => ['required', 'string', 'max:14'],
            'countries_code' => ['required', 'integer'],
            'depmun_id' => ['integer'],
            'comunidad' => ['required', 'string', 'max:250'],
            'estado_civil_id'=>['required', 'integer'],
            'sexo' => ['required', 'string', 'max:1']
        ];
    }
}
