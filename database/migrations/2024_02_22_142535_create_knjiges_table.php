<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnjigesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('knjiges', function (Blueprint $table) {
            $table->id();
            $table->integer ('autorID')->nullable();
            $table->string('title')->nullable();
            $table->string('ISBN')->unique();
            $table->integer('kategorijaID');
            $table->string('zanr');
            $table->date('datumIzdavanja');
            $table->string('opis');
            $table->integer('jezikID');
            $table->integer('izdavacID');
            $table->integer('dostupneKopije');
            $table->double('prosjecnaOcjena');
            $table->integer('policaID');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knjiges');
    }
};
