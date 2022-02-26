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
            $table->string('seller')->nullable();
            $table->string('address')->nullable();
            $table->string('town')->nullable();
            $table->integer('conventionalTelephone')->nullable();
            $table->integer('cellphone')->nullable();
            $table->integer('rucNumber')->nullable();
            $table->string('dgiRegistration')->nullable();
            $table->string('lineBussiness')->nullable();
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
