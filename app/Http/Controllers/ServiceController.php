<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\WebAtctype;
use App\WebSrvpd;
use App\WebNews;

class ServiceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/**
		 * 提取“海外培训”模块数据
		 *
		 * @return $abroad_(1-5)
		 */
		$title = '产品服务';
		$abroad = WebAtctype::where('type',3)
			->where('name','海外')
			->where('state',1)
			->pluck('id');
		$abroad_1 = WebSrvpd::where('state',2)
			->where('type', $abroad )
			->orderBy('created_at','desc')
			->take(1)
			->get();
		$abroad_2 = WebSrvpd::where('state',2)
			->where('type', $abroad )
			->orderBy('created_at','desc')
			->skip(1)
			->take(6)
			->get();
		$abroad_3 = WebSrvpd::where('state',2)
			->where('type', $abroad )
			->orderBy('created_at','desc')
			->skip(7)
			->take(1)
			->get();
		$abroad_4 = WebSrvpd::where('state',2)
			->where('type', $abroad )
			->orderBy('created_at','desc')
			->skip(8)
			->take(6)
			->get();
		$abroad_5 = WebSrvpd::where('state',2)
			->where('type', $abroad )
			->orderBy('created_at','desc')
			->skip(14)
			->take(2)
			->get();


		/**
		 * 提取“试训”模块数据
		 *
		 * @return $train_(1-5)
		 */
		$train = WebAtctype::where('type',3)
			->where('name','试训')
			->where('state',1)
			->pluck('id');
		$train_1 = WebSrvpd::where('state',2)
			->where('type', $train )
			->orderBy('created_at','desc')
			->take(1)
			->get();
		$train_2 = WebSrvpd::where('state',2)
			->where('type', $train )
			->orderBy('created_at','desc')
			->skip(1)
			->take(6)
			->get();
		$train_3 = WebSrvpd::where('state',2)
			->where('type', $train )
			->orderBy('created_at','desc')
			->skip(7)
			->take(1)
			->get();
		$train_4 = WebSrvpd::where('state',2)
			->where('type', $train )
			->orderBy('created_at','desc')
			->skip(8)
			->take(6)
			->get();


		/**
		 * 提取“团队”模块数据
		 *
		 * @return $team_(1-5)
		 */
		$team = WebAtctype::where('type',3)
			->where('name','团队')
			->where('state',1)
			->pluck('id');
		$team_1 = WebSrvpd::where('state',2)
			->where('type', $team )
			->orderBy('created_at','desc')
			->take(1)
			->get();
		$team_2 = WebSrvpd::where('state',2)
			->where('type', $team )
			->orderBy('created_at','desc')
			->skip(1)
			->take(6)
			->get();
		$team_3 = WebSrvpd::where('state',2)
			->where('type', $team )
			->orderBy('created_at','desc')
			->skip(7)
			->take(1)
			->get();
		$team_4 = WebSrvpd::where('state',2)
			->where('type', $team )
			->orderBy('created_at','desc')
			->skip(8)
			->take(6)
			->get();



		/**
		 * 提取“夏令营”模块数据
		 *
		 * @return $summercamp_(1-5)
		 */
		$summercamp = WebAtctype::where('type',3)
			->where('name','夏令营')
			->where('state',1)
			->pluck('id');
		$summercamp_1 = WebSrvpd::where('state',2)
			->where('type', $summercamp )
			->orderBy('created_at','desc')
			->take(1)
			->get();
		$summercamp_2 = WebSrvpd::where('state',2)
			->where('type', $summercamp )
			->orderBy('created_at','desc')
			->skip(1)
			->take(6)
			->get();
		$summercamp_3 = WebSrvpd::where('state',2)
			->where('type', $summercamp )
			->orderBy('created_at','desc')
			->skip(7)
			->take(1)
			->get();
		$summercamp_4 = WebSrvpd::where('state',2)
			->where('type', $summercamp )
			->orderBy('created_at','desc')
			->skip(8)
			->take(6)
			->get();


		/**
		 * 提取“推荐展示”模块数据
		 *
		 * @return $display
		 */
		$displays = WebSrvpd::where('state',2)
			->orderBy('created_at','desc')
			->take(3)
			->get();



		/**
		 * 提取“相关推荐”模块数据
		 *
		 * @return $news_list
		 */
		$news = WebAtctype::where('type',3)
			->where('name','海外')
			->where('state',1)
			->pluck('id');
		$news_list = WebNews::where('state',2)
			->where('type', $news )
			->orderBy('time','desc')
			->take(16)
			->get();
		return view('service',
			compact('title'
			,'abroad_1'
			,'abroad_2'
			,'abroad_3'
			,'abroad_4'
			,'abroad_5'
			,'train_1'
			,'train_2'
			,'train_3'
			,'train_4'
			,'train_5'
			,'team_1'
			,'team_2'
			,'team_3'
			,'team_4'
			,'team_5'
			,'summercamp_1'
			,'summercamp_2'
			,'summercamp_3'
			,'summercamp_4'
			,'summercamp_5'
			,'displays'
			,'news_list'
			));
	}
}
