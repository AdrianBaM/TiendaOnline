<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Descripcion', 'Precio', 'Cod', 'Imagen'];
    protected $table = 'Producto';


    public function Sucursales()
    {
        return $this->belongsToMany(Sucursal::class, 'IDSucursal')->withPivot('Existencias');
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
