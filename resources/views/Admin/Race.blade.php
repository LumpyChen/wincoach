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
							所属赛事： &nbsp;
							<select name="compid">
								<option value="all">全部</option>
							</select>
							比赛状态： &nbsp;
							<select name="racestate">
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
				<th width="15%">所属赛事</td>
				<th width="10%">轮次</th>
				<th width="10%">场序</th>
				<th width="10%">主场球队</th>
				<th width="10%">客场球队</th>
				<th width="10%">比赛状态</th>
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