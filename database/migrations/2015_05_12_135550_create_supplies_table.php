<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('supplies', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('supplier_id')->unsigned();
            $table->integer('manager_id')->unsigned();

            $table->integer('products_id')->unsigned();
            $table->integer('amount')->unsigned();

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
        Schema::drop('supplies');
	}

}
