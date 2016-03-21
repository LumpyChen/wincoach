<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsUserBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_user_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',50);
			$table->string('login_name',10);
			$table->string('password',100)->nullable();
			$table->string('email',100)->nullable();
			$table->string('mobile',11)->nullable();
			$table->tinyInteger('is_supper')->default(0);
			$table->tinyInteger('user_state')->default(0);
			$table->integer('creator_id');
			$table->string('remark',200)->nullable();
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
		Schema::drop('cms_user_bases');
	}

}
