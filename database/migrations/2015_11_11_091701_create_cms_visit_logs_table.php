<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsVisitLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_visit_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ip',20);
			$table->datetime('time');
			$table->string('page',200);
			$table->integer('page_id');
			$table->tinyInteger('page_type')->default(0);
			$table->string('source',200);
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
		Schema::drop('cms_visit_logs');
	}

}
