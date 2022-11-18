<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable = ['Depto'];
    protected $table = 'departamentos';

    public function Sucursales()
    {
        return $this->hasMany(Sucursal::class, 'IDSucursal');
    }

    public function Ventas()
    {
        return $this->hasMany(Venta::class, 'IDVenta');
    }
}
