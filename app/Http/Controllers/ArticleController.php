<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\WebNews;
use App\WebAtctype;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( $id )
	{
		$articles = WebNews::find( $id );
		$title = $articles->title;
		$cate = WebAtctype::find( $articles->type );
		$articles->time = date('Y年m月d日 h:i');
		switch ($cate->type) {
			case 1:
				$cate->url = URL('/news');
				$cate->type = '新闻';
				break;
			case 2:
				$cate->url = URL('/softadv');
				$cate->type = '软文';
				break;
			case 3:
				$cate->url = URL('/service');
				$cate->type = '服务产品';
				break;
			default:
				$cate->url = URL('/');
				$cate->type = '分类错误';
				break;
		}
		$xiangguan = WebNews::where('state',2)->where('type',$articles->type)->orderBy('time','desc')->take(3)->get();
		$ser_list = WebNews::where('state',2)->orderBy('time','desc')->take(3)->get();
		$relate_list = WebNews::where('state',2)->where('type',$articles->type)->orderBy('time','desc')->skip(3)->take(10)->get();
		return view( 'article', compact('title','articles','cate','xiangguan','ser_list','relate_list'));
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
