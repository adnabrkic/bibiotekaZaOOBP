<?php

namespace Database\Factories;
use App\Models\Knjige;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Knjige>
 */
class KnjigeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Knjige::class;

    public function definition()
    {
        return [
        'autorID' =>$this->faker->numberBetween(14, 123),
        'title'=>$this->faker->words(3, true),
        'ISBN'=>$this->faker->unique()->randomNumber(),
        'kategorijaID'=>$this->faker->numberBetween(1, 5),
        'zanr'=> $this->faker->randomElement(['Roman', 'Triler', 'Fantazija', 'Kriminalistički', 'Naučna fantastika', 'Poezija']),
        'datumIzdavanja'=>$this->faker->date(),
        'opis'=>$this->faker->sentence(),
        'jezikID'=>$this->faker->numberBetween(1, 4),
        'izdavacID'=>$this->faker->numberBetween(1, 5),
        'dostupneKopije'=>$this->faker->randomNumber(1, 30),
        'prosjecnaOcjena' => $this->faker->randomFloat(1, 1, 5),
        'policaID'=>$this->faker->numberBetween(1, 6),
            //
        ];
    }
}
