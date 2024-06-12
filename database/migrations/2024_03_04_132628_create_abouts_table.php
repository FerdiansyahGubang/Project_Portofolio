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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Foto');
            $table->longText('Pengenalan Singkat');
            $table->string('Skill Utama');
            $table->longText('Deskripsi Skill');
            $table->string('Tanggal Lahir');
            $table->string('Website');
            $table->string('Nomor Telepon');
            $table->string('Kota');
            $table->string('Usia');
            $table->string('Tingkat Kemahiran');
            $table->string('Email');
            $table->string('Pekerjaan');
            $table->longText('Deskripsi Biodata');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
