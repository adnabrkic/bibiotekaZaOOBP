<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateZaposlenicisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('zaposlenicis', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('prezime');
            $table->string('email');
            $table->string('adresa');
            $table->string('brojTelefona');
            $table->string('plata');
            $table->string('posao');
            $table->date('datumZaposlenja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zaposlenicis');
    }
};
