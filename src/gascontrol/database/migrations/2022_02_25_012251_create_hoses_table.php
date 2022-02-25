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
        Schema::create('hoses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descrption');
            $table->timestamps();

            $table->foreign('idDispenser')->references('id')->on('dispensers');
            $table->unsignedBigInteger('idDispenser');

            $table->foreign('idTank')->references('id')->on('tanks');
            $table->unsignedBigInteger('idTank');
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
