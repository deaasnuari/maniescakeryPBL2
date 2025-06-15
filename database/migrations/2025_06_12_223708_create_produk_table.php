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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama');
            $table->text('deskripsi');
            $table->decimal('harga', 10, 2);

            // Foreign key: kategori_id → kategori(id)
            $table->unsignedBigInteger('kategori'); // Pastikan tipe sama dengan kategori.id
            $table->foreign('kategori')->references('id')->on('kategori')->onDelete('cascade');

            $table->string('status')->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
