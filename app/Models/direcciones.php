<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direcciones extends Model
{
    use HasFactory;
    
    protected $table = 'direcciones';
    protected $fillable = [
        'id_user',
        'calle',
        'no_exterior',
        'no_interior',
        'estado',
        'municipio',
        'colonia',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user','id');
    }
}
