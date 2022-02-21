<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hose', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('descrption');
            $table->timestamps();

            $table->foreign('iddispenser')->references('id')->on('dispenser');
            $table->unsignedBigInteger('iddispenser');

            $table->foreign('idtank')->references('id')->on('tank');
            $table->unsignedBigInteger('idtank');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoses');
    }
}
