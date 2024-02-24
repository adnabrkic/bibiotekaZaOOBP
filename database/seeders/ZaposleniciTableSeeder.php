<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zaposlenici;

class ZaposleniciTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Zaposlenici::factory()->count(5)->create();
        //
    }
}
