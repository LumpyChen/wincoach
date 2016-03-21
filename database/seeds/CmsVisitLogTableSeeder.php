<?php

use Illuminate\Database\Seeder;

use App\CmsVisitLog;

class CmsVisitLogTableSeeder extends Seeder {

	public function run()
	{
		DB::table('cms_visit_logs')->delete();
		for ($i=0; $i < 10000; $i++) {
			CmsVisitLog::create([
				'ip' => rand(1,999).'.'.rand(1,999).'.'.rand(1,999).'.'.rand(1,999),
				'time' => date('Y-m-d h:i:s',time()),
				'page' => 'url/'.rand(1,999),
				'page_id' => rand(1,50),
				'page_type' => rand(1,7),
				'source' => 'url/'.rand(1,999),
			]);
		}
	}

}
