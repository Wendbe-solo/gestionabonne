<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("etudiants")->insert([
            ["nom"=>"Sawadogo"],
            ["nom"=>"ouedraogo"],
            ["nom"=>"Kabore"]

        ]);
    }
}
