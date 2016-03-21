<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\WebAtctype;
use App\WebVideo;

class VideoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = '微训视频';
		$type = WebAtctype::where('type',1)
			->where('state',1)
			->pluck('id');
		$carousels_1 = WebVideo::where('state',2)
			->orderBy('created_at','desc')
			->take(1)
			->get();
		foreach ($carousels_1 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 20);
		}
		$carousels_2 = WebVideo::where('state',2)
			->orderBy('created_at','desc')
			->take(1)
			->get();
		foreach ($carousels_2 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 20);
		}
		$carousels_3 = WebVideo::where('state',2)
			->orderBy('created_at','desc')
			->take(1)
			->get();
		foreach ($carousels_3 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 20);
		}

		$text_big = WebVideo::where('state',2)
			->orderBy('created_at','desc')
			->skip(3)
			->take(1)
			->get();
		foreach ($text_big as $news) {
			$news->name = Controller::substr_cut("$news->name" , 30);
			$news->content = Controller::substr_cut("$news->content" , 70);
		}

		$text_small = WebVideo::where('state',2)
			->orderBy('created_at','desc')
			->skip(4)
			->take(4)
			->get();
		$i = 1;
		foreach ($text_small as $news) {
			$news->num = $i++;
			$news->name = Controller::substr_cut("$news->name" , 30);
			$news->content = Controller::substr_cut("$news->content" , 70);
		}


		$tab_1_name = WebAtctype::where('type',1)->where('name','国青')->where('state',1)->pluck('id');
		$tab_1_1 = WebVideo::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('created_at','desc')
			->take(1)
			->get();
		foreach ($tab_1_1 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 30);
			$news->content = Controller::substr_cut("$news->content" , 70);
		}
		$tab_1_2 = WebVideo::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('created_at','desc')
			->skip(1)
			->take(1)
			->get();
		foreach ($tab_1_2 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 30);
			$news->content = Controller::substr_cut("$news->content" , 70);
		}
		$tab_1_3 = WebVideo::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('created_at','desc')
			->skip(2)
			->take(1)
			->get();
		foreach ($tab_1_3 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 17);
		}
		$tab_1_4 = WebVideo::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('created_at','desc')
			->skip(3)
			->take(12)
			->get();
		foreach ($tab_1_4 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 20);
		}
		$tab_1_5 = WebVideo::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('created_at','desc')
			->skip(15)
			->take(2)
			->get();
		$i = 1;
		foreach ($tab_1_5 as $news) {
			$news->num = $i++;
			$news->name = Controller::substr_cut("$news->name" , 10);
		}



		$tab_2_name = WebAtctype::where('type',1)->where('name','国少')->where('state',1)->pluck('id');
		$tab_2_1 = WebVideo::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('created_at','desc')
			->take(1)
			->get();
		foreach ($tab_2_1 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 30);
			$news->content = Controller::substr_cut("$news->content" , 70);
		}
		$tab_2_2 = WebVideo::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('created_at','desc')
			->skip(1)
			->take(1)
			->get();
		foreach ($tab_2_2 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 30);
			$news->content = Controller::substr_cut("$news->content" , 70);
		}
		$tab_2_3 = WebVideo::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('created_at','desc')
			->skip(2)
			->take(1)
			->get();
		foreach ($tab_2_3 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 17);
		}
		$tab_2_4 = WebVideo::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('created_at','desc')
			->skip(3)
			->take(12)
			->get();
		foreach ($tab_2_4 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 20);
		}
		$tab_2_5 = WebVideo::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('created_at','desc')
			->skip(15)
			->take(2)
			->get();
		$i = 1;
		foreach ($tab_2_5 as $news) {
			$news->num = $i++;
			$news->name = Controller::substr_cut("$news->name" , 10);
		}


		$tab_3_name = WebAtctype::where('type',1)->where('name','青训')->where('state',1)->pluck('id');
		$tab_3_1 = WebVideo::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('created_at','desc')
			->take(1)
			->get();
		foreach ($tab_3_1 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 30);
			$news->content = Controller::substr_cut("$news->content" , 70);
		}
		$tab_3_2 = WebVideo::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('created_at','desc')
			->skip(1)
			->take(1)
			->get();
		foreach ($tab_3_2 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 30);
			$news->content = Controller::substr_cut("$news->content" , 70);
		}
		$tab_3_3 = WebVideo::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('created_at','desc')
			->skip(2)
			->take(1)
			->get();
		foreach ($tab_3_3 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 17);
		}
		$tab_3_4 = WebVideo::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('created_at','desc')
			->skip(3)
			->take(12)
			->get();
		foreach ($tab_3_4 as $news) {
			$news->name = Controller::substr_cut("$news->name" , 20);
		}
		$tab_3_5 = WebVideo::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('created_at','desc')
			->skip(15)
			->take(2)
			->get();
		$i = 1;
		foreach ($tab_3_5 as $news) {
			$news->num = $i++;
			$news->name = Controller::substr_cut("$news->name" , 10);
		}
		return view('video', 
			compact('title'
			,'carousels_1'
			,'carousels_2'
			,'carousels_3'
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
