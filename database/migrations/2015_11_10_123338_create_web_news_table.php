<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',50);
			$table->string('abstract',200)->nullable();
			$table->string('keywords',100)->nullable();
			$table->tinyInteger('type')->default(0);
			$table->string('source',50);
			$table->string('url',200)->nullable();
			$table->string('author',200)->nullable();
			$table->dateTime('time');
			$table->text('content');
			$table->tinyInteger('state')->default(0);
			$table->tinyInteger('reco_type')->default(0);
			$table->tinyInteger('reco_state')->default(0);
			$table->string('page_url',200)->default(0);
			$table->string('pic_url',200)->nullable();
			$table->integer('count')->default(0);
			$table->integer('creator_id');
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
		Schema::drop('web_news');
	}

}
