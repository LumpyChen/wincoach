<?php

use Illuminate\Database\Seeder;

use App\WebAtctype;

class WebAtctypeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('web_atctypes')->delete();
		WebAtctype::create(['id' => 1 ,'name' => '国青', 'num' => 1, 'state' => 1, 'type' => 1 ]);
		WebAtctype::create(['id' => 2 ,'name' => '国少', 'num' => 2, 'state' => 1, 'type' => 1 ]);
		WebAtctype::create(['id' => 3 ,'name' => '海外', 'num' => 3, 'state' => 1, 'type' => 1 ]);
		WebAtctype::create(['id' => 4 ,'name' => '青训', 'num' => 4, 'state' => 1, 'type' => 1 ]);
		WebAtctype::create(['id' => 5 ,'name' => '比赛', 'num' => 5, 'state' => 1, 'type' => 1 ]);
		WebAtctype::create(['id' => 6 ,'name' => '海外培训', 'num' => 1, 'state' => 1, 'type' => 3 ]);
		WebAtctype::create(['id' => 7 ,'name' => '试训', 'num' => 2, 'state' => 1, 'type' => 3 ]);
		WebAtctype::create(['id' => 8 ,'name' => '团队', 'num' => 3, 'state' => 1, 'type' => 3 ]);
		WebAtctype::create(['id' => 9 ,'name' => '夏令营', 'num' => 4, 'state' => 1, 'type' => 3 ]);
		WebAtctype::create(['id' => 10 ,'name' => '海外', 'num' => 4, 'state' => 1, 'type' => 3 ]);
		WebAtctype::create(['id' => 11 ,'name' => '教练求职', 'num' => 4, 'state' => 1, 'type' => 3 ]);
		WebAtctype::create(['id' => 12 ,'name' => '国青', 'num' => 1, 'state' => 1, 'type' => 4 ]);
		WebAtctype::create(['id' => 13 ,'name' => '国少', 'num' => 2, 'state' => 1, 'type' => 4 ]);
		WebAtctype::create(['id' => 14 ,'name' => '海外', 'num' => 3, 'state' => 1, 'type' => 4 ]);
		WebAtctype::create(['id' => 15 ,'name' => '青训', 'num' => 4, 'state' => 1, 'type' => 4 ]);
	}

}
