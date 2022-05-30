<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_producto'=>$this->faker->word,
            'descripcion'=>$this->faker->text($maxNbChars = 100),
            'imagen'=>$this->faker->imageUrl(),
            'fech_cre'=>$this->faker->iso8601($max = 'now'),
            'fech_actu'=>$this->faker->iso8601($max = 'now'),
        ];
    }
}
