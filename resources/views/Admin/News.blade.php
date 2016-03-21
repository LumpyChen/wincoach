@extends('Admin.app')

@section('content')
	<div class="table">
	<br />
		<table cellpadding="0" cellpadding="1" class="table_list">
			<caption>新闻文章管理</caption>
			<tr>
				<td colspan="8">
				<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td width="30%" colspan="8" align="left">
								<input type="button" value="添加" class="button" onclick="link_to('添加新闻文章.html')">
							</td>
							<td align="right">
							所属栏目：&nbsp;
							<select name="videotype">
								<option value="all">全部</option>
							</select>
							新闻状态：&nbsp;
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
				<th width="17%">新闻标题</th>
				<th width="15%">新闻关键词</th>
				<th width="10%">新闻来源</th>
				<th width="10%">新闻状态</th>
				<th width="10%">推荐类型</th>
				<th width="10%">创建人</th>
				<th width="12%">创建时间</th>
				<th>操作</th>
			</tr>
			@foreach( $news as $new )
			<tr>
				<td>{{ $new->title }}</td>
				<td>{{ $new->keywords }}</td>
				<td>{{ $new->source }}</td>
				<td>{{ $new->state }}</td>
				<td>{{ $new->reco_type }}</td>
				<td>{{ $new->creator }}</td>
				<td>{{ $new->create_at }}</td>
				<td>{{ $new->action }}</td>
			</tr>
			@endforeach
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
				    dfg
				</td>
				<td>
					<input type="button"  class="button">
				</td>
			</tr>
		</table>
	</div>
@endsection