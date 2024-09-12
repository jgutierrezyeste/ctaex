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
            'nombre'=>'required',
            //'tipo_via_id'=>'required',
            'direccion'=>'required',
            //'numero'=>'required',
            
            
            'telefono'=>'required|min:9|max:9',
            //'correo_electronico'=>'nullable|email'
        ];
    }
}
$campos=['nombre','tipo_via_id','direccion','numero','planta','letra','codigo_postal_id','telefono','telefono2','fax','correo_electronico','observaciones'];
