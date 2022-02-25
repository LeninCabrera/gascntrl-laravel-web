<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName');
            $table->string('seller');
            $table->string('address');
            $table->string('town');
            $table->integer('conventionalTelephone');
            $table->integer('cellphone');
            $table->integer('rucNumber');
            $table->string('dgiRegistration');
            $table->string('lineBussiness');
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
        Schema::dropIfExists('providers');
    }
}
