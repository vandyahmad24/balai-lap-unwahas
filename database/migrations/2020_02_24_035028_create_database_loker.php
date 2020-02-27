<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseLoker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('perusahaan_id')->nullable()->unsigned();;
            $table->foreign('perusahaan_id')->references('id')->on('perusahaan')->onDelete('restrict');
             $table->string('judul');
            $table->string('job_dec');
            $table->date('end_time');
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
        Schema::dropIfExists('loker');
    }
}
