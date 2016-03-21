<?php namespace App\Http\Controllers;

use App\WebNews;
use App\DataRaceBase;
use App\DataTeamBase;
use App\WebAtctype;
use App\DataTurnBase;
use App\WebSrvpd;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
/*
	public function __construct()
	{
		$this->middleware('guest');
	}
*/
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = '微训足球';
		$carousels_1 = WebNews::where('state',2)
			->where('reco_type',2)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(0)
			->take(1)
			->get();
		foreach ($carousels_1 as $news) {
			$news->title = Controller::substr_cut("$news->title" , 20);
		}
		$carousels_2 = WebNews::where('state',2)
			->where('reco_type',2)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(1)
			->take(1)
			->get();
		foreach ($carousels_2 as $news) {
			$news->title = Controller::substr_cut($news->title , 20);
		}

		$carousels_3 = WebNews::where('state',2)
			->where('reco_type',2)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(2)
			->take(1)
			->get();
		foreach ($carousels_3 as $news) {
			$news->title = Controller::substr_cut($news->title , 20);
		}
		$carousels_4 = WebNews::where('state',2)
			->where('reco_type',2)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(3)
			->take(1)
			->get();
		foreach ($carousels_4 as $news) {
			$news->title = Controller::substr_cut($news->title , 20);
		}
		$carousel_rights = WebNews::where('state',2)
			->where('reco_type',1)
			->where('reco_state',1)
			->orderBy('time','desc')
			->take(7)
			->get();
		foreach ($carousel_rights as $right) {
			$right->day = date("d",strtotime($right->time));
			$right->month = date("m",strtotime($right->time));
			$right->title = Controller::substr_cut("$right->title" , 20);
		}


		$cate = WebAtctype::where('type',1)->where('name','海外')->where('state',1)->pluck('id');
		$tab1_abroad_pic_left = WebNews::where('state',2)
			->where('type',$cate)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->take(4)
			->get();
		$i = 1;
		foreach ($tab1_abroad_pic_left as $news) {
			$news->num = $i++;
			$news->title = Controller::substr_cut("$news->title" , 10);
		}
		$tab1_abroad_news_right_1 = WebNews::where('state',2)
			->where('type',$cate)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(4)
			->take(1)
			->get();
		foreach ($tab1_abroad_news_right_1 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}
		$tab1_abroad_news_right_2 = WebNews::where('state',2)
			->where('type',$cate)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(5)
			->take(1)
			->get();
		foreach ($tab1_abroad_news_right_2 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}
		$tab1_abroad_news_right_3 = WebNews::where('state',2)
			->where('type',$cate)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(6)
			->take(1)
			->get();
		foreach ($tab1_abroad_news_right_3 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}



		$tab1_today_pic_left = WebNews::where('state',2)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->take(4)
			->get();
		$i = 1;
		foreach ($tab1_today_pic_left as $news) {
			$news->num = $i++;
			$news->title = Controller::substr_cut("$news->title" , 10);
		}
		$tab1_today_news_right_1 = WebNews::where('state',2)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(4)
			->take(1)
			->get();
		foreach ($tab1_today_news_right_1 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}
		$tab1_today_news_right_2 = WebNews::where('state',2)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(5)
			->take(1)
			->get();
		foreach ($tab1_today_news_right_2 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}
		$tab1_today_news_right_3 = WebNews::where('state',2)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(6)
			->take(1)
			->get();
		foreach ($tab1_today_news_right_3 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}



		$races_1 = DataRaceBase::where('state',2)->take(3)->get();
		$i = 1;
		foreach ($races_1 as $race) {
			$home = DataTeamBase::find($race['home']);
			$away = DataTeamBase::find($race['away']);
			$race->num = $i++;
			$race->date = date("m-d",strtotime($race['time']));
			$race->time = date("h:i",strtotime($race['time']));
			$race->home_name = $home->pluck('name');
			$race->away_name = $away->pluck('name');
			$race->home_logo = $home->pluck('pic_url');
			$race->away_logo = $away->pluck('pic_url');
		}
		$races_2 = DataRaceBase::where('state',1)->take(4)->get();
		$i = 1;
		foreach ($races_2 as $race) {
			$home = DataTeamBase::find($race['home']);
			$away = DataTeamBase::find($race['away']);
			$race->num = $i++;
			$race->month = date("m",strtotime($race['time']));
			$race->day = date("d",strtotime($race['time']));
			$race->time = date("h:i",strtotime($race['time']));
			$race->turn = DataTurnBase::find($race['turn_id'])->pluck('shortname');
			$race->home_logo = DataTeamBase::find($race['home'])->pluck('pic_url');
			$race->away_logo = DataTeamBase::find($race['away'])->pluck('pic_url');
		}




		$cate = WebAtctype::where('type',1)->where('name','国青')->where('state',1)->pluck('id');
		$tab1_youth_pic_left = WebNews::where('state',2)
			->where('type',$cate)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->take(4)
			->get();
		$i = 1;
		foreach ($tab1_youth_pic_left as $news) {
			$news->num = $i++;
			$news->title = Controller::substr_cut("$news->title" , 10);
		}
		$tab1_youth_news_right_1 = WebNews::where('state',2)
			->where('type',$cate)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(4)
			->take(1)
			->get();
		foreach ($tab1_youth_news_right_1 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}
		$tab1_youth_news_right_2 = WebNews::where('state',2)
			->where('type',$cate)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(5)
			->take(1)
			->get();
		foreach ($tab1_youth_news_right_2 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}
		$tab1_youth_news_right_3 = WebNews::where('state',2)
			->where('type',$cate)
			->where('reco_type',0)
			->where('reco_state',1)
			->orderBy('time','desc')
			->skip(6)
			->take(1)
			->get();
		foreach ($tab1_youth_news_right_3 as $news) {
			$news->title = Controller::substr_cut($news->title , 30);
			$news->abstract = Controller::substr_cut($news->abstract , 100);
		}



		$summercamp = WebAtctype::where('type',3)->where('name','夏令营')->where('state',1)->pluck('id');
		$tab2_summercamp = WebSrvpd::where('state',2)
			->where('type',$summercamp)
			->take(4)
			->get();
		$i = 1;
		foreach ($tab2_summercamp as $service) {
			$service->num = $i++;
			$service->name = Controller::substr_cut("$service->name" , 14);

		}
		$project = WebAtctype::where('type',3)->where('name','海外')->where('state',1)->pluck('id');
		$tab2_project = WebSrvpd::where('state',2)
			->where('type',$project)
			->take(4)
			->get();
		$i = 1;
		foreach ($tab2_project as $service) {
			$service->num = $i++;
			$service->name = Controller::substr_cut("$service->name" , 14);

		}
		
		$coach = WebAtctype::where('type',3)->where('name','教练求职')->where('state',1)->pluck('id');
		$tab2_coach = WebSrvpd::where('state',2)
			->where('type',$coach)
			->take(4)
			->get();
		$i = 1;
		foreach ($tab2_coach as $service) {
			$service->num = $i++;
			$service->name = Controller::substr_cut("$service->name" , 14);

		}
		



		return view('welcome',
			compact('title'
			,'carousels_1'
			,'carousels_2'
			,'carousels_3'
			,'carousels_4'
			,'carousel_rights'
			,'tab1_abroad_pic_left'
			,'tab1_abroad_news_right_1'
			,'tab1_abroad_news_right_2'
			,'tab1_abroad_news_right_3'
			,'tab1_today_pic_left'
			,'tab1_today_news_right_1'
			,'tab1_today_news_right_2'
			,'tab1_today_news_right_3'
			,'tab1_youth_pic_left'
			,'tab1_youth_news_right_1'
			,'tab1_youth_news_right_2'
			,'tab1_youth_news_right_3'
			,'races_1'
			,'races_2'
			,'tab2_summercamp'
			,'tab2_project'
			,'tab2_coach'
		));
		
	}
}
