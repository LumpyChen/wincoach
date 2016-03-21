<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebSrvpdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_srvpds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',100);
			$table->string('keywords',100)->nullable();
			$table->string('abstract',200)->nullable();
			$table->tinyInteger('type')->default(0);
			$table->integer('price');
			$table->date('validate');
			$table->text('content');
			$table->tinyInteger('state')->default(0);
			$table->string('page_url',200)->default(0);
			$table->string('pic_url',200)->nullable;
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
		Schema::drop('web_srvpds');
	}

}
