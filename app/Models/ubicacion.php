<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    use HasFactory;
    protected $table = 'ubicaciones';
    protected $fillable = [
        'nombre',
        'link',
        'estatus'
    ];

    //pedidos
    public function pedidos(){
        return $this->hasMany(pedidos::class, 'id_ubicacion', 'id');
    }
}
