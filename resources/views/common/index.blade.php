<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin1.1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/static/admin/css/font.css">
	<link rel="stylesheet" href="/static/admin/css/xadmin.css">
    <link rel="stylesheet" href="/static/admin/css/swiper.min.css">
    <script type="text/javascript" src="/static/admin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="/static/admin/js/layui.all.js"></script>
    <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="./index.html">X-ADMIN V1.1</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">{{session()->get('user')->uname}}</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a href="/admin/alter">个人信息</a></dd>
              <dd><a href="/admin/loginout">切换帐号</a></dd>
              <dd><a href="/admin/loginout">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item"><a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
          <div id="side-nav">
            <ul id="nav">
                <li class="list" current>
                    <a href="./index.html">
                        <i class="iconfont">&#xe761;</i>
                        欢迎页面
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        会员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin/adduser">
                                <i class="iconfont">&#xe6a7;</i>
                                添加用户                
                            </a>
                        </li>
                        <li>
                            <a href="/admin/userlist">
                                <i class="iconfont">&#xe6a7;</i>
                                用户列表            
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        分类管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                    	<li>
                            <a href="/admin/addclass">
                                <i class="iconfont">&#xe6a7;</i>
                                添加分类
                            </a>
                        </li>
                        <li>
                            <a href="/admin/classlist">
                                <i class="iconfont">&#xe6a7;</i>
                                分类列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        商品管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admin/addgood">
                                <i class="iconfont">&#xe6a7;</i>
                                添加商品
                            </a>
                        </li>
                        <li>
                            <a href="/admin/goodlist">
                                <i class="iconfont">&#xe6a7;</i>
                                商品列表
                            </a>
                        </li>
                    </ul>
                </li>
               <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        订单管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admin/orders">
                                <i class="iconfont">&#xe6a7;</i>
                                订单列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统设置
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admin/pwdalter">
                                <i class="iconfont">&#xe6a7;</i>
                                修改密码
                            </a>
                        </li>
                        <li>
                            <a href="/admin/loginout">
                                <i class="iconfont">&#xe6a7;</i>
                                退出登陆
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->

<!-- 背景切换开始 -->
    <div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="/static/admin/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    <!-- 背景切换结束 -->
	@section('content')
	
	@show
</body>
</html>
    