<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataShotBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_shot_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('race_id');
			$table->integer('team_id');
			$table->tinyInteger('is_goal')->default(0);
			$table->tinyInteger('player')->default(0);
			$table->tinyInteger('inout')->default(0);
			$table->tinyInteger('type')->default(0);
			$table->tinyInteger('area_type')->default(0);
			$table->tinyInteger('timemin')->default(0);
			$table->tinyInteger('timetype')->default(0);
			$table->tinyInteger('assist_player')->default(0);
			$table->tinyInteger('assist_type')->default(0);
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
		Schema::drop('data_shot_bases');
	}

}
