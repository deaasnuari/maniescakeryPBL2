<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::table('slider', function (Blueprint $table) {
        $table->string('gambar')->nullable()->change();
    });
}

public function down()
{
    Schema::table('slider', function (Blueprint $table) {
        $table->string('gambar')->nullable(false)->change();
    });
}

};
