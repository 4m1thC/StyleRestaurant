<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RolSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
        $this->call(UsuarioSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(ProductosTableSeeder::class);
        $this->call(MesaSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(IngredienteSeeder::class);

    }
}
