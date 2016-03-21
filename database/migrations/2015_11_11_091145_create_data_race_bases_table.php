<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRaceBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_race_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('comp_id');
			$table->string('remark',200)->nullable();
			$table->integer('team_home');
			$table->integer('team_away');
			$table->tinyInteger('home_goal')->default(0);
			$table->tinyInteger('away_goal')->default(0);
			$table->tinyInteger('home_score')->default(0);
			$table->tinyInteger('away_score')->default(0);
			$table->datetime('localtime');
			$table->string('localtime_area')->nullable();
			$table->datetime('time');
			$table->tinyInteger('state')->default(0);
			$table->tinyInteger('sequence')->default(0);
			$table->tinyInteger('turn_id')->default(0);
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
		Schema::drop('data_race_bases');
	}

}
