<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    protected $fillable = ['TipoU'];
    protected $table = 'Tipo';

    public function Empleados()
    {
        return $this->hasMany(Empleado::class, 'IDEmpleado');
    }
}
