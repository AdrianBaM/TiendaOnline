<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['NCategoria'];
    protected $table = 'categorias';

    public function Marcas()
    {
        return $this->hasMany(Marca::class, 'IDMarca');
    }
}
