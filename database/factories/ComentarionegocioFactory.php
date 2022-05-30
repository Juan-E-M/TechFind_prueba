<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ComentarionegocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "valoracion"=>$this->faker->numberBetween(0,5),
            "texto_comentario"=>$this->faker->text($maxNbChars = 200),
            "imagenes"=>$this->faker->imageUrl(),
            "fech_cre"=>$this->faker->iso8601($max = 'now'),
        ];
    }
}
