<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('delivery_orders', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('manager_id')->unsigned();

            $table->integer('product_id')->unsigned();
            $table->integer('amount')->unsigned();

            $table->tinyInteger('status')->unsigned();

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
        Schema::drop('delivery_orders');
	}

}
