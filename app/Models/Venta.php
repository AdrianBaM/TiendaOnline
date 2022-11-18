<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    const ENCAMINO=1;
    const ENTREGADO=2;
    const CANCELADO=3;
    protected $fillable = ['Fecha', 'Total', 'Envio', 'Estado', 'Direccion', 'IDCliente', 'IDSucursal', 'IDDepartamento'];
    protected $table = 'ventas';

    public function Detalles()
    {
        return $this->hasMany(Detalle::class, 'IDDetalle');
    }

    public function Sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'IDSucursal');
    }

    public function Departamento()
    {
        return $this->belongsTo(Departamento::class, 'IDDepartamento');
    }

    public function Cliente()
    {
        return $this->belongsTo(Cliente::class, 'IDCliente');
    }
}
