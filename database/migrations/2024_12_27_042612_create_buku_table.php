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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku', 10);
            $table->string('judul', 60);
            $table->string('pengarang', 50);
            $table->string('penerbit', 50);
            $table->string('isbn', 60);
            $table->string('thn_terbit', 10);
            $table->string('kategori', 20);
            $table->string('rak', 10);
            $table->string('jumlah', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
