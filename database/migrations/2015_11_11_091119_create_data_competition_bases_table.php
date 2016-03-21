<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataCompetitionBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_competition_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->string('shortname',50)->nullable();
			$table->tinyInteger('type')->default(0);
			$table->text('content');
			$table->tinyInteger('state')->default(0);
			$table->tinyInteger('pub_state')->default(0);
			$table->date('year');
			$table->string('season',10)->nullable();
			$table->tinyInteger('region')->default(0);
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
		Schema::drop('data_competition_bases');
	}

}
