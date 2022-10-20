<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre'=>$this->faker->word(),
            'categoria'=>$this->faker->randomElement(['especia', 'verdura','cereal','proteina','fruta']),	
            'stock'=>$this->faker->numberBetween(30,40),
            'unidadmedida'=>$this->faker->randomElement(['Klg','arroba','litro','libra']),
        ];
    }
}
