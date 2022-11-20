<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $fillable = ['Direccion', 'IDDepartamento'];
    protected $table = 'sucursals';

    public function Empleados()
    {
        return $this->hasMany(Empleado::class, 'IDEmpleado');
    }

    public function Departamento()
    {
        return $this->belongsTo(Departamento::class, 'IDDepartamento');
    }

    public function Productos()
    {
        return $this->hasMany(Producto::class, 'IDProducto');
    }

    public function Ventas()
    {
        return $this->hasMany(Venta::class, 'IDVenta');
    }

}
