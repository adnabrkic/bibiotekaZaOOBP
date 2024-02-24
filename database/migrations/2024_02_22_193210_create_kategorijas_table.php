<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorijasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kategorijas', function (Blueprint $table) {
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
        Schema::dropIfExists('kategorijas');
    }
};
