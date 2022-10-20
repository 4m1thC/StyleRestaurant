<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            			
            'capacidad'=>$this->faker->randomDigitNotNull(),
            'ubicacion'=>$this->faker->randomElement(['izquierda', 'derecha', 'centro']),	
            'estado'=>false,
            'idCamarero'=>$this->faker->numberBetween(1,5),
        ];
    }
}
