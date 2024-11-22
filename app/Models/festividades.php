<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class festividades extends Model
{
    use HasFactory;
    
    protected $table = 'festividades';
    protected $fillable = [
        'descripcion',
        'estatus',
    ];

    public function productos(){
        return $this->hasMany(Productos::class, 'id_festividad', 'id');
    }
}
