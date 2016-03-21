<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPlayerBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_player_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',30);
			$table->date('birthday');
			$table->tinyInteger('height')->default(0);
			$table->tinyInteger('weight')->default(0);
			$table->string('country',30)->nullable();
			$table->string('nativeplace',20)->nullable();
			$table->text('content');
			$table->tinyInteger('position')->default(0);
			$table->integer('team_id');
			$table->tinyInteger('no')->default(0);
			$table->string('regeno',20)->nullable();
			$table->string('picurl',200);
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
		Schema::drop('data_player_bases');
	}

}
