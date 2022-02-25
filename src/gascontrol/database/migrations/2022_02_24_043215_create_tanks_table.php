<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('capacity');
            $table->string('existence')->nullable();
            $table->timestamps();

            $table->foreign('idFuel')->references('id')->on('fuels');
            $table->unsignedBigInteger('idFuel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanks');
    }
}
