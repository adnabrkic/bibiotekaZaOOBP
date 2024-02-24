<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Korisnik;

class KorisnikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Korisnik::factory()->count(10)->create();
        //

    }
}
