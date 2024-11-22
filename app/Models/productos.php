<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    
    protected $table = 'productos';
    protected $fillable = [
        'id_categoria',
        'id_festividad',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'estatus',
    ];

    public function categoria(){
        return $this->belongsTo(categorias::class, 'id_categoria', 'id');
    }

    public function festividad(){
        return $this->belongsTo(festividades::class, 'id_festividad', 'id');
    }


}
