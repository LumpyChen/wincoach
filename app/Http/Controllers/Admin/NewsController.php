<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\WebNews;

use Redirect, Input, Auth;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = WebNews::get();
		foreach ($news as $new) {
			switch ($new['state']) {
				case 0:
					$new['state'] = '待审核';
					break;
				case 1:
					$new['state'] = '已审核';
					break;
				case 2:
					$new['state'] = '发布';
					break;
				default:
					$new['state'] = '未知状态';
					break;
			}
			switch ($new['reco_type']) {
				case 0:
					$new['reco_type'] = '无推荐';
					break;
				case 1:
					$new['reco_type'] = '头条推荐';
					break;
				case 2:
					$new['reco_type'] = '滚动图推荐';
					break;
				default:
					$new['reco_type'] = '未知推荐';
					break;
			}	
		}
		return view('Admin.News', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('Admin.AddNews');
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
