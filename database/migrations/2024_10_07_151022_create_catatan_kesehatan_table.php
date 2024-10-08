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
        Schema::create('catatan_kesehatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('umur');
            $table->float('tinggi_badan');
            $table->float('berat_badan');
            $table->float('berat_badan_ideal');
            $table->float('asupan_air_harian');
            $table->float('kadar_glukosa');
            $table->string('kategori_glukosa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_kesehatan');
    }
};
