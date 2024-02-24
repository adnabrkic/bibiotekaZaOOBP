<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Autor::factory()->count(5)->create();
        //
    }
}
