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
        Schema::create('sesi_konselings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konselor_id');
            $table->unsignedBigInteger('klien_id');
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->unsignedBigInteger('kategori_id');
            $table->boolean('status');

            $table->foreign('konselor_id')->references('id')->on('konselors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('klien_id')->references('id')->on('kliens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori_masalahs')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesi_konselings');
    }
};
