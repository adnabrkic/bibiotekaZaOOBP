<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('policas', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('opis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policas');
    }
};
