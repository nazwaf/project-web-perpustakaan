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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('buku_id');
            $table->integer('pinjam_id');
            $table->integer('kembali_id');
            $table->integer('anggota_id');
            $table->integer('kategori_id');
            $table->integer('rak_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
