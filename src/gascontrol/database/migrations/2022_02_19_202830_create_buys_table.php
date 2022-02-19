<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('datebuys');
            $table->string('marchamos');
            $table->int('invoiceNumber');
            $table->string('turn');
            //foreign key
            $table->foreign('idprovider')->references('id')->on('provider');
            $table->unsignedBigInteger('idprovider');
            //---------------------------------//
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
        Schema::dropIfExists('buys');
    }
}
