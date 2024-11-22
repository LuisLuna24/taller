<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_users extends Model
{
    use HasFactory;
    
    protected $table = 'data_users';
    protected $fillable = [
        'id_user',
        'nombre',
        'ap_materno',
        'ap_paterno',
        'telefono',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user','id');
    }
}
