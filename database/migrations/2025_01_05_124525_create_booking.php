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
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->enum('pilih_service', ['Service Motor', 'Service Mobil', 'Perawatan Berkala', 'Pengecekan'])->nullable();
            $table->date('tanggal_service')->nullable();
            $table->string('permintaan_khusus');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
