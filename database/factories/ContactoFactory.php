<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'telefono'=>$this->faker->unique()->e164PhoneNumber,
            'correo_electronico'=>$this->faker->unique()->companyEmail,
            'redes_sociales'=>$this->faker->unique()->word,
        ];
    }
}
