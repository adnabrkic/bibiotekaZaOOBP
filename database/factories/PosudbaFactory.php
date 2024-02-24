<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Posudba;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posudba>
 */
class PosudbaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'datumPosudbe'=>$this->faker->date(),
            'datumVracanja'=>$this->faker->date(),
            'zakasnina'=>$this->faker->randomFloat(1, 1, 5),
            'knjiga'=>$this->faker->numberBetween(50,60),
            'korisnik' =>$this->faker->numberBetween(10,20),
            //
        ];
    }
}
