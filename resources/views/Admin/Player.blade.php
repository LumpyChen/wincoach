@extends('Admin.app')

@section('content')
	<div class="table">
	<br />
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>球员基本信息</caption>
			<tr>
				<td colspan="10">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td width="30%" colspan="7" align="left">
								<input type="button" value="添加" class="button" onclick="link_to('添加球员.html')">
							</td>
							<td align="right">
							球员姓名： &nbsp;
							<input type="text" name="playername" size="10" value="">
							球员类别： &nbsp;
							<select name="videostate">
								<option value="all">全部</option>
							</select>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" class="button" value="查询">
							</td>
						</tr>
					</table>
				</td>
			</tr>	
			<tr>
				<th width="10%">球员姓名</td>
				<th width="10%">球员身高（cm）</th>
				<th width="10%">球员体重（kg）</th>
				<th width="10%">出生日期</th>
				<th width="10%">国籍</th>
				<th width="10%">籍贯</th>
				<th width="10%">球员类别</th>
				<th width="10%">场上位置</th>
				<th width="15%">球员注册号</th>
				<th>操作</th>
			</tr>
			<tr>
				<td>马小川队</td>
				<td>朱越养的</td>
				<td>宇宙级</td>
				<td>DC2015</td>
				<td>注销</td>
				<td>王导的培养队伍</td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<input type="button" class="button">
				</td>
			</tr>
		</table>
	</div>
@endsection