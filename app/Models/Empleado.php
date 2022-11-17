<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Telefono', 'Dpi', 'Direccion', 'Usuario', 'Pass'];
    protected $table = 'Empleado';

    public function Tipo()
    {
        return $this->belongsTo(Tipo::class, 'IDTipo');
    }

    public function Sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'IDSucursal');
    }
}

