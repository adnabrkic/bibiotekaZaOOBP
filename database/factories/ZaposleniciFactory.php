<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Zaposlenici;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zaposlenici>
 */
class ZaposleniciFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime'=>$this->faker->firstName(),
            'prezime'=>$this->faker->lastName(),
            'email'=>'mail',
            'adresa'=>$this->faker->sentence(),
            'brojTelefona'=>'000000',
            'posao'=>'bibliotekar',
            'plata'=>'1000',
            'datumZaposlenja'=>$this->faker->date(),
            //
        ];
    }
}
