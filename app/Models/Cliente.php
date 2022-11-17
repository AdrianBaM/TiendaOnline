<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Telefono', 'Correo', 'Direccion1'];
    protected $table = 'Cliente';

    public function Ventas() 
    {
        return $this->hasMany(Venta::class, 'IDVenta');
    }
}
