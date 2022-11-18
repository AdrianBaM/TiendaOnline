<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVentaPost extends FormRequest
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
            'Fecha' => 'required|min:5',
            'Total' => 'required|numeric|min:8',
            'Envio' => 'required|min:13',
            'Estado' => 'required',
            'Direccion' => 'required|min:4',
            'IDCliente' => 'required',
            'IDSucursal' => 'required',
            'IDDepartamento' => 'required',
        ];
    }
}
