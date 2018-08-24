<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin1.1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/font.css">
	<link rel="stylesheet" href="./css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <link rel="stylesheet" href="/static/admin/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="/static/admin/js/swiper.jquery.min.js"></script>
    <script src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="./index.html">X-ADMIN V1.1</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">{:session('adminuser.uname')}</a>
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
    <!-- 中部开始 -->
    <style type="text/css">
    	th{
    		width:30%;
    	}
    </style>
        <div class="wrapper">
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/admin/classupdate?cid={$_GET['cid']}" method="post">
            	<table class="layui-table" >
            	<tr>
            		<th style="text-align:right;">类名</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="cname" required="" autocomplete="off" class="layui-input" value="{$cate->cname}">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		
		                    </div>
		                </div>
	                </td>
	            </tr>
	             <tr>
            		<th><input style="width:100px;float:right" type="text" id="L_email" name="catems" required="" value="{$cate->catems}" autocomplete="off" class="layui-input" placeholder="筛选条件"></th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="cate" value="{$cate->cate}" required="" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       	再输入条件时请在条件1后加一个英文状态下的逗号最后也要加比如 条件1,条件2,	
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th><input style="width:100px;float:right" type="text" id="L_email" name="catemss" value="{$cate->catemss}" required="" autocomplete="off" class="layui-input" placeholder="筛选条件2"></th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="cates" value="{$cate->cates}" required="" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		再输入条件时请在条件1后加一个英文状态下的逗号最后也要加比如 条件1,条件2,
		                    </div>
		                </div>
	                </td>
	            </tr>
		        <tr>
		            <td colspan="2" >
		                <div class="layui-form-item" style="margin-left:30%">
		                    <label for="L_repass" class="layui-form-label">
		                    </label>
		                    <button  class="layui-btn" lay-filter="add" lay-submit="">
		                        修改
		                    </button>
		                </div>
		            </td>
		        </tr>
               	
                </table>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>

    {/block}
