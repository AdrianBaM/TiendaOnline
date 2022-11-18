<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Telefono', 'Correo', 'Nit', 'Direccion1', 'Direccion2', 'Direccion3'];
    protected $table = 'clientes';

    public function Ventas() 
    {
        return $this->hasMany(Venta::class, 'IDVenta');
    }
}
