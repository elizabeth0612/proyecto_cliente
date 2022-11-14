<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
             
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'dni' => 'required',
        
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'Agregar nombre',
            'apellido.required' => 'Agregar Apellido',
            'telefono.required' => 'Agregar telefono',
            'dni.required' => 'Agregar telefono',
        ];
    }

}