<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersCreate extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $type3 = new User();
        $type3->email = "lued1006@gmail.com";
        $type3->password = bcrypt('Hmcnjsa1*.');
        $type3->status = "1";
        $type3->id_type = "1";
        $type3->save();

    }
}
