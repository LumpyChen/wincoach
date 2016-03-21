@extends('Admin.app')

@section('content')
	<div class="table">
		<br />
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>系统信息</caption>
			<tr>
				<td width="40%">域名</td>
				<td><?php echo $_SERVER['HTTP_HOST'];?></td>
			</tr>
			<tr>
				<td>服务信息</td>
				<td><?php echo PHP_OS;?></td>
			</tr>
			<tr>
				<td>PHP版本</td>
				<td><?php echo PHP_VERSION;?></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<p>©四川锐腾体育文化传媒有限公司</p>
					<p>开发者：<a href="http://www.cxcygzf.cn" target="_blank">创新创业工作坊</a></p>
				</td>
			</tr>
		</table>
	</div>
@endsection