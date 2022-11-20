<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Descripcion', 'Precio', 'Cod', 'Imagen', 'Stock', 'IDMarca', 'IDSucursal'];
    protected $table = 'productos';


    public function Sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'IDSucursal');
    }

    public function Marca()
    {
        return $this->belongsTo(Marca::class, 'IDMarca');
    }

    public function Detalles()
    {
        return $this->hasMany(Detalle::class, 'IDDetalle');
    }
}
