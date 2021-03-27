<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnages')->insert([
            [
                'id'=> '1',
                'nom' => 'SpiderMan',
                'année_de_création' => '1962',
                'nom_de_bd' => 'SpiderMan',
                'déssinateur' => 'Stan Lee',
            ],
            [
                'id'=> '2',
                'nom' => 'Captain America',
                'année_de_création' => '1940',
                'nom_de_bd' => 'Captain America',
                'déssinateur' => 'Stan Lee',
            ],
            [
                'id'=> '3',
                'nom' => 'Thor',
                'année_de_création' => '1962',
                'nom_de_bd' => 'Thor',
                'déssinateur' => 'Jack Kirby',
            ],
        ]);
    }
}
