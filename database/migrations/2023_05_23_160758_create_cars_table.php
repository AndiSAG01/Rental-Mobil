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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->unsignedBigInteger('categories_id');
            $table->string('slug');
            $table->integer('harga_sewa');
            $table->text('gambar');
            $table->string('plat');
            $table->string('bahan_bakar');
            $table->string('jumlah_kursi');
            $table->string('transmisi');
            $table->string('status');
            $table->text('deskripsi');
            $table->text('denda');
            $table->integer('tahun_mobil');
            $table->boolean('p3k');
            $table->boolean('charger');
            $table->boolean('audio');
            $table->boolean('ac');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
