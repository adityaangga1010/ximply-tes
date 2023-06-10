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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis',50);
            $table->string('pengarang',50);
            $table->string('tahun_terbit');
            $table->integer('jumblah_halaman');
            $table->enum('kategori',['novel', 'majalah', 'kamus', 'komik', 'manga', 'biografi', 'naskah']);
            $table->enum('status',['tersedia', 'dipinjam'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
