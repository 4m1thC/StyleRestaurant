<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ci'=>$this->faker->unique()->numerify('#######'),
            'name'=>$this->faker->firstNameMale(),
            'nombre' => $this->faker->name(),
            'ape_paterno'=>Str::random(5),
            'ape_materno'=>Str::random(5),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
       
        ];
    }
}