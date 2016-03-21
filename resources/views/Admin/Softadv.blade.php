@extends('Admin.app')

@section('content')
	<div class="table">
	<br />
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>软文文章管理</caption>
			<tr>
				<td colspan="7">
				<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td width="30%" colspan="8" align="left">
								<input type="button" value="添加" class="button" onclick="link_to('添加软文文章.html')">
							</td>
							<td align="right">
							所属类型：&nbsp;
							<select name="newstype">
								<option value="all">全部</option>
							</select>
							软文状态：&nbsp;
							<select name="newsstate">
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
				<th width="17%">软文标题</th>
				<th width="17%">文章关键词</th>
				<th width="12%">软文作者</th>
				<th width="12%">软文状态</th>
				<th width="12%">创建人</th>
				<th width="12%">创建时间</th>
				<th>操作</th>
			</tr>
			<tr>
				<td>
					sd
				</td>
				<td>
				    dfg
				</td>
				<td>
				    dfg
				</td>
				<td>
				    dfg
				</td>
				<td>
				    dfg
				</td>
				<td>
				    dfg
				</td>
				<td>
					<input type="button"  class="button">
				</td>
			</tr>
		</table>
	</div>
@endsection