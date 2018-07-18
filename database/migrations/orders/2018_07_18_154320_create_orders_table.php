<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 225);
            $table->string('lastName', 225);
            $table->string('email', 225);
            $table->string('city', 225);
            $table->string('state');
            $table->integer('zip');
            $table->integer('good_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('order_status');
            $table->foreign('good_id')->references('id')->on('goods');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
