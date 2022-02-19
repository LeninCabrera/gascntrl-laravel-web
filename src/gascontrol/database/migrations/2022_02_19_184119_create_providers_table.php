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
        Schema::create('provider', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName');
            $table->string('contactName');
            $table->string('seller');
            $table->string('seller');
            $table->string('rucNumber');
            $table->string('dgiRegistration');
            $table->string('direction');
            $table->string('town');
            $table->string('municipality');
            $table->string('country');
            $table->string('postalCode');
            $table->integer('conventionalTelephone');
            $table->integer('cellphone');
            $table->string('email');
            $table->string('otherEmail');
            $table->string('lineBussines');
            $table->string('category');
            $table->string('legalStatus');
            $table->string('description');
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
