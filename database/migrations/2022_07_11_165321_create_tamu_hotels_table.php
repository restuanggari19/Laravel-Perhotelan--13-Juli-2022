<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamuHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->string('jenis_kelamin');
            $table->string('nama_kamar');
            $table->integer('no_kamar');
            $table->string('fasilitas');
            $table->bigInteger('no_handphone');
            $table->string('email');
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
        Schema::dropIfExists('tamu_hotels');
    }
}
