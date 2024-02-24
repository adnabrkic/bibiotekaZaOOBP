<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosudbasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posudbas', function (Blueprint $table) {
            $table->id();
            $table->date('datumPosudbe');
            $table->date('datumVracanja');
            $table->decimal('zakasnina');
            $table->integer('knjiga');
            $table->integer('korisnik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posudbas');
    }
};
