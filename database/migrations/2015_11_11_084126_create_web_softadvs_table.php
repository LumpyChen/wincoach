<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebSoftadvsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_softadvs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',50);
			$table->string('keywords',100)->nullable();
			$table->string('abstract',200)->nullable();
			$table->tinyInteger('type');
			$table->string('author',20)->nullable();
			$table->dateTime('time');
			$table->text('content');
			$table->tinyInteger('state')->default(0);
			$table->string('page_url',200)->nullable();
			$table->string('picurl',200)->nullable();
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
		Schema::drop('web_softadvs');
	}

}
