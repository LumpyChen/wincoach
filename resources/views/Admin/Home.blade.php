<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微训足球后台管理系统</title>
<link type="text/css" rel="stylesheet" href="{{ asset('Admin/css/style.css') }}" />
<script type="text/javascript" src="{{ asset('Admin/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Admin/js/menu.js') }}"></script>
</head>

<body>
<div class="top"></div>
<div id="header">
  <div class="logo">微训足球后台管理系统</div>
  <div class="navigation">
    <ul>
      <li>欢迎您！</li>
      <li><a href="">管理员</a></li>
      <li><a href="">修改密码</a></li>
      <li><a href="">设置</a></li>
      <li><a href="">退出</a></li>
    </ul>
  </div>
</div>
<div id="content">
  <div class="left_menu">
    <ul id="nav_dot">
      <li>
        <h4>基本设置</h4>
        <div class="list-item none">
          <a href="{{ URL('admin/info') }}" target="a">系统信息</a>
          <a href="{{ URL('admin/chpwd') }}" target="a">修改密码</a>
        </div>
      </li>
      <li>
        <h4>系统管理</h4>
        <div class="list-item none">
          <a href="{{ URL('admin/user') }}" target="a">用户管理</a>      
        </div>
      </li>
      <li>
        <h4>新闻管理</h4>
        <div class="list-item none">
          <a href="{{ URL('admin/cate/1') }}" target="a">新闻栏目</a>
          <a href="{{ URL('admin/news') }}" target="a">文章管理</a>
          <a href="{{ URL('admin/news/create') }}" target="a">添加新闻</a>
        </div>
      </li>
      <li>
        <h4>软文管理</h4>
        <div class="list-item none">
          <a href="{{ URL('admin/cate/2') }}" target="a">软文分类</a>
          <a href="{{ URL('admin/softadv') }}" target="a">文章管理</a>
          <a href="{{ URL('admin/softadv/create') }}" target="a">添加软文</a>
        </div>
      </li>
      <li>
        <h4>产品管理</h4>
        <div class="list-item none">
          <a href="{{ URL('admin/cate/3') }}" target="a">产品类型</a>
          <a href="{{ URL('admin/srvpd') }}" target="a">产品列表</a>
          <a href="{{ URL('admin/srvpd/create') }}" target="a">添加产品</a>
        </div>
      </li>
      <li>
        <h4>视频管理</h4>
        <div class="list-item none">
          <a href="{{ URL('admin/cate/4') }}" target="a">视频类型</a>
          <a href="{{ URL('admin/video') }}" target="a">视频列表</a>
          <a href="{{ URL('admin/video/create') }}" target="a">添加视频</a>
        </div>
      </li>
      <li>
        <h4>数据管理</h4>
        <div class="list-item none">
          <a href="{{ URL('admin/team') }}" target="a">球队基本信息</a>
          <a href="{{ URL('admin/player') }}" target="a">球员基本信息</a>
          <a href="{{ URL('admin/competition') }}" target="a">赛事管理</a>
          <a href="{{ URL('admin/race') }}" target="a">比赛数据</a>
        </div>
      </li>
    </ul>
  </div>
  <div class="m-right">
    <iframe frameborder="0" name="a" width="100%" height="100%"></iframe>
  </div>
</div>
<div class="bottom"></div>
<div id="footer">
  <p>
    @.....................................
  </p>
  </div>
<script>navList(12);</script>
</body>
</html>
