@extends('app')

@section('content')
<link rel="stylesheet" href="{{asset('css/news-content.css')}}">
<link rel="stylesheet" href="{{asset('css/service-news-content.css')}}">
<!-- service begin -->
	<div class="row" id="news-content">
		<div class="col-md-8" id="train-2">
			<div class="locate">
				您现在的位置：
				<a href="{{ URL('/') }}">主页</a> 
				<span class="glyphicon glyphicon-chevron-right"></span>&nbsp;
				<a href="{{ $cate->url }}">{{ $cate->name }}</a> 
				<span class="glyphicon glyphicon-chevron-right"></span>&nbsp;
				正文
			</div>
			<p></p>
				<article>
					<div class="caption">
						<h3><b>{{ $articles->title }}</b></h3>
						<p>
						<span class="times">时间:{{ $articles->time }}</span>
						<span class="auther">来源:{{ $articles->source }}</span>											
						</p>
					</div>
					<p>{{ $articles->content }}
						
					<div class="keywords"><span>本章关键词:</span>{{ $articles->keyworeds }}</div>
					<p class="xiangguan">
					<span class="xiangguan-title">相关:</span>
					@foreach( $xiangguan as $num => $news )
						@if( $num == 0 )
							<span class="xiangguan-span"><a href="{{ URL('article/'.$news->id) }}">{{ $news->title }}</a></span>
						@else
							<p><a class="xiangguan-a" href="{{ URL('article/'.$news->id) }}">{{ $news->title }}</a></p>
						@endif
					@endforeach
					</p>
				</article>
		</div>
		<div class="col-md-4" id="display">
			<h2>推荐展示</h2>
			@foreach( $ser_list as $news )
			<div class="ser-list">
				<img src="{{ asset($news->pic_url) }}"  alt="">
				<p><strong><a href="{{ URL('article/'.$news->id) }}"> {{ $news->title }} </a></strong></p>
				<p><a class="ser-list-a" href="{{ URL('article/'.$news->id) }}">{{ $news->abstract }}</a></p>
			</div>
			@endforeach
			<div class="list">
				<h3>排行</h3>
				<ol type="1">
					@foreach( @relate_list as $num=>$news )
					@if( $num % 2 == 0 )
					<li class="list-odd-li"><a href="{{ URL('article/'.$news->id) }}">{{ $news->title }}</a></li>
					@else
					<li><a href="{{ URL('article/'.$news->id) }}" class="list-even-li">{{ $news->title }}</a></li>
					@endif
				</ol>
			</div>
		</div>
	</div>
	<!-- service end -->
@endsection