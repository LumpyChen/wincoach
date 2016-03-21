@extends('app')

@section('content')
<link rel="stylesheet" href="css/service-news-content.css">
<!-- service begin -->
	<div class="row" id="service">
		<div class="col-md-8" id="train">
			<h2><b>海外培训</b></h2>
			<i class="train-icon"></i>
			<div id="train-p">
				<ul class="train-p-ul">
					<dl>
						@foreach( $abroad_1 as $abroad )
						<dt><a href="{{ URL('service/'.$abroad->id) }}">{{ $abroad->title }}</a></dt>
						@endforeach
						<dd>
							@foreach( $abroad_2 as $abroad )
							<li>
								<a href="{{ URL('service/'.$abroad->id) }}" target="_blank">{{ $abroad->title }}</a>
							</li>
							@endforeach
						</dd>
					</dl>
				</ul>
				<ul>
					<dl>
						@foreach( $abroad_3 as $abroad )
						<dt><a href="{{ URL('service/'.$abroad->id) }}">{{ $abroad->title }}</a></dt>
						@endforeach
						<dd>
							@foreach( $abroad_4 as $abroad )
							<li>
								<a href="{{ URL('service/'.$abroad->id) }}" target="_blank">{{ $abroad->title }}</a>
							</li>
							@endforeach
						</dd>
					</dl>
				</ul>
			</div>
			@foreach( $abroad_5 as $abroad )
			<div class="service-sec ser-left">
				<h4><b>{{ $abroad->title }}</b></h4>
				<a href="{{ URL('service/'.$abroad->id) }}">
					<img src="{{ $abroad->pic_url }}" alt="">
					<span class="glyphicon glyphicon-play-circle"></span>
				</a>
			</div>
			@endforeach
			<div class="service-list">
				<h3><b>试训</b></h3>
				<i class="service-list-icon"></i>
				<div id="service-list-p">
					<ul>
						<dl class="service-list-p-dl">
							@foreach( $train_1 as $train )
							<dt><a href="{{ URL('service/'.$train->id) }}">$train->title</a></dt>
							@endforeach
							<dd>
								@foreach( $train_2 as $train )
								<li>
									<a href="{{ URL('service/'.$train->id) }}" target="_blank">$train->title</a>
								</li>
								@endforeach
							</dd>
						</dl>
					</ul>
					<ul>
						<dl class="service-list-p-dl">
							@foreach( $train_1 as $train )
							<dt><a href="{{ URL('service/'.$train->id) }}">$train->title</a></dt>
							@endforeach
							<dd>
								@foreach( $train_2 as $train )
								<li>
									<a href="{{ URL('service/'.$train->id) }}" target="_blank">$train->title</a>
								</li>
								@endforeach
							</dd>
						</dl>
					</ul>
				</div>
			</div> 
			<div class="service-list" id="service-list-team">
				<h3><b>团队</b></h3>
				<i class="service-list-icon"></i>
				<div id="service-list-p">
					<ul>
						<dl class="service-list-p-dl">
							@foreach( $team_1 as $team )
							<dt><a href="{{ URL('service/'.$team->id) }}">$team->title</a></dt>
							@endforeach
							<dd>
								@foreach( $team_2 as $team )
								<li>
									<a href="{{ URL('service/'.$team->id) }}" target="_blank">$team->title</a>
								</li>
								@endforeach
							</dd>
						</dl>
					</ul>
					<ul>
						<dl class="service-list-p-dl">
							@foreach( $team_1 as $team )
							<dt><a href="{{ URL('service/'.$team->id) }}">$team->title</a></dt>
							@endforeach
							<dd>
								@foreach( $team_2 as $team )
								<li>
									<a href="{{ URL('service/'.$team->id) }}" target="_blank">$team->title</a>
								</li>
								@endforeach
							</dd>
						</dl>
					</ul>
				</div>
			</div>
			<div class="service-list" id="service-list-summercamp">
				<h3><b>夏令营</b></h3>
				<i class="service-list-icon"></i>
				<div id="service-list-p">
					<ul>
						<dl class="service-list-p-dl">
							@foreach( $summercamp_1 as $summercamp )
							<dt><a href="{{ URL('service/'.$summercamp->id) }}">$summercamp->title</a></dt>
							@endforeach
							<dd>
								@foreach( $summercamp_2 as $summercamp )
								<li>
									<a href="{{ URL('service/'.$summercamp->id) }}" target="_blank">$summercamp->title</a>
								</li>
								@endforeach
							</dd>
						</dl>
					</ul>
					<ul>
						<dl class="service-list-p-dl">
							@foreach( $summercamp_1 as $summercamp )
							<dt><a href="{{ URL('service/'.$summercamp->id) }}">$summercamp->title</a></dt>
							@endforeach
							<dd>
								@foreach( $summercamp_2 as $summercamp )
								<li>
									<a href="{{ URL('service/'.$summercamp->id) }}" target="_blank">$summercamp->title</a>
								</li>
								@endforeach
							</dd>
						</dl>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4" id="display">
			<h2>推荐展示</h2>
			@foreach( $displays as $display )
			<div class="ser-list">
				<img src="{{ $display->pic_url }}" alt="">
				<p><strong><a href="{{ URL('service/'.$display->id) }}"> $display->title </a></strong></p>
				<p><a class="ser-list-a" href="{{ URL('service/'.$display->id) }}">$display->abstract</a></p>
			</div>
			@endforeach
			<h2>相关资讯</h2>
			<ul class="newlist-3">
				<dl>
					<dt></dt>
					<dd>
						@foreach( $news_list as $news )
						<li>
							<a href="{{ URL('article/'.$news->id) }}" target="_blank">$news->title</a>
						</li>
						@endforeach
					</dd>
				</dl>
			</ul>
		</div>
	</div>
<!-- service end -->
@endsection