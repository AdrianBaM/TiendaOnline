<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientePost extends FormRequest
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
            'Nombre' => 'required|min:3',
            'Telefono' => 'required|numeric|min:8',
            'Correo' => 'required|email|min:10',
            'Nit' => 'max:9',
            'Direccion1' => 'required',
            'Direccion2' => '',
            'Direccion3' => '',
        ];
    }
}
