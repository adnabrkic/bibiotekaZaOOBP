<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Knjige;
use App\Models\Autor;

class KnjigeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   
        Knjige::factory()->count(10)->create();
    }
}
