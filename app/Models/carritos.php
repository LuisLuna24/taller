<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carritos extends Model
{
    use HasFactory;
    
    protected $table = 'carritos';
    protected $fillable = [
        'id_user',
        'id_estatus',
    ];

    public function estatus(){
        return $this->belongsTo(carrito_estatus::class, 'id_estatus', 'id');
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }



}
