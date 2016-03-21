<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('WebNewsTableSeeder');
		$this->call('CmsVisitLogTableSeeder');
		$this->call('WebSrvpdTableSeeder');
		$this->call('WebVideoTableSeeder');
		$this->call('WebAtctypeTableSeeder');
	}

}
