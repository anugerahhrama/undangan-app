<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned()->index()->nullable();
            $table->string('hari');
            $table->integer('tanggal');
            $table->string('bulan');
            $table->integer('tahun');
            $table->string('judul_acara');
            $table->bigInteger('id_tema')->unsigned()->index()->nullable();
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->time('jam');
            $table->timestamps();
            $table->bigInteger('id_kategori')->unsigned()->index()->nullable();
            $table->foreign('id_kategori')->references('id')->on('kategoris');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_tema')->references('id')->on('temas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undangans');
    }
};
