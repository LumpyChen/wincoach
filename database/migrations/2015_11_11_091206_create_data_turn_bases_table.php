<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTurnBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_turn_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('comp_id');
			$table->string('name',100)->nullable();
			$table->string('shortname',50)->nullable();
			$table->tinyInteger('type')->default(0);
			$table->string('remark',200)->nullable();
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
		Schema::drop('data_turn_bases');
	}

}
