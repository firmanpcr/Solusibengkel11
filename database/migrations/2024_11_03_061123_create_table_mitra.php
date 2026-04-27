<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->id('mitra_id');
            $table->string('nama_mitra', 200);
            $table->text('alamat')->nullable();
            $table->string('email', 50)->unique();
            $table->string('nomor_telepon');
            $table->enum('jenis_kemitraan', ['Platinum', 'Gold', 'Silver']);
            $table->date('tanggal_bergabung');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('mitra');
    }
};
