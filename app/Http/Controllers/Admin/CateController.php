<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\WebAtctype;

use Redirect, Input, Auth;

class CateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		switch ($id) {
			case 1:
				$type = '新闻';
				break;
			case 2:
				$type = '软文';
				break;
			case 3:
				$type = '服务产品';
				break;
			case 4:
				$type = '视频';
				break;
			default:
				$type = '未定义';
				break;
		}
		$cates = WebAtctype::where('type', $id)->orderBy('num')->get();
		foreach ($cates as $cate) {
			switch ($cate['state']) {
				case 1:
					$cate['state'] = '启用';
					$cate['act'] = '<a href="'.URL('admin/cate/setoff/'.$cate->id).'"><input type="button" value="停用" class="button"></a>';
					break;
				case 0:
					$cate['state'] = '停用';
					$cate['act'] = 
						'<a href="'.URL('admin/cate/'.$cate->id.'/edit').'"><input type="button" value="修改" class="button"></a>'.'&nbsp;'.
						'<a href="'.URL('admin/cate/seton/'.$cate->id).'"><input type="button" value="启用" class="button"></a>'.'&nbsp;'.
						'<form action="'.URL('admin/cate/'.$cate->id).'"method="POST" style="display: inline;">
              			<input name="_method" type="hidden" value="DELETE">
              			<input type="hidden" name="_token" value="'.csrf_token().'">
              			<input type="submit" class="button" value="删除"></form>';
					break;
				
				default:
					$cate['state'] = '未知';
					$cate['act'] = '<input type="button" value="修改" class="button">';
					break;
			}
		}
		return view('Admin.Cate.Show',compact('type','id','cates'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$function = '添加';
		switch ($id) {
			case 1:
				$type = '新闻';
				break;
			case 2:
				$type = '软文';
				break;
			case 3:
				$type = '服务产品';
				break;
			case 4:
				$type = '视频';
				break;
			default:
				$type = '未定义';
				break;
		}

		//echo "$id,$type,$function";
		return view('Admin.Cate.Create', compact('function','id','type'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$id = Input::get('id');
		$cate = new WebAtctype;
		$cate->type = Input::get('id');
		$cate->name = Input::get('name');
		$cate->num = Input::get('num');
		if ($cate->save()) {
			return Redirect::to('admin/cate/'."$id");
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}
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
		$function = '修改';
		$cate = WebAtctype::find($id);
		switch ($cate->type) {
			case 1:
				$type = '新闻';
				break;
			case 2:
				$type = '软文';
				break;
			case 3:
				$type = '服务产品';
				break;
			case 4:
				$type = '视频';
				break;
			default:
				$type = '未定义';
				break;
		}
		return view('Admin.Cate.Edit', compact('function','cate','type'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$cate = WebAtctype::find($id);
		$cate->type = Input::get('type');
		$cate->name = Input::get('name');
		$cate->num = Input::get('num');
		if ($cate->save()) {
			return Redirect::to('admin/cate/'.$cate->type);
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败！');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cate = WebAtctype::find($id);
		$type = $cate['type'];
		$cate -> delete();
		return Redirect::to('admin/cate/'."$type");
	}
	public function seton($id)
	{
		$cate = WebAtctype::find($id);
		$cate->state = 1;
		if ($cate->save()) {
			return Redirect::to('admin/cate/'.$cate->type);
		} else {
			return Redirect::back()->withInput()->withErrors('变更失败！');
		}
	}
	public function setoff($id)
	{
		$cate = WebAtctype::find($id);
		$cate->state = 0;
		if ($cate->save()) {
			return Redirect::to('admin/cate/'.$cate->type);
		} else {
			return Redirect::back()->withInput()->withErrors('变更失败！');
		}
	}
}
