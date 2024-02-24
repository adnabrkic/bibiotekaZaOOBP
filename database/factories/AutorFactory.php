<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ime'=>$this->faker->firstName(),
            'prezime'=>$this->faker->lastName(),
            'drzava'=>$this->faker->country(),
            'datumRodjenja'=>$this->faker->dateTimeBetween('-300 years', 'now'),
            'biografija'=>$this->faker->sentence(),
            //
        ];
    }
}
