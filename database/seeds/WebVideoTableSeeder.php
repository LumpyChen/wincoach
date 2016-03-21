<?php

use Illuminate\Database\Seeder;

use App\WebVideo;

class WebVideoTableSeeder extends Seeder {

	public function run()
	{
		DB::table('web_videos')->delete();
		for ($i=0; $i < 1000; $i++) {
			WebVideo::create([
				'name' => '测试视频标题'.$i.'，要长长的，长一点，再长一点，嗯，差不多了',
				'content' => '测试视频摘要'.$i.'为了凑够字数再多写几个字，嗯，再多写几个字，感觉差不多了吧，应该是够了呢。',
				'keywords' => '测试视频关键词'.rand(1,20).'，测试视频关键词'.rand(1,20),
				'api_type' => rand(1,4),
				'api_vid' => rand(1,9999),
				'type' => rand(12,15),
				'pic_url' => 'image/ga.jpg',
				'state' => 2,
				'creator_id' => 1,
				'count' => rand(0,9999),
			]);
		}
	}

}
