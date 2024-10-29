<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class type_users extends Model
{
    protected $table = 'type_users';
    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class, 'id_type','id');
    }
}
