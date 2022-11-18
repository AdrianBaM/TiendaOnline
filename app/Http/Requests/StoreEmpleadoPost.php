<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleadoPost extends FormRequest
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
            'Nombre' => 'required|min:5',
            'Telefono' => 'required|numeric|min:8',
            'Dpi' => 'required|min:13',
            'Direccion1' => 'required',
            'Usuario' => 'required|min:4',
            'Pass' => 'required|min:5',
        ];
    }
}
