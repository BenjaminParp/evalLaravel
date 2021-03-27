<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DessinateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dessinateurs')->insert([
            [
                'id'=> '1',
                'nom' => 'Stan Lee',
                'année_de_naissance' => '1922',
                'nationalité' => 'Americain',
            ],
            [
                'id'=> '2',
                'nom' => 'Jack Kirby',
                'année_de_naissance' => '1917',
                'nationalité' => 'Americain',
            ],
        ]);
    }
}
