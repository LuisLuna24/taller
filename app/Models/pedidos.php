<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;
    
    protected $table = 'pedidos';
    protected $fillable = [
        'id_user',
        'id_carrito',
        'id_ubicacion',
        'precio_total',
        'estatus',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function carrito(){
        return $this->belongsTo(carritos::class, 'id_carrito', 'id');
    }

    public function ubicacion(){
        return $this->belongsTo(ubicacion::class, 'id_ubicacion', 'id');
    }

}
