<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebAtctypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_atctypes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->integer('num');
			$table->tinyInteger('state')->default(0);
			$table->tinyInteger('type')->default(0);
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
		Schema::drop('web_atctypes');
	}

}
