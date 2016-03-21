@extends('Admin.app')

@section('content')
	<div class="table">
	<br />
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>产品列表</caption>
			<tr>
				<td colspan="8">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td width="30%" colspan="7" align="left">
								<input type="button" value="添加" class="button" onclick="link_to('添加产品.html')">
							</td>
							<td align="right">
							所属栏目: &nbsp;
							<select name="type">
								<option value="all">全部</option>
							</select>
							产品状态：&nbsp;
							<select name="state">
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
				<th width="17%">产品名称</td>
				<th width="15%">产品关键词</th>
				<th width="10%">产品价格</th>
				<th width="10%">产品状态</th>
				<th width="10%">有效期</th>
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