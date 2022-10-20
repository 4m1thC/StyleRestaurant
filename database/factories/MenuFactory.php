<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'dia'=>$this->faker->randomElement(['lunes', 'martes', 'miercoles','jueves','viernes','sabado','domingo']),	

            'descripcion'=>$this->faker->text(),	
            'img'=>$this->faker->word(),
        ];
    }
}
