@extends('Admin.app')

@section('content')
	<div class="table">
	<br />
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>视频列表</caption>
			<tr>
				<td colspan="8">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td width="30%" colspan="7" align="left">
								<input type="button" value="添加" class="button" onclick="link_to('添加视频.html')">
							</td>
							<td align="right">
							视频分类: &nbsp;
							<select name="videotype">
								<option value="all">全部</option>
							</select>
							视频状态：&nbsp;
							<select name="videostate">
								<option value="all">全部</option>
								<option value="0">待审核</option>
								<option value="1">待发布</option>
								<option value="2">已发布</option>
							</select>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" class="button" value="查询">
							</td>
						</tr>
					</table>
				</td>
			</tr>	
			<tr>
				<th width="17%">视频名称</td>
				<th width="15%">视频关键词</th>
				<th width="10%">视频接口</th>
				<th width="10%">视频源ID</th>
				<th width="10%">视频状态</th>
				<th width="12%">创建人</th>
				<th width="12%">创建时间</th>
				<th>操作</th>
			</tr>
			<tr>
				<td>猪与鹤与马</td>
				<td>猪；鹤；马</td>
				<td>郑老板你自己解决</td>
				<td>23333</td>
				<td>已发布</td>
				<td>王导</td>
				<td>昨晚</td>
				<td>
					<input type="button" class="button">
				</td>
			</tr>
		</table>
	</div>
@endsection