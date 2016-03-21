<?php

use Illuminate\Database\Seeder;

use App\WebSrvpd;

class WebSrvpdTableSeeder extends Seeder {

	public function run()
	{
		DB::table('web_srvpds')->delete();
		for ($i=0; $i < 1000; $i++) {
			WebSrvpd::create([
				'name' => '测试服务标题'.$i.'，要长长的，长一点，再长一点，嗯，差不多了',
				'abstract' => '测试服务摘要'.$i.'为了凑够字数再多写几个字，嗯，再多写几个字，感觉差不多了吧，应该是够了呢。',
				'keywords' => '测试服务关键词'.rand(1,20).'，测试服务关键词'.rand(1,20),
				'type' => rand(6,11),
				'price' => rand(1,20000),
				'validate' => date('Y-m-d h:i:s',time()+(rand(0,100)*24*60*60)),
				'content' => '测试服务正文内容'. $i.'正文嘛，就是要长长的，一定要比标题还要长，还要长，还要长，长到突破天际，长到能够让人看上一眼就不想读，就像虽然你萌根本就看不到这个内容，但是我还是要把它写的长长的。嗯，差不多够长了，好了，那就到这吧，临走之前再打几个字充一下字数。顺便一提，小学的作文要限制字数的时候，我就想这么干，现在终于有机会了，哈哈哈红红火火恍恍惚惚何厚铧。',
				'pic_url' => 'image/ga.jpg',
				'state' => 2,
				'creator_id' => 1,
				'count' => rand(0,9999),
			]);
		}
	}

}
