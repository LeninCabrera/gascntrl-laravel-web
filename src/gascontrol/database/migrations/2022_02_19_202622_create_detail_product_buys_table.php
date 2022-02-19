<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProductBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_product_buys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('price');
            $table->float('amount');
            $table->decimal('totalPrice');
            /*---------------Foreign Key--------------*/
            $table->foreign('idbuy')->references('id')->on('buy');
            $table->unsignedBigInteger('idbuys');

            $table->foreign('idproduct')->references('id')->on('product');
            $table->unsignedBigInteger('idproduct');
            /*----------------------------------------*/
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
        Schema::dropIfExists('detail_product_buys');
    }
}
