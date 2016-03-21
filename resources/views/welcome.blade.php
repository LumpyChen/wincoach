@extends('app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
<!-- main begin -->
	<div id="main" style="background:url( {{ asset('image/back.jpg') }} )">
		<div class="containor">
		<!-- 轮播 开始-->
			<div class="sec-Carousel">
				<div id="myCarousel" class="carousel slide">
				<!-- 轮播（Carousel）指标 -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>
					<!-- 轮播（Carousel）项目 -->
					<div class="carousel-inner">
						@foreach( $carousels_1 as $news )
						<div class="item active">
							<img src="{{ URL($news->pic_url) }}" alt="First slide">
							<div class="carousel-caption">{!! $news->title !!}</div>
						</div>
						@endforeach
						@foreach( $carousels_2 as $news )
						<div class="item">
							<img src="{{ URL($news->pic_url) }}"	alt="Second slide">
							<div class="carousel-caption">{!! $news->title !!}</div>
						</div>
						@endforeach
						@foreach( $carousels_3 as $news )
						<div class="item">
							<img src="{{ URL($news->pic_url) }}" alt="Third slide">
							<div class="carousel-caption">{!! $news->title !!}</div>
						</div>
						@endforeach
						@foreach( $carousels_4 as $news )
						<div class="item">
							<img src="{{ URL($news->pic_url) }}" alt="Fourth slide">
							<div class="carousel-caption">{!! $news->title !!}</div>
						</div>
						@endforeach
					</div>
					<!-- 轮播（Carousel）导航 -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div> 
				 <!-- 轮播（Carousel）结束 -->
				<div class="Carousel-text-right">
					<div class="Carousel-right-news-content">
						<!-- <div class="left-news-content-bg right-news-content-bg"></div> -->
						<div class="title-red">
							<a href="#" class="red">赛事新闻</a>
							<a href="{{ URL('news') }}" class="more">更多>></a>	
						</div>
						@foreach( $carousel_rights as $news )
						<div class="date">
							<div class="month">{{ $news->month }}</div>
							<div class="day">{{ $news->day }}</div>
						</div>
						<div class="news">
							<a href="{{ URL('article/'.$news->id) }}" class="summary">{!! $news->title !!}</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- 轮播 结束 -->
			<!-- 留白 -->
			<div class="white">
			</div>
			<!-- 留白 -->
			<!-- Tab1 表栏 开始-->
			<ul id="Tab1" class="nav nav-tabs">
				<li class="active">
					<a href="/demo/bootstrap3-plugin-tab.htm#Abroad" data-toggle="tab">
						<strong>锐腾海外</strong>
					</a>
				</li>
				<li><a href="/demo/bootstrap3-plugin-tab.htm#Today" data-toggle="tab"><strong>今日推荐</strong></a></li>
				<li><a href="/demo/bootstrap3-plugin-tab.htm#Race" data-toggle="tab"><strong>最新比赛</strong></a></li>
				<li><a href="/demo/bootstrap3-plugin-tab.htm#Youth" data-toggle="tab"><strong>关注国青</strong></a></li>
			</ul>
			<!-- Tab1 表栏 结束 -->
			<!-- Tab1 内容 开始 -->
			<div id="TabContent1" class="tab-content">
				<div class="tab-pane fade in active" id="Abroad">
					<div class="tab1-pic-left">
						@foreach( $tab1_abroad_pic_left as $news )
						<div class="pic{{ $news->num }}">
							@if( $news->num == 1 )
							<img src="{{ URL($news->pic_url) }}" width="100%" height="313px" alt="">
							@else
							<img src="{{ URL($news->pic_url) }}" width="100%" height="90px" alt="">
							@endif
							<a href="{{ URL('article/'.$news->id) }}">
							@if( $news->num  ==1 )
								<div class="fv1">
							@else
								<div class="fv2">
							@endif
									{!! $news->title !!}
								</div>
							</a>
						</div>
						@endforeach
					</div>
					<div class="tab1-news-right">
						@foreach( $tab1_abroad_news_right_1 as $news )
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="#" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						<hr style="border:solid 1px #F0F8FF;margin:5px 0px 0px 0px !important;"></hr>
						@endforeach
						@foreach( $tab1_abroad_news_right_2 as $news )
						<div class="media">
							<a class="pull-right" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						<hr style="border:solid 1px #F0F8FF;margin:5px 0px 0px 0px !important;"></hr>
						@endforeach
						@foreach( $tab1_abroad_news_right_3 as $news )
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="#" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						@endforeach
					</div>
				</div>
			
				<div class="tab-pane fade" id="Today">
					<div class="tab1-pic-left">
						@foreach( $tab1_today_pic_left as $news )
						<div class="pic{{ $news->num }}">
							@if( $news->num == 1 )
							<img src="{{ URL($news->pic_url) }}" width="470px" height="313px" alt="">
							@else
							<img src="{{ URL($news->pic_url) }}" width="150px" height="90px" alt="">
							@endif
							<a href="{{ URL('article/'.$news->id) }}">
							@if( $news->num  ==1 )
								<div class="fv1">
							@else
								<div class="fv2">
							@endif
									{!! $news->title !!}
								</div>
							</a>
						</div>
						@endforeach
					</div>
					<div class="tab1-news-right">
						@foreach( $tab1_today_news_right_1 as $news )
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="#" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						<hr style="border:solid 1px #F0F8FF;margin:5px 0px 0px 0px !important;"></hr>
						@endforeach
						@foreach( $tab1_today_news_right_2 as $news )
						<div class="media">
							<a class="pull-right" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						<hr style="border:solid 1px #F0F8FF;margin:5px 0px 0px 0px !important;"></hr>
						@endforeach
						@foreach( $tab1_today_news_right_3 as $news )
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="#" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						@endforeach
					</div>
				</div>
<div class="tab-pane fade" id="Race">
	
					<div class="tab1-section1">
							<div class="game-list">
								@foreach( $races_1 as $race )
									<div class="team-content">
										<a class="boss" data-action="相关比赛" target="_blank" href="{{ URL('race') }}">
											<h3><strong>已结束</strong></h3>
											<div class="team-left">
												<img src="{{ URL($race->home_logo) }}"></img>
												<span>

												{{ URL($race->homg_name) }}

												</span>
											</div>
											<div class="team-score">
												<p class="score-num blue">
													<span>

													{{ $race->home_goal }}

													</span>
													<span>

													-

													</span>
													<span>

													{{ $race->away_goal }}

													</span>
												</p>
												<p class="score-content">
													<span>

													{{ $race->date }}

													</span>
													<span>

													{{ $race->time }}

													</span>
												</p>
											</div>
											<div class="team-right">
												<img src="{{ URL($race->away_logo) }}"></img>
												<span>

												{{ URL($race->away_name) }}

												</span>
											</div>											
										</a>
										<div style="float:left;">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<button class="btn btn-warning" type="submit">视频集锦</button>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<button class="btn btn-warning" type="submit">战报</button>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<button class="btn btn-warning" type="submit">高清图集</button>
											</div>	
										</div>
									@endforeach
									</div>
								</div>
					<div class="tab1-section2">
						<div class="line">
							<h3><strong class="game-pre">赛事预告</strong></h3>
						</div>
						@foreach( $races_2 as $race )
						<div class="game{{ $race->num }}">
							<div class="gamedate">
								<div class="month">{{ $race->month }}</div>
								<div class="day">{{ $race->day }}</div>
							</div>
							<div class="time">
								<b>{{ $race->turn }}</b><br><b>{{ $race->time }}</b>
							</div>
					
							<img src="{{ $race->home_logo }}" width="60" height="60" alt="">
							<span class="game-pk">VS</span>
							<img src="{{ $race->away_logo }}" width="60" height="60" alt="">											
						</div>
						@endforeach
					</div>
				</div>
				<div class="tab-pane fade" id="Youth">
					<div class="tab1-pic-left">
						@foreach( $tab1_youth_pic_left as $news )
						<div class="pic{{ $news->num }}">
							@if( $news->num == 1 )
							<img src="{{ URL($news->pic_url) }}" width="470px" height="313px" alt="">
							@else
							<img src="{{ URL($news->pic_url) }}" width="150px" height="90px" alt="">
							@endif
							<a href="{{ URL('article/'.$news->id) }}">
							@if( $news->num  ==1 )
								<div class="fv1">
							@else
								<div class="fv2">
							@endif
									{!! $news->title !!}
								</div>
							</a>
						</div>
						@endforeach
					</div>
					<div class="tab1-news-right">
						@foreach( $tab1_youth_news_right_1 as $news )
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="#" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						<hr style="border:solid 1px #F0F8FF;margin:5px 0px 0px 0px !important;"></hr>
						@endforeach
						@foreach( $tab1_youth_news_right_2 as $news )
						<div class="media">
							<a class="pull-right" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						<hr style="border:solid 1px #F0F8FF;margin:5px 0px 0px 0px !important;"></hr>
						@endforeach
						@foreach( $tab1_youth_news_right_3 as $news )
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="{{ URL($news->pic_url) }}" style="width:200px; height:128px" alt="媒体对象" />
							</a>
							<div class="media-body">
								<a href="#" class="media-h">
									<h4 class="media-heading">
										{!! $news->title !!}
									</h4>
								</a>
								{!! $news->abstract !!}
							</div>
						</div>
						@endforeach
					</div>
				</div>
				</div>
			
			<!-- Tab1 内容 结束 -->
			<!-- 广告 开始 -->
			<div class="ad">
				<a href="http://reiteng.sinaapp.com/">
					<img src="image/adt.jpg"	alt="">
				</a>
			</div>
			<!-- 广告 结束 -->
			<!-- Tab2 表栏 开始 -->
			
			<ul id="Tab2" class="nav nav-tabs">
				<li class="active">
					<a href="/demo/bootstrap3-plugin-tab.htm#Summercamp" data-toggle="tab">
						<strong>夏令营</strong>
					</a>
				</li>
				<li><a href="/demo/bootstrap3-plugin-tab.htm#Project" data-toggle="tab"><strong>海外项目</strong></a></li>
				<li><a href="/demo/bootstrap3-plugin-tab.htm#Coach" data-toggle="tab"><strong>教练求职</strong></a></li>
			</ul>
			<!-- Tab2 表栏 结束 -->
			<!-- Tab2 内容 开始 -->
			<div id="TabContent2" class="tab-content">
				<div class="tab-pane fade in active" id="Summercamp">
					<div class="tab2-content-right">
						@foreach( $tab2_summercamp as $news )
						<div class="part{{ $news->num }}">
							<a href="{{ URL('service/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt=""></a>
							<div class="text-bottom"><a href="{{ URL('service/'.$news->id) }}">{!! $news->name !!}</a></div>
						</div>
						@endforeach
					</div>
				</div>
				
				<div class="tab-pane fade" id="Project">
					<div class="tab2-content-right">
						@foreach( $tab2_project as $news )
						<div class="part{{ $news->num }}">
							<a href="{{ URL('service/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt=""></a>
							<div class="text-bottom"><a href="{{ URL('service/'.$news->id) }}">{!! $news->name !!}</a></div>
						</div>
						@endforeach
					</div> 
				</div>

				<div class="tab-pane fade" id="Coach">
					<div class="tab2-content-right">
						@foreach( $tab2_coach as $news )
						<div class="part{{ $news->num }}">
							<a href="{{ URL('service/'.$news->id) }}"><img src="{{ URL($news->pic_url) }}" alt=""></a>
							<div class="text-bottom"><a href="{{ URL('service/'.$news->id) }}">{!! $news->name !!}</a></div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- Tab2 内容 结束 -->
		</div>
	</div>
	<!-- main end -->
@endsection