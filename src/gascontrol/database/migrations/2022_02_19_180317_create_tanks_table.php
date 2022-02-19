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
        Schema::create('tank', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('capacity');
            $table->string('existence');
            $table->string('iddetailproductbuys');
            $table->timestamps();

            $table->foreign('iddetailproductbuys')->references('id')->on('detailproductbuys');
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
