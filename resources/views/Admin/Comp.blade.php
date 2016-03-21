@extends('Admin.app')

@section('content')
	<div class="table">
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>球队基本信息</caption>
			<tr>
				<td colspan="8">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td width="30%" colspan="7" align="left">
								<input type="button" value="添加赛事" class="button" onclick="link_to('添加赛事.html')">
							</td>
							<td align="right">
							球队类型： &nbsp;
							<select name="comptype">
								<option value="all">全部</option>
							</select>
							球员类别： &nbsp;
							<select name="compstate">
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
				<th width="15%">赛事名称</td>
				<th width="10%">赛事简称</th>
				<th width="10%">赛事类型</th>
				<th width="10%">举办年份</th>
				<th width="10%">赛事状态</th>
				<th width="10%">数据状态</th>
				<th width="16%">备注</th>
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
				<td>
					<input type="button" class="button">
				</td>
			</tr>
		</table>
	</div>
@endsection