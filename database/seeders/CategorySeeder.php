<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        [
            ['name' => 'Startups'],
            ['name' => 'Economy'],
            ['name' => 'World'],
            ['name' => 'Tech']
        ];
    }
}
