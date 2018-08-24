<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin1.1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/static/admin/css/font.css">
	<link rel="stylesheet" href="/static/admin/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="/static/admin/js/layui.all.js"></script>
    <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>
</head>
<body>
    <div class="login-logo"><h1>X-ADMIN V1.1</h1></div>
    <div class="login-box">
        <form class="layui-form layui-form-pane" action="/admin" method="post">
            <h3>登录你的帐号</h3>
            <label class="login-title" for="username">帐号</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="uname" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input">
                </div>
            </div>
            <label class="login-title" for="password">密码</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe82b;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="password" name="upwd" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input">
                </div>
            </div>
             <label class="login-title" for="password">验证码</label>
            <div class="layui-form-item">
                <div class="layui-input-inline login-inline">
                  <input type="text" name="code"  placeholder="请输入你的验证码" autocomplete="off" class="layui-input" style="width:160px;">
                  <!--<img src="/admin/cape" onclick="this.src='/admin/cape?a='+Math.random();" style="margin-left:170px;margin-top:-55px;height:35px;width:120px"/>-->
                </div>
            </div>
            <input type="hidden" value="@if(session()->has('user')) 1 @endif" id="hidd"/>
            <div class="form-actions">
            	{{csrf_field()}}
                <button class="btn btn-warning" lay-submit   type="submit">登录</button> 
                <div class="forgot"><a href="#" class="forgot">忘记帐号或者密码</a></div>     
            </div>
        </form>
    </div>
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
    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form();
              //监听提交
              form.on('submit(login)', function(data){
                layer.msg(JSON.stringify(data.field),function(){
                    location.href='index.html'
                });
                return false;
              });
            });
        })
    </script>
	<script>
		$err=$("#hidd").val();
		if($err==1){
			layer.alert('你已登陆 请勿重复登陆', {
			  skin: 'layui-layer-yellow' //样式类名
			  ,closeBtn: 0
			}, function(){
			  window.location.href = "/admin/index";
			});
		}
	</script>

</body>
</html>