<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alamat');
            $table->string('tgl_lahir');
            $table->string('jurusan');
            $table->string('no_hp');
            $table->enum('jenis_kelamin',['pria','wanita']);
            $table->unsignedBigInteger('user_id')->nullable()->unsigned();;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('Profil');
    }
}
