<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzdavacsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('izdavacs', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('adresa');
            $table->string('brojTelefona');
            $table->string('webAdresa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izdavacs');
    }
};
