<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mekanik', function (Blueprint $table) {
            $table->increments('mekanik_id');
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->string('password', 100);
            $table->integer('experience_years');
            $table->enum('keahlian', ['Mesin', 'Bodi', 'Ban', 'Kelistrikan'])->nullable();
            $table->string('phone', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mekanik');
    }
};
