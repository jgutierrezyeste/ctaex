<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpedienteEntidadBancariaRequest extends FormRequest
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
            'codigo_iban'=>'max:4|min:4',
            'entidad_financiera'=>'max:4|min:4',
            'oficina'=>'max:4|min:4',
            'digito_control'=>'max:2|min:2',
            'numero_cuenta'=>'max:10|min:10',
        ];
    }
}
