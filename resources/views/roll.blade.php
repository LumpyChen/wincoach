@extends('app')

@section('content')
<link rel="stylesheet" href="css/roll.css">
<!-- content begin -->
		<div id="content">
		<table>
			<tbody  id="roll-table-head">
				<tr  class="table-head-tr1">
				    <td>
				    	<h1>体育</h1>
				    	<h3>热点新闻排行</h3>
				    	
				    </td>
			    </tr>
			    <tr  class="table-head-tr2"> 
				    <td>本页面为实时新闻排行榜，显示从当前时间起24小时内体育新闻浏览量最高的前10条排行情况。</td>
			    </tr>
			    <tr class="table-head-tr3">
			    	<td>
			    	    <h2>新闻<span>TOP10</span></h2>
			    	</td>
			    </tr>
			</tbody>
		</table >
			<table id="roll-table-content">
				<colgroup>
				<col id="list-class">
				<col id="list-date">
				<col id="list-content">
			    </colgroup>			
			<tr>
				<th class="th1">序号</th>
				<th class="th2">新闻标题</th>
				<th class="th3">媒体</th>
				<th class="th4">时间</th>
			</tr>
			@foreach( $top_page as $num => $news )
			<tr class="table-content-odd-tr">				
				<td><a href="{{ URL('article/'.$news->id) }}">{{ $news->num }}</a></td>
				<td><a href="{{ URL('article/'.$news->id) }}">{{ $news->title }}</a></td>
				<td><a href="{{ URL('article/'.$news->id) }}">{{ $news->source }}</a></td>
				<td>
					<div class="date">
						<div class="month">{{ $news->month }}</div>
						<div class="day">{{ $news->day }}</div>
					</div>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<!-- content end -->
@endsection