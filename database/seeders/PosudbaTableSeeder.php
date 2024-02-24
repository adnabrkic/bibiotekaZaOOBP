<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posudba;

class PosudbaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Posudba::factory()->count(10)->create();
        //
    }
}
