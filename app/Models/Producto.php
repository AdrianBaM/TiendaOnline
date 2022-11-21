<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'details', 'price', 'shipping_cost', 'description', 'category_id', 'brand_id', 'image_path'];
    protected $table = 'productos';


    public function Sucursal()
    {
        return $this->belongsTo(Sucursal::class,'category_id');
    }

    public function Marca()
    {
        return $this->belongsTo(Marca::class,'brand_id');
    }

    public function Detalles()
    {
        return $this->hasMany(Detalle::class, 'IDDetalle');
    }
}
