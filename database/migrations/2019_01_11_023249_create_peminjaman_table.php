<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('kode_pinjam');
            $table->char('kode_apd', 6);
            $table->foreign('kode_apd')->references('kode_apd')->on('apd')->onDelete('cascade');
            $table->char('nik', 7);
            $table->foreign('nik')->references('nik')->on('karyawan')->onDelete('cascade');
            $table->string('username', 10);
            $table->foreign('username')->references('username')->on('admin')->onDelete('cascade');
            $table->integer('jumlah_apd');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('status', 20);
            $table->boolean('jenis');
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
        Schema::dropIfExists('peminjaman');
    }
}
