<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('product_id')->unsigned();

            $table->integer('customer_id')->unsigned();

            $table->string('address');
            $table->date('delivery_date');

            $table->tinyInteger('status_id')->unsigned();

            $table->float('price');

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
        Schema::drop('orders');
	}

}
