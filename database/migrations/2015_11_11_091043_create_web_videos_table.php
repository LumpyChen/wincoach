<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_videos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->text('content');
			$table->tinyInteger('api_type')->default(0);
			$table->string('api_vid',20);
			$table->string('keywords',100)->nullable();
			$table->tinyInteger('type')->default(0);
			$table->tinyInteger('state')->default(0);
			$table->string('pic_url',200)->nullable();
			$table->integer('creator_id');
			$table->integer('count')->default(0);
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
		Schema::drop('web_videos');
	}

}
