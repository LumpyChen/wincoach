<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\WebNews;
use App\WebAtctype;

class RaceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = '微训比赛';
		$type = WebAtctype::where('type',1)
			->where('name','比赛')
			->where('state',1)
			->pluck('id');
		$carousels = WebNews::where('state',2)
			->where('type', $type)
			->orderBy('time','desc')
			->take(3)
			->get();
		for ($i=0; $i <3; $i++) { 
			$carousels[$i]['num'] = $i+1;
		}
		$text_big = WebNews::where('state',2)
			->where('type', $type)
			->orderBy('time','desc')
			->skip(3)
			->take(2)
			->get();
		$text_small = WebNews::where('state',2)
			->where('type', $type)
			->orderBy('time','desc')
			->skip(5)
			->take(4)
			->get();
		
		for ($i=0; $i <4 ; $i++) { 
			$text_small[$i]['num'] = $i+1;
		}
		


		$tab_1_name = WebAtctype::where('type',1)->where('name','比赛')->where('state',1)->pluck('id');
		$tab_1_1 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->take(1)
			->get();
		$tab_1_2 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->skip(1)
			->take(1)
			->get();
		$tab_1_3 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->skip(2)
			->take(1)
			->get();
		$tab_1_4 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->skip(3)
			->take(12)
			->get();
		$tab_1_5 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->skip(15)
			->take(2)
			->get();
		
		for ($i=0; $i <2 ; $i++) { 
			$tab_1_5[$i]['num'] = $i+1;
		}
		


		$tab_2_name = WebAtctype::where('type',1)->where('name','比赛')->where('state',1)->pluck('id');
		$tab_2_1 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->take(1)
			->get();
		$tab_2_2 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->skip(1)
			->take(1)
			->get();
		$tab_2_3 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->skip(2)
			->take(1)
			->get();
		$tab_2_4 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->skip(3)
			->take(12)
			->get();
		$tab_2_5 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->skip(15)
			->take(2)
			->get();
		
		for ($i=0; $i <2 ; $i++) { 
			$tab_2_5[$i]['num'] = $i+1;
		}
		

		$tab_3_name = WebAtctype::where('type',1)->where('name','比赛')->where('state',1)->pluck('id');
		$tab_3_1 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->take(1)
			->get();
		$tab_3_2 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->skip(1)
			->take(1)
			->get();
		$tab_3_3 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->skip(2)
			->take(1)
			->get();
		$tab_3_4 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->skip(3)
			->take(12)
			->get();
		$tab_3_5 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->skip(15)
			->take(2)
			->get();
		
		for ($i=0; $i <2 ; $i++) { 
			$tab_3_5[$i]['num'] = $i+1;
		}
		
		return view('news', 
			compact('title'
			,'carousels'
			,'text_big'
			,'text_small'
			,'tab_1_1'
			,'tab_1_2'
			,'tab_1_3'
			,'tab_1_4'
			,'tab_1_5'
			,'tab_2_1'
			,'tab_2_2'
			,'tab_2_3'
			,'tab_2_4'
			,'tab_2_5'
			,'tab_3_1'
			,'tab_3_2'
			,'tab_3_3'
			,'tab_3_4'
			,'tab_3_5'
			));
	}

}
