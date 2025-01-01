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
        Schema::create('kembali', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kembali', 10);
            $table->string('nama_pengembali', 60);
            $table->string('judul_buku', 50);
            $table->date('tgl_pinjam');
            $table->date('tenggat');
            $table->date('tgl_kembali');
            $table->string('status', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kembali');
    }
};
