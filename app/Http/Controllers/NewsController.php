<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\WebNews;
use App\WebAtctype;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = '微训新闻';
		$carousels_1 = WebNews::where('state',2)
			->orderBy('time','desc')
			->take(1)
			->get();
		foreach ($carousels_1 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 20);
		}
		$carousels_2 = WebNews::where('state',2)
			->orderBy('time','desc')
			->skip(1)
			->take(1)
			->get();
		foreach ($carousels_2 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 20);
		}
		$carousels_3 = WebNews::where('state',2)
			->orderBy('time','desc')
			->skip(2)
			->take(1)
			->get();
		foreach ($carousels_3 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 20);
		}


		$text_big = WebNews::where('state',2)
			->orderBy('time','desc')
			->skip(3)
			->take(1)
			->get();
		foreach ($text_big as $news) {
			$news->title = Controller::substr_cut("$news->title" , 30);
			$news->abstract = Controller::substr_cut("$news->abstract" , 70);
		}

		$text_small = WebNews::where('state',2)
			->orderBy('time','desc')
			->skip(4)
			->take(4)
			->get();
		$i = 1;
		foreach ($text_small as $news) {
			$news->num = $i++;
			$news->title = Controller::substr_cut("$news->title" , 30);
			$news->abstract = Controller::substr_cut("$news->abstract" , 70);
		}


		$tab_1_name = WebAtctype::where('type',1)->where('name','国青')->where('state',1)->pluck('id');
		$tab_1_1 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->take(1)
			->get();
		foreach ($tab_1_1 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 30);
			$news->abstract = Controller::substr_cut("$news->abstract" , 70);
		}
		$tab_1_2 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->skip(1)
			->take(1)
			->get();
		foreach ($tab_1_2 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 30);
			$news->abstract = Controller::substr_cut("$news->abstract" , 70);
		}
		$tab_1_3 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->skip(2)
			->take(1)
			->get();
		foreach ($tab_1_3 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 17);
		}
		$tab_1_4 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->skip(3)
			->take(12)
			->get();
		foreach ($tab_1_4 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 20);
		}
		$tab_1_5 = WebNews::where('state',2)
			->where('type', $tab_1_name )
			->orderBy('time','desc')
			->skip(15)
			->take(2)
			->get();
		$i = 1;
		foreach ($tab_1_5 as $news) {
			$news->num = $i++;
			$news->title = Controller::substr_cut("$news->title" , 10);
		}



		$tab_2_name = WebAtctype::where('type',1)->where('name','国少')->where('state',1)->pluck('id');
		$tab_2_1 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->take(1)
			->get();
		foreach ($tab_2_1 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 30);
			$news->abstract = Controller::substr_cut("$news->abstract" , 70);
		}
		$tab_2_2 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->skip(1)
			->take(1)
			->get();
		foreach ($tab_2_2 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 30);
			$news->abstract = Controller::substr_cut("$news->abstract" , 70);
		}
		$tab_2_3 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->skip(2)
			->take(1)
			->get();
		foreach ($tab_2_3 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 17);
		}
		$tab_2_4 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->skip(3)
			->take(12)
			->get();
		foreach ($tab_2_4 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 20);
		}
		$tab_2_5 = WebNews::where('state',2)
			->where('type', $tab_2_name )
			->orderBy('time','desc')
			->skip(15)
			->take(2)
			->get();
		$i = 1;
		foreach ($tab_2_5 as $news) {
			$news->num = $i++;
			$news->title = Controller::substr_cut("$news->title" , 10);
		}


		$tab_3_name = WebAtctype::where('type',1)->where('name','青训')->where('state',1)->pluck('id');
		$tab_3_1 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->take(1)
			->get();
		foreach ($tab_3_1 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 30);
			$news->abstract = Controller::substr_cut("$news->abstract" , 70);
		}
		$tab_3_2 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->skip(1)
			->take(1)
			->get();
		foreach ($tab_3_2 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 30);
			$news->abstract = Controller::substr_cut("$news->abstract" , 70);
		}
		$tab_3_3 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->skip(2)
			->take(1)
			->get();
		foreach ($tab_3_3 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 17);
		}
		$tab_3_4 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->skip(3)
			->take(12)
			->get();
		foreach ($tab_3_4 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 20);
		}
		$tab_3_5 = WebNews::where('state',2)
			->where('type', $tab_3_name )
			->orderBy('time','desc')
			->skip(15)
			->take(2)
			->get();
		$i = 1;
		foreach ($tab_3_5 as $news) {
			$news->num = $i++;
			$news->title = Controller::substr_cut("$news->title" , 10);
		}

		
		return view('news', 
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
