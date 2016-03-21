@extends('Admin.app')

@section('content')
	<div class="table">
	<br />
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>{{ $type }}栏目管理</caption>
			<tr>
				<td colspan="7">
					<a href="{{URL('admin/cate/create/'.$id)}}" target="a"><input type="button" value="添加" class="button" ></a>
				</td>
			</tr>
			<tr>
				<th width="30%">栏目名称</th>
				<th width="15%">排序顺序</th>
				<th width="15%">栏目状态</th>
				<th>操作</th>
			</tr>
			@foreach($cates as $cate)
			<tr>
				<td>
					<input type="checkbox">{{ $cate->name }}
				</td>
				<td>{{ $cate->num }}</td>
				<td>{{ $cate->state }}</td>
				<td align="center">
					{!! $cate->act !!}
				</td>
			</tr>
			@endforeach
			<!-- <tr>
				<td>
					<input type="checkbox">国青
				</td>
				<td>1</td>
				<td>启用</td>
				<td align="center">
					<input type="button" value="修改" class="button">
					&nbsp;
					<input type="button" value="停用" class="button">
				</td>
			</tr>	<tr>
				<td>
					<input type="checkbox">国少
				</td>
				<td>2</td>
				<td>启用</td>
				<td align="center">
					<input type="button" value="修改" class="button" onclick="link_to('修改新闻栏目.html')">
					&nbsp;
					<input type="button" value="停用" class="button">
				</td>
			</tr>	
			<tr>
				<td>
					<input type="checkbox">赛事
				</td>
				<td>3</td>
				<td>启用</td>
				<td align="center">
					<input type="button" value="修改" class="button" onclick="link_to('修改新闻栏目.html')">
					&nbsp;
					<input type="button" value="停用" class="button">
				</td>
			</tr>	
			<tr>
				<td>
					<input type="checkbox">专访
				</td>
				<td>4</td>
				<td>启用</td>
				<td align="center">
					<input type="button" value="修改" class="button" onclick="link_to('修改新闻栏目.html')">
					&nbsp;
					<input type="button" value="停用" class="button">
				</td>
			</tr> -->
		</table>
	</div>
@endsection