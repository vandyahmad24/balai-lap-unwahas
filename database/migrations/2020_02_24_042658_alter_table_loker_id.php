<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableLokerId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lamaran', function (Blueprint $table) {
            $table->unsignedBigInteger('loker_id');
            $table->foreign('loker_id')->references('id')->on('loker');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lamaran', function (Blueprint $table) {
            $table->dropColumn('loker_id');
        });
    }
}
