<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJeziksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jeziks', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('sifra');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeziks');
    }
};
