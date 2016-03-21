@extends('app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/news-video-aboard-race.css') }}">
<!-- news begin -->
<div id="news">
	<div class="row">
		<div class="news-1">
			<div class="news-sec-left">
				<section class="news-sec1">
					<!-- 轮播（Carousel）开始-->
					<div id="myCarousel-news" class="carousel slide">
						<!-- 轮播（Carousel）指标 -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel-news" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel-news" data-slide-to="1"></li>
							<li data-target="#myCarousel-news" data-slide-to="2"></li>
						</ol>
						<!-- 轮播（Carousel）项目 -->
						<div class="carousel-inner">
							@foreach( $carousels_1 as $news )
							<div class="item active">
								<a href="{{ URL('article/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt="First slide"></a>
								<div class="carousel-caption">{{ $news->name }}</div>
							</div>
							@endforeach
							@foreach( $carousels_2 as $news )
							<div class="item">
								<a href="{{ URL('article/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt="Second slide"></a>
								<div class="carousel-caption">{{ $news->name }}</div>
							</div>
							@endforeach
							@foreach( $carousels_3 as $news )
							<div class="item">
								<a href="{{ URL('article/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt="third slide"></a>
								<div class="carousel-caption">{{ $news->name }}</div>
							</div>
							@endforeach
						</div>
						<!-- 轮播（Carousel）导航 -->
						<a class="carousel-control left" href="#myCarousel-news" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel-news" data-slide="next">&rsaquo;</a>
					</div> 
					<!-- 轮播（Carousel）结束 -->
					<!-- <div class="fv1">
						<a href="">圣杨智力扑点球</a>
					</div> -->
				</section>
				@foreach( $text_big as $news )
				<div class="news-text-big">
					<p><a href="{{ URL('article/'.$news->id) }}">{{ $news->name }}</a></p>
					<span><a href="{{ URL('article/'.$news->id) }}">
						{{ $news->content }}
					</a></span>
					<!-- <div class="link-more"></div> -->
				</div>
				@endforeach
			</div>
			<div class="news-sec-right">
				@foreach( $text_small as $news )
				<section class="news-sec3" id="news-sec3-{{ $news->num }}">
					<img src="{{ URL($news->pic_url) }}" alt="">
					<div class="news-text-small">
						<p><a href="{{ URL('article/'.$news->id) }}">
							{{ $news->name }}
						</a></p>
						<span><a href="{{ URL('article/'.$news->id) }}">
							{{ $news->content }}
						</a></span>
					</div>
					<!-- <div class="link-more"></div> -->
				</section>
				@endforeach
			</div>
		</div>
		<div class="news-2">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading" id="panel-h">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								<strong>国青新闻</strong>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body" id="panel-b">
							<div class="guoqin">
								@foreach( $tab_1_1 as $news )
								<div class="guoqin-xinwen-1">
									<a href="{{ URL('article/'.$news->id) }}">
										<img src="{{ URL($news->pic_url) }}" alt="媒体对象">
									</a>
									<div class="guoqin-tuji"><a href="{{ URL('article/'.$news->id) }}">点击查看高清图集</a></div>
									<div class="guoqin-content">
										<a href="{{ URL('article/'.$news->id) }}">
											<h4 class="guoqin-heading">
												{{ $news->name }}
											</h4>
										</a>
										{{ $news->content }}
									</div>
								</div>
								@endforeach
								@foreach( $tab_1_2 as $news )
								<div class="guoqin-xinwen-2">
									<div class="guoqin-content">
										<a href="{{ URL('article/'.$news->id) }}">
											<h4 class="guoqin-heading">
												{{ $news->name }}
											</h4>
										</a>
										{{ $news->content }}
									</div>
									<a href="{{ URL('article/'.$news->id) }}">
										<img src="{{ URL($news->pic_url) }}" alt="媒体对象">
									</a>
									<div class="guoqin-tuji-2"><a href="{{ URL('article/'.$news->id) }}">点击查看高清图集</a></div>
								</div>
								@endforeach
							</div>
							<ul class="newlist">
								<dl>
									@foreach( $tab_1_3 as $news )
									<dt><a href="{{ URL('article/'.$news->id) }}">{{ $news->name }}</a></dt>
									@endforeach
									<dd>
										@foreach( $tab_1_4 as $news )
										<li>
											<a href="{{ URL('article/'.$news->id) }}" target="_blank">{{ $news->name }}</a>
										</li>
										@endforeach
									</dd>
								</dl>
							</ul>
							<div class="pictures">
								@foreach( $tab_1_5 as $news )
								<div id="pictures-{{ $news->num }}">
									<a href="{{ URL('article/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt=""></a>
									<span class="pictures-span"><a href="{{ URL('article/'.$news->id) }}">{{ $news->name }}</a></span>
									<a href="{{ URL('article/'.$news->id) }}"><span class="glyphicon glyphicon-play-circle"></span></a>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" id="panel-h">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								<strong>国少新闻</strong>
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body" id="panel-b">
							<div class="guoqin">
								@foreach( $tab_2_1 as $news )
								<div class="guoqin-xinwen-1">
									<a href="{{ URL('article/'.$news->id) }}">
										<img src="{{ URL($news->pic_url) }}" alt="媒体对象">
									</a>
									<div class="guoqin-tuji"><a href="{{ URL('article/'.$news->id) }}">点击查看高清图集</a></div>
									<div class="guoqin-content">
										<a href="{{ URL('article/'.$news->id) }}">
											<h4 class="guoqin-heading">
												{{ $news->name }}
											</h4>
										</a>
										{{ $news->content }}
									</div>
								</div>
								@endforeach
								@foreach( $tab_2_2 as $news )
								<div class="guoqin-xinwen-2">
									<div class="guoqin-content">
										<a href="{{ URL('article/'.$news->id) }}">
											<h4 class="guoqin-heading">
												{{ $news->name }}
											</h4>
										</a>
										{{ $news->content }}
									</div>
									<a href="{{ URL('article/'.$news->id) }}">
										<img src="{{ URL($news->pic_url) }}" alt="媒体对象">
									</a>
									<div class="guoqin-tuji-2"><a href="{{ URL('article/'.$news->id) }}">点击查看高清图集</a></div>
								</div>
								@endforeach
							</div>
							<ul class="newlist">
								<dl>
									@foreach( $tab_2_3 as $news )
									<dt><a href="{{ URL('article/'.$news->id) }}">{{ $news->name }}</a></dt>
									@endforeach
									<dd>
										@foreach( $tab_2_4 as $news )
										<li>
											<a href="{{ URL('article/'.$news->id) }}" target="_blank">{{ $news->name }}</a>
										</li>
										@endforeach
									</dd>
								</dl>
							</ul>
							<div class="pictures">
								@foreach( $tab_2_5 as $news )
								<div id="pictures-{{ $news->num }}">
									<a href="{{ URL('article/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt=""></a>
									<span class="pictures-span"><a href="{{ URL('article/'.$news->id) }}">{{ $news->name }}</a></span>
									<a href="{{ URL('article/'.$news->id) }}"><span class="glyphicon glyphicon-play-circle"></span></a>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" id="panel-h">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								<strong>专注青训</strong>
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body" id="panel-b">
							<div class="guoqin">
								@foreach( $tab_3_1 as $news )
								<div class="guoqin-xinwen-1">
									<a href="{{ URL('article/'.$news->id) }}">
										<img src="{{ URL($news->pic_url) }}" alt="媒体对象">
									</a>
									<div class="guoqin-tuji"><a href="{{ URL('article/'.$news->id) }}">点击查看高清图集</a></div>
									<div class="guoqin-content">
										<a href="{{ URL('article/'.$news->id) }}">
											<h4 class="guoqin-heading">
												{{ $news->name }}
											</h4>
										</a>
										{{ $news->content }}
									</div>
								</div>
								@endforeach
								@foreach( $tab_3_2 as $news )
								<div class="guoqin-xinwen-2">
									<div class="guoqin-content">
										<a href="{{ URL('article/'.$news->id) }}">
											<h4 class="guoqin-heading">
												{{ $news->name }}
											</h4>
										</a>
										{{ $news->content }}
									</div>
									<a href="{{ URL('article/'.$news->id) }}">
										<img src="{{ URL($news->pic_url) }}" alt="媒体对象">
									</a>
									<div class="guoqin-tuji-2"><a href="{{ URL('article/'.$news->id) }}">点击查看高清图集</a></div>
								</div>
								@endforeach
							</div>
							<ul class="newlist">
								<dl>
									@foreach( $tab_3_3 as $news )
									<dt><a href="{{ URL('article/'.$news->id) }}">{{ $news->name }}</a></dt>
									@endforeach
									<dd>
										@foreach( $tab_3_4 as $news )
										<li>
											<a href="{{ URL('article/'.$news->id) }}" target="_blank">{{ $news->name }}</a>
										</li>
										@endforeach
									</dd>
								</dl>
							</ul>
							<div class="pictures">
								@foreach( $tab_3_5 as $news )
								<div id="pictures-{{ $news->num }}">
									<a href="{{ URL('article/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt=""></a>
									<span class="pictures-span"><a href="{{ URL('article/'.$news->id) }}">{{ $news->name }}</a></span>
									<a href="{{ URL('article/'.$news->id) }}"><span class="glyphicon glyphicon-play-circle"></span></a>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- news end -->
@endsection