<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsRoleBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_role_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',50);
			$table->tinyInteger('state')->default(0);
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
		Schema::drop('cms_role_bases');
	}

}
