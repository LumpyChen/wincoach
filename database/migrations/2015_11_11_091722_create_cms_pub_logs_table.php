<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsPubLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_pub_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('page_id');
			$table->tinyInteger('page_type')->default(0);
			$table->tinyInteger('type')->default(0);
			$table->datetime('star');
			$table->datetime('end');
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
		Schema::drop('cms_pub_logs');
	}

}
