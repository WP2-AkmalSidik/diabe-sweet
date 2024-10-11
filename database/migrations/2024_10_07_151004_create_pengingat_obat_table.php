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
        Schema::create('pengingat_obat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_obat');
            $table->integer('jumlah_obat');
            $table->string('jenis_obat');
            $table->date('tanggal'); // Ubah tipe menjadi date
            $table->time('pukul'); // Ubah tipe menjadi time
            $table->enum('sebelum_sesudah_makan', ['Sebelum', 'Sesudah']);
            $table->enum('status', ['Sudah', 'Terlewatkan'])->default('Terlewatkan'); // Tambahkan default
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengingat_obat');
    }
};