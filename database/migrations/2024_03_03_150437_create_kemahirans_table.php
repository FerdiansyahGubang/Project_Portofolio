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
        Schema::create('kemahirans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Jenis Kemahiran');
            $table->string('Tahun');
            $table->string('Tempat');
            $table->string('Deskripsi Kemahiran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kemahirans');
    }
};
