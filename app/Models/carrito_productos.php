<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito_productos extends Model
{
    use HasFactory;
    
    protected $table = 'carrito_productos';
    protected $fillable = [
        'id_carrito',
        'id_producto',
        'cantidad',
        'precio_total',
    ];

    public function producto(){
        return $this->belongsTo(productos::class, 'id_producto', 'id');
    }

    public function carrito(){
        return $this->belongsTo(carritos::class, 'id_carrito', 'id');
    }
}
