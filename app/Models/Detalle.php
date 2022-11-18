<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $fillable = ['Subtotal', 'Cantidad'];
    protected $table = 'detalles';

    public function Producto()
    {
        return $this->belongsTo(Producto::class, 'IDProducto');
    }

    public function Venta()
    {
        return $this->belongsTo(Venta::class, 'IDVenta');
    }
}
