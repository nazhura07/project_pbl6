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
        Schema::create('jam_konselings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->time('waktu_awal');
            $table->time('waktu_akhir');
            $table->boolean('status');
            $table->unsignedBigInteger('konselor_id');
            
            $table->foreign('konselor_id')->references('id')->on('konselors')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jam_konselings');
    }
};
