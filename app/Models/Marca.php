<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['NMarca'];
    protected $table = 'Marca';

    public function Productos()
    {
        return $this->hasMany(Producto::class, 'IDProducto');
    }

    public function Categoria()
    {
        return $this->belongsToMany(Categoria::class, 'IDCategoria');
    }
}
