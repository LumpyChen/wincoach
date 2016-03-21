@extends('Admin.app')

@section('content')
	<div class="table">
	<br />
	<form action="{{ URL('admin/cate') }}" method="POST">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<input type="hidden" name="id" value="{{ $id }}">
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>{{ $function }}{{ $type }}栏目</caption>
			<tr>
				<td width="50%" align="right">
					栏目类型名
				</td>
				<td>
					<input type="text" name="name" placeholder="请输入栏目类型名">
				</td>
			</tr>
			<tr>
				<td align="right">排序顺序</td>
				<td>
					<input type="text" name="num" placeholder="请输入排序顺序">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" class="button" value="{{ $function }}">
					&nbsp;
					<a href="{{ URL('admin/cate') }}/{{ $id }}"><input type="button" class="button" value="取消"></a>
				</td>
			</tr>
		</table>
	</div>
@endsection