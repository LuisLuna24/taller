<?php

namespace Database\Seeders;

use App\Models\type_users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type1 = new type_users();
        $type1->id = "1";
        $type1->name = "Admin";
        $type1->save();

        $type2 = new type_users();
        $type2->id = "2";
        $type2->name = "Gestor";
        $type2->save();

        $type3 = new type_users();
        $type3->id = "3";
        $type3->name = "Cliente";
        $type3->save();
    }
}
