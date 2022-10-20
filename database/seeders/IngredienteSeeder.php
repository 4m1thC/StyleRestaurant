<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ingrediente::factory(20)->create();
    }
}
