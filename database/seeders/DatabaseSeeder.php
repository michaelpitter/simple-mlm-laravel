<?php

namespace Database\Seeders;

use App\Models\Members;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Members::insert([
            [
                "nama" => "Andi",
                "address" => "JL. Andi",
                "phone" => "081212345678"
            ],
            [
                "nama" => "Budi",
                "address" => "JL. Budi",
                "phone" => "087512784598"
            ],
            [
                "nama" => "Ceci",
                "address" => "JL. Ceci",
                "phone" => "087945671524"
            ]
        ]);

    }
}
