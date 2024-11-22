<?php

namespace Database\Seeders;

use App\Models\type_users;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $TipoUser1 = new type_users();
        $TipoUser1->id = 1;
        $TipoUser1->descripcion = "Administrador";
        $TipoUser1->save();

        $TipoUser2 = new type_users();
        $TipoUser2->id = 2;
        $TipoUser2->descripcion = "Empleado";
        $TipoUser2->save();

        $TipoUser3 = new type_users();
        $TipoUser3->id = 3;
        $TipoUser3->descripcion = "Cliente";
        $TipoUser3->save();

        $user = new User();
        $user->name = "Luis Luna";
        $user->email = "lued1006@gmail.com";
        $user->password = "Hmcnjsa1*";
        $user->estatus = "1";
        $user->id_type_user = 1;
        $user->email_verified_at = '05/08/2024';
        $user->save();
    }
}
