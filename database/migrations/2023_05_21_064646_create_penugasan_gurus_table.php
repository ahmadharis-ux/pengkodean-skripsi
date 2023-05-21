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
        Schema::create('penugasan_gurus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_guru')->unsigned();
            $table->foreignId('id_mapel')->unsigned();
            $table->integer('jam_pelajaran');
            $table->foreignId('id_kelas')->unsigned();
            $table->timestamps();

            $table->foreign('id_guru')->references('id')->on('gurus');
            $table->foreign('id_mapel')->references('id')->on('mapels');
            $table->foreign('id_kelas')->references('id')->on('kelas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penugasan_gurus');
    }
};
