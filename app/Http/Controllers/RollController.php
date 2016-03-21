<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\CmsVisitLog;
use App\WebNews;

class RollController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = '滚动排行';
		$rolls = CmsVisitLog::where('page_type',2)->where('time','>',date('Y-m-d h:i:s',strtotime("1 days ago")))->get();
		$j = 0;
		foreach ($rolls as $roll) {
			if(isset($count["$roll->page_id"])){
				$count["$roll->page_id"] = $count["$roll->page_id"] + 1 ;
			}
			else {
				$count["$roll->page_id"] = 1 ;
				$j++;
			}
		}
		if ( $j >= 10) {
			arsort($count);
			$i = 1;
			foreach ($count as $page_id => $num) {
				$counts[$i] = $page_id;
				$i++;
			}
			for ($i=0; $i < 10; $i++) { 
				$top_page[$i] = WebNews::where('id',$counts[$i])->first();
				$top_page[$i]['num'] = $i+1;
				$top_page[$i]['time'] = time("$top_page[$i]['time']");
				$top_page[$i]['month'] = date('m',$top_page[$i]['time']);
				$top_page[$i]['day'] = date('d',$top_page[$i]['time']);
			}
			//dump($top_page);
		}
		else {
			$top_page = WebNews::where('state',2)->orderBy('time','desc')->take(10)->get();
			$k = 1;
			foreach ($top_page as $news) {
				$news->num = $k++;
				$news->time = time("$news->time");
				$news->month = date('m',$news->time);
				$news->day = date('d',$news->time);
			}
		}
		return view('roll',compact('title','top_page'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
