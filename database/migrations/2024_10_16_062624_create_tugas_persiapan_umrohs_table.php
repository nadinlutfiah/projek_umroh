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
        Schema::create('tugas_persiapan_umrohs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tugas'); // Nama tugas
            $table->text('deskripsi'); // Deskripsi tugas
            $table->boolean('sudah')->default(false); // Apakah tugas sudah selesai
            $table->boolean('tidakTerpenuhi')->default(false); // Apakah tugas tidak terpenuhi
            $table->boolean('dikerjakanRekan')->default(false); // Apakah tugas dikerjakan oleh orang lain
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_persiapan_umrohs');
    }
};
