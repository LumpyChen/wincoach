<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsSystemBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_system_bases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',50);
			$table->string('val',30)->nullable();
			$table->string('instr',200)->nullable();
			$table->tinyInteger('state')->default(0);
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
		Schema::drop('cms_system_bases');
	}

}
