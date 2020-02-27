<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Perusahaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('deskripsi');
            $table->enum('status',['buka','tutup']);
            $table->string('no_hp');
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
        Schema::dropIfExists('Perusahaan');
    }
}
