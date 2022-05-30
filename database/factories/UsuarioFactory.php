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
            "nombre" => $this->faker->firstName,
            "apellidos" => $this->faker->lastName,
            "usuario_nombre" => $this->faker->unique()->word,
            "email" => $this->faker->unique()->safeEmail(),
            "password" => $this->faker->password,
            "pais" => $this->faker->country,
            "ciudad" => $this->faker->city,
            "fech_nac" => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
