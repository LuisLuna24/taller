<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito_estatus extends Model
{
    use HasFactory;
    
    protected $table = 'carrito_estatus';
    protected $fillable = [
        'descripcion',
        'estatus',
    ];

    public function carrito(){
        return $this->hasMany(carritos::class, 'id_estatus', 'id');
    }
}
