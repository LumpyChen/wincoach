<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRacePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_race_players', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('race_id');
			$table->integer('team_id');
			$table->integer('player_id');
			$table->tinyInteger('player_position')->default(0);
			$table->tinyInteger('player_np')->default(0);
			$table->tinyInteger('is_play')->default(0);
			$table->tinyInteger('playtime')->default(0);
			$table->tinyInteger('ontime')->default(0);
			$table->tinyInteger('yellowcardcnt')->default(0);
			$table->tinyInteger('yellowcard_time')->default(0);
			$table->tinyInteger('redcardcnt')->default(0);
			$table->tinyInteger('redcard_time')->default(0);
			$table->tinyInteger('foulcnt')->default(0);
			$table->tinyInteger('befoulcnt')->default(0);
			$table->tinyInteger('penaltycnt')->default(0);
			$table->tinyInteger('frekickcnt')->default(0);
			$table->tinyInteger('cornerkickcnt')->default(0);
			$table->tinyInteger('tacklecnt')->default(0);
			$table->tinyInteger('tacklesuccnt')->default(0);	
			$table->tinyInteger('attack30cnt')->default(0);
			$table->tinyInteger('attacksuccnt')->default(0);
			$table->tinyInteger('offsidecnt')->default(0);
			$table->tinyInteger('warningcnt')->default(0);
			$table->tinyInteger('Rescuecnt')->default(0);
			$table->tinyInteger('divingcnt')->default(0);
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
		Schema::drop('data_race_players');
	}

}
