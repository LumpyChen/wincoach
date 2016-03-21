<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
</head>
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script type="text/javascript" src="{{ asset('Js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Js/slide.js') }}"></script>
<script type="text/javascript" src="{{ asset('Js/carousel.js') }}"></script>
<body>
<!-- file top begin -->
	<!-- logo begin-->
	<div id="logo">
		<div class="logo-containor containor">
			<a href="">
				<img src="{{ asset('image/weixunlogo.png') }}" height="110" width="330" alt="">
			</a>
			<ul>
				<li><a href=""><span class="glyphicon glyphicon-home" ></span><strong>设为首页</strong></a></li>
				<li><a href=""><span class="glyphicon glyphicon-bookmark"></span><strong>设为书签</strong></a></li>
				
				<li><a href="{{ URL('roll') }}"><span class="glyphicon glyphicon-list"></span><strong>滚动排行</strong></a></li>
			</ul>
			<div class="login-right">
				
				<div class="navFind fl" id="navFind" style="display:none">
					<form id="search_form" method="get" action="" target="_blank">
						<input id="keyword" type="text" name="q" value="" class="text" autocomplete="off"/>
						<input type="submit" value=" 搜 索 " id="btnSearch" class="input-2">
						<input type="button" value=" × " class="input-2" onclick="document.getElementById('navFind').style.display='none';document.getElementById('searchBtn').style.display='block';" >
						<div class="clear"></div>
					</form>
				</div>
				<div class="searchBtn" id="searchBtn" href="" style="cursor: pointer;" onclick="document.getElementById('navFind').style.display='block';document.getElementById('searchBtn').style.display='none';"><a><strong class="a-strong">搜索</strong></a></div>
				<!-- <div class="Login fl"><a id="btnSwapLogin" href="login.html"><strong class="a-strong">登录</strong></a></div> -->
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- logo end -->
	<!-- nav begin -->
	<div id="nav">
		<ul id="nav-bar">
			<li><a href="{{ URL('/') }}"><strong>微训首页</strong></a></li>
			<li><a href="{{ URL('news') }}"><strong>新闻</strong></a></li>
			<li><a href="{{ URL('abroad') }}"><strong>海外</strong></a></li>
			<li><a href="{{ URL('video') }}"><strong>视频</strong></a></li>
			<li><a href="{{ URL('race') }}"><strong>赛事关注</strong></a></li>
			<li><a href="{{ URL('data') }}"><strong>数据</strong></a></li>
			<li><a href="{{ URL('service') }}"><strong>产品服务</strong></a></li>
		</ul>
	</div>
	<!-- nav end -->
	<!-- shadow begin -->
	<div id="shadow">
		<div class="containor">
			<div class="angled-135 stripes-left"></div>
			<div class="angled-135 stripes-right"></div>
		</div>	
	</div>
	<!-- shadow end -->
<!-- top file end -->
@yield('content')
<!-- footer file begin -->
	<!-- footer begin -->
	<div id="footer">
		<div class="row">
			<div class="col-md-6">
	            <div class="footer-logo">
			        <img src="{{ asset('image/section-image-1.png') }}" alt="" height="80">
			    </div>
			
		
				<div class="footer-list">
					<p>
					   <span ><span class="glyphicon glyphicon-map-marker"></span><a href="http://j.map.baidu.com/aYkw7" target="_blank">地址:成都市天府软件园D1</a></span>					  
					</p>
					<p>
						 <span><span class="glyphicon glyphicon-earphone"></span>电话：+86 028-85135023</span>&nbsp;&nbsp;&nbsp;&nbsp;	
						 <span><span class="glyphicon glyphicon-leaf"></span><a href="">微信公众号:锐腾_微训足球</a></span>
					</p>
					<P>
						<span><span class="glyphicon glyphicon-envelope"></span><a href="">Email：ceo@reiteng.com</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
						<span><span class="glyphicon glyphicon-globe"></span><a href="">Weibo：锐腾_微训足球</a></span>
					</P>
					<p>
						<span><span class="glyphicon glyphicon-copyright-mark"></span>Copyright © 2015 锐腾体育</span>
						
					</p>
					
					
				</div>
			
			</div>
			<div class="col-md-6">
			   <div class="col-md-6">
				<div  id="footer-part2">
				<p>友情链接：</p>
				<p><a href="">锐腾体育</a></p>
				<p><a href="">中国足球协会</a></p>
				<p><a href="">亚洲足球联合会</a></p>
				<p><a href="">创新创业工作坊</a></p>			
				</div>
				</div>
				<div class="col-md-6">
				<div class="erweima">
					<img src="{{ asset('image/erweima.jpg') }}">
					<p>
						扫码获取更多信息
					</p>
				</div>
				</div>
			</div>
			<!-- <div class="col-md-3" id="footer-part3">  
				<img src="" alt="" id="RSS" width="25px" height="25px">
				<img src="" alt="" id="wechat" width="25px" height="25px">
				<img src="" alt="" id="Account" width="90px" height="90px">
			</div>-->
		</div>
		 
	</div>
	<!-- footer end -->
<!-- footer file end -->
</body>
</html>