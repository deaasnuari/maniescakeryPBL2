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
    Schema::table('produk', function (Blueprint $table) {
        $table->string('link_instagram')->nullable()->after('gambar');
    });
}

public function down(): void
{
    Schema::table('produk', function (Blueprint $table) {
        $table->dropColumn('link_instagram');
    });
}

};
