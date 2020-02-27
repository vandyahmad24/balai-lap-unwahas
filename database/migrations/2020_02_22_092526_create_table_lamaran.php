<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLamaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lamaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->unsigned();;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->unsignedBigInteger('perusahaan_id')->nullable()->unsigned();;
            $table->foreign('perusahaan_id')->references('id')->on('perusahaan')->onDelete('restrict');
            $table->string('nim');
            $table->string('no_hp');
            $table->string('upload');
            $table->enum('status',['pending','terima','tolak']);
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
        Schema::dropIfExists('Lamaran');
    }
}
