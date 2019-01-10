<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apd', function (Blueprint $table) {
            $table->char('kode_apd', 6)->primary();
            $table->string('nama_apd', 20);
            $table->integer('jumlah_stok');
            $table->integer('jumlah_tersedia');
            $table->string('kategori', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apd');
    }
}
