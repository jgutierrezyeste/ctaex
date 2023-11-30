<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CentroRequest extends FormRequest
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
            'nombre_centro'=>'required',
            'tipo_via'=>'required',
            'direccion'=>'required',
            'numero'=>'required',
            'poblacion'=>'required',
            'provincia'=>'required',
            'codigo_postal'=>'required',
            'telefono'=>'required|min:9|max:9',
            'correo_electronico'=>'nullable|email'
        ];
    }
}
