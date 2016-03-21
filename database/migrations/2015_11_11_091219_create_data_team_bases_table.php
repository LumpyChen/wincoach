<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTeamBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_team_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->string('shortname',50);
			$table->tinyInteger('type')->default(0);
			$table->text('content');
			$table->date('foundtime');
			$table->string('remark')->nullable();
			$table->tinyInteger('state')->default(0);
			$table->string('picurl',200)->nullable();
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
		Schema::drop('data_team_bases');
	}

}
