@extends('Admin.app')

@section('content')
<div class="table">
	<br />
	<table cellpadding="0" cellpadding="1" class="table_list">
		<caption>用户管理</caption>
		<tr>	
			<td colspan="7">
				<input type="button" value="添加" class="button" onclick="link_to( {{ URL('admin/user/create') }} )">
			</td>
		</tr>
		<tr>
			<th width="10%">登录名</th>
			<th width="10%">用户姓名</th>
			<th width="20%">用户邮箱</th>
			<th width="20%">用户手机</th>
			<th width="10%">超级用户</th>
			<th width="10%">用户状态</th>
			<th>操作</th>
		</tr>
		<tr>
			<td>
				<input type="checkbox">admin
			</td>
			<td>admin</td>
			<td>admin@admin.com</td>
			<td></td>
			<td>是</td>
			<td>启用</td>
			<td align="center">
				<input type="button" value="修改" class="button" onclick="link_to( {{ URL('admin/user/edit') }} )">
				&nbsp;
				<input type="button" value="删除" class="button" onclick="link_to( {{ URL('admin/user/destroy') }} )">
			</td>
		</tr>
	</table>
</div>
@endsection