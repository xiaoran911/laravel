<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<script type="text/javascript" async="" src="home/js/mstr.js"></script>
		<script type="text/javascript" async="" src="home/js/mstr_002.js"></script>
		<script type="text/javascript" async="" src="home/js/jquery.js"></script>
		<script type="text/javascript" async="" src="home/js/xmst.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="UTF-8">
		<title>我的购物车-小米商城</title>
		<meta name="viewport" content="width=1226">
		<link rel="shortcut icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
		<link rel="icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="home/css/base.css">
		<link rel="stylesheet" type="text/css" href="home/css/cart.css">
		<script type="text/javascript">
			var _head_over_time = (new Date()).getTime();
		</script>
		<script src="images/userInfoJsonP.html" type="text/javascript" async=""></script>
	</head>

	<body>
		<div class="site-header site-mini-header">
			<div class="container">
				<div class="header-logo">
					<a class="logo ir" href="https://www.mi.com/index.html" title="小米官网" data-stat-id="4eb687314fe6c500" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4eb687314fe6c500', '//www.mi.com/index.html', 'pcpid', '']);">小米官网</a>
				</div>
				<div class="header-title has-more" id="J_miniHeaderTitle">
					<h2>我的购物车</h2>
					<p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
				</div>
				<div class="topbar-info" id="J_userInfo">
					<a class="link" href="https://order.mi.com/site/login?redirectUrl=https://static.mi.com/cart/" data-needlogin="true" data-stat-id="3bb9631650583801" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-3bb9631650583801', '//order.mi.com/site/loginredirectUrl=https://static.mi.com/cart/', 'pcpid', '']);">登录</a><span class="sep">|</span>
					<a class="link" href="https://account.xiaomi.com/pass/register" data-stat-id="197ee56797df8cc3" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-197ee56797df8cc3', 'https://account.xiaomi.com/pass/register', 'pcpid', '']);">注册</a>
				</div>
			</div>
		</div>
		<script>
			var SiteCloseTipShow = 1;
		</script>
		<div class="page-main">

			<div class="container">
				<div class="cart-loading loading hide" id="J_cartLoading">
					<div class="loader"></div>
				</div>
				<div class="cart-empty hide" id="J_cartEmpty">
					<h2>您的购物车还是空的！</h2>
					<p class="login-desc">登录后将显示您之前加入的商品</p>
					<a href="#" class="btn btn-primary btn-login" id="J_loginBtn" data-stat-id="59e2bd53cad630cd" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-59e2bd53cad630cd', '#', 'pcpid', '']);">立即登录</a>
					<a href="https://list.mi.com/0" class="btn btn-primary btn-shoping J_goShoping" data-stat-id="4fa3bed319799708" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4fa3bed319799708', '//list.mi.com/0', 'pcpid', '']);">马上去购物</a>
				</div>
				<div id="J_cartBox" class="">
					<div class="cart-goods-list">
						<div class="list-head clearfix">
							<div class="col col-check"><i class="iconfont icon-checkbox icon-checkbox-selected" id="J_selectAll">√</i>全选</div>
							<div class="col col-img">&nbsp;</div>
							<div class="col col-name">商品名称</div>
							<div class="col col-price">单价</div>
							<div class="col col-num">数量</div>
							<div class="col col-total">小计</div>
							<div class="col col-action">操作</div>
						</div>
						<div class="list-body" id="J_cartListBody">
							<div class="item-box">
								<div class="item-table J_cartGoods" data-info="{ commodity_id:'1181500026', gettype:'buy', itemid:'2181500026_0_buy', num:'1'} ">
									<div class="item-row clearfix">
										<div class="col col-check"> <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2181500026_0_buy" data-status="1">√</i> </div>
										<div class="col col-img">
											<a href="https://item.mi.com/1181500026.html" target="_blank" data-stat-id="58ac02835d444dc0" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-58ac02835d444dc0', '//item.mi.com/1181500026.html', 'pcpid', '']);"> <img alt="" src="images/pms_1524621084.jpg" width="80" height="80"> </a>
										</div>
										<div class="col col-name">
											<div class="tags"> </div>
											<div class="tags"> </div>
											<h3 class="name">  <a href="https://item.mi.com/1181500026.html" target="_blank" data-stat-id="8f053dfb25ab61d9" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-8f053dfb25ab61d9', '//item.mi.com/1181500026.html', 'pcpid', '']);"> 小米6X 全网通版 4GB内存 64GB 流沙金 </a>  </h3> </div>
										<div class="col col-price"> 1399元 </div>
										<div class="col col-num">
											<div class="change-goods-num clearfix J_changeGoodsNum">
												<a href="javascript:void(0)" class="J_minus" data-stat-id="b8c53415587ea578" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-b8c53415587ea578', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> <input tyep="text" name="2181500026_0_buy" value="1" data-num="1" data-buylimit="5" autocomplete="off" class="goods-num J_goodsNum" "=" "> <a href="javascript:void(0) " class="J_plus " data-stat-id="0991cc63f1adb61c " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-0991cc63f1adb61c', 'javascript:void0', 'pcpid', '']); "><i class="iconfont "></i></a>   </div>  </div> <div class="col col-total "> 1399元 <p class="pre-info ">  </p> </div> <div class="col col-action "> <a id="2181500026_0_buy " data-msg="确定删除吗？ " href="javascript:void(0); " title="删除 " class="del J_delGoods " data-stat-id="3146da20760bee17 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-3146da20760bee17', 'javascript:void0', 'pcpid', '']); "><i class="iconfont "></i></a> </div> </div> </div>  <div class="item-sub-box ">  <div class="item-table "> <div class="item-row clearfix "> <div class="col col-img "> <a href="https://item.mi.com/1181100030.html " target="_blank " data-stat-id="0e3de0b0e5691b2a " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-0e3de0b0e5691b2a', '//item.mi.com/1181100030.html', 'pcpid', '']); "> <img alt=" " src="images/pms_1534130429.jpg " width="60 " height="60 "> </a> </div> <div class="col col-name "> <div class="tags "> <span class="tag tag-red ">赠品</span> </div> <h3 class="name "> <a href="https://item.mi.com/1181100030.html " target="_blank " data-stat-id="a3ea6237dbcc8d1b " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-a3ea6237dbcc8d1b', '//item.mi.com/1181100030.html', 'pcpid', '']); ">小米移动吃到饱体验卡 三切</a> </h3>  </div> <div class="col col-price "> </div> <div class="col col-num "> 1 </div> <div class="col col-total "> </div> <div class="col col-action "> </div> </div> </div>  <div class="item-table "> <div class="item-row clearfix "> <div class="col col-img "> <a href="https://item.mi.com/1173000036.html " target="_blank " data-stat-id="d81bc48e86f616a9 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-d81bc48e86f616a9', '//item.mi.com/1173000036.html', 'pcpid', '']); "> <img alt=" " src="images/pms_1501236937.jpg " width="60 " height="60 "> </a> </div> <div class="col col-name "> <div class="tags "> <span class="tag tag-red ">赠品</span> </div> <h3 class="name "> <a href="https://item.mi.com/1173000036.html " target="_blank " data-stat-id="6641d05fca2d5113 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-6641d05fca2d5113', '//item.mi.com/1173000036.html', 'pcpid', '']); ">米粉卡日租卡</a> </h3>  </div> <div class="col col-price "> </div> <div class="col col-num "> 1 </div> <div class="col col-total "> </div> <div class="col col-action "> </div> </div> </div>  <i class="arrow "></i> </div>                              <div class="item-sub-box J_service " data-index="0 " data-multi="true ">                           <div class="extend-buy " data-pindex="0 " data-sindex="0 " data-index="0 "> <i class="iconfont icon-plus "></i>意外保障服务                                  179元   <a href="https://order.mi.com/product/serviceUrl?url=https%3A%2F%2Fcdn.cnbj0.fds.api.mi-img.com%2Fb2c-data-mishop%2F23292dac1b41.html " target="_blank " class="agreement " data-stat-id="2af4ceafc3a9d2fa " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-2af4ceafc3a9d2fa', '//order.mi.com/product/serviceUrlurl=https3A2F2Fcdn.cnbj0.fds.api.mi-img.com2Fb2c-data-mishop2F23292dac1b41.html', 'pcpid', '']); ">了解保障服务 &gt;</a>  </div>   </div>                        </div>      </div>
            </div>
            <!-- 加价购 -->
            <div class="raise-buy-box " id="J_raiseBuyBox "> </div>

            <div class="cart-bar clearfix " id="J_cartBar ">
                <div class="section-left ">
                    <a href="https://list.mi.com/0 " class="back-shopping J_goShoping " data-stat-id="f4ca8c89f9929151 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-f4ca8c89f9929151', '//list.mi.com/0', 'pcpid', '']); ">继续购物</a>
                    <span class="cart-total ">共 <i id="J_cartTotalNum ">3</i> 件商品，已选择 <i id="J_selTotalNum ">3</i> 件</span>
                    <span class="cart-coudan hide " id="J_coudanTip ">
                        ，还需 <i id="J_postFreeBalance ">0.00</i> 元即可免邮费  <a href="javascript:void(0); " id="J_showCoudan " data-stat-id="3f29f4ca4f25c783 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-3f29f4ca4f25c783', 'javascript:void0', 'pcpid', '']); ">立即凑单</a>
                    </span>
                </div>
                <span class="activity-money hide ">
                    活动优惠：减 <i id="J_cartActivityMoney ">0</i> 元
                </span>
                <span class="total-price ">
                    合计：<em id="J_cartTotalPrice ">1399</em>元
                </span>
                <a href="javascript:void(0); " class="btn btn-a btn btn-primary " id="J_goCheckout " data-stat-id="5597ae8d3693f409 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-5597ae8d3693f409', 'javascript:void0', 'pcpid', '']); ">去结算</a>

                <div class="no-select-tip hide " id="J_noSelectTip ">
                    请勾选需要结算的商品
                    <i class="arrow arrow-a "></i>
                    <i class="arrow arrow-b "></i>
                </div>
            </div>
        </div>

        <div class="cart-recommend hide " id="J_historyRecommend "></div>
        <div class="cart-recommend container " id="J_miRecommendBox "><h2 class="xm-recommend-title "><span>买购物车中商品的人还买了</span></h2><div class="xm-recommend ">  <ul class="row clearfix ">   <li class="J_xm-recommend-list span4 ">     <a target="_blank " href="https://www.mi.com/mimobile/ " data-log_code=" " data-stat-method="1_13 " data-stat-index="0 " data-stat-text=" " data-stat-pid="stat_Cart.购物车_0_1_13 " data-stat-aid=" " data-stat-id="+stat_Cart.购物车_0_1_13 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-+stat_Cart.购物车_0_1_13', '//www.mi.com/mimobile/', 'pcpid', '']); "> <img src="images/gouwuche234x300.jpg " srcset="//c1.mifile.cn/f/i/2014/cn/10046/gouwuche!468x600.jpg 2x " alt=" "> </a>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1181400005.html " data-log_code="reccom_Cart_0_1#eid=force_180:0:0:0:0:0:0:0:0:7881&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7881&amp;bid=3038456.1&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="1 " data-stat-text="黑鲨游戏手机 高配版 " target="_blank " data-stat-pid="stat_Cart.购物车_1_1_11 " data-stat-aid="黑鲨游戏手机高配版 " data-stat-id="黑鲨游戏手机高配版+stat_Cart.购物车_1_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-黑鲨游戏手机高配版+stat_Cart.购物车_1_1_11', '//item.mi.com/1181400005.html', 'pcpid', 'reccom_Cart_0_1#eid=force_180:0:0:0:0:0:0:0:0:7881&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7881&amp;bid=3038456.1&amp;page=cartbuy']); "> <img src="images/pms_1524032283.jpg " srcset="//i1.mifile.cn/a1/pms_1524032283.82393376!280x280.jpg 2x " alt="黑鲨游戏手机 高配版 "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1181400005.html " data-log_code="reccom_Cart_0_1#eid=force_180:0:0:0:0:0:0:0:0:7881&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7881&amp;bid=3038456.1&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="1 " target="_blank " data-stat-pid="stat_Cart.购物车_1_1_11 " data-stat-id="null+stat_Cart.购物车_1_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_1_1_11', '//item.mi.com/1181400005.html', 'pcpid', 'reccom_Cart_0_1#eid=force_180:0:0:0:0:0:0:0:0:7881&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7881&amp;bid=3038456.1&amp;page=cartbuy']); "> 黑鲨游戏手机 高配版 </a> </dd> <dd class="xm-recommend-price ">3199元</dd> <dd class="xm-recommend-tips ">   4229人好评    <a href="https://item.mi.com/cart/add/2181400004-0-1 " data-log_code="reccom_Cart_0_1#eid=force_180:0:0:0:0:0:0:0:0:7881&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7881&amp;bid=3038456.1&amp;page=cartbuy " data-stat-gid="2181400004 " data-stat-method="1_11 " data-stat-index="1 " data-stat-text="黑鲨游戏手机 高配版 " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_1_1_11 " data-stat-aid="黑鲨游戏手机高配版 " data-stat-id="黑鲨游戏手机高配版+stat_Cart加购.购物车_1_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-黑鲨游戏手机高配版+stat_Cart加购.购物车_1_1_11', '//item.mi.com/cart/add/2181400004-0-1', 'pcpid', 'reccom_Cart_0_1#eid=force_180:0:0:0:0:0:0:0:0:7881&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7881&amp;bid=3038456.1&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1182800001.html " data-log_code="reccom_Cart_0_2#eid=force_180:0:0:0:0:0:0:0:0:8586&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8586&amp;bid=3038456.2&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="2 " data-stat-text="红米6A 全网通版 3GB内存 32GB " target="_blank " data-stat-pid="stat_Cart.购物车_2_1_11 " data-stat-aid="红米6A全网通版3GB内存32GB " data-stat-id="红米6A全网通版3GB内存32GB+stat_Cart.购物车_2_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-红米6A全网通版3GB内存32GB+stat_Cart.购物车_2_1_11', '//item.mi.com/1182800001.html', 'pcpid', 'reccom_Cart_0_2#eid=force_180:0:0:0:0:0:0:0:0:8586&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8586&amp;bid=3038456.2&amp;page=cartbuy']); "> <img src="images/pms_1531116730.jpg " srcset="//i1.mifile.cn/a1/pms_1531116730.76137577!280x280.jpg 2x " alt="红米6A 全网通版 3GB内存 32GB "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1182800001.html " data-log_code="reccom_Cart_0_2#eid=force_180:0:0:0:0:0:0:0:0:8586&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8586&amp;bid=3038456.2&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="2 " target="_blank " data-stat-pid="stat_Cart.购物车_2_1_11 " data-stat-id="null+stat_Cart.购物车_2_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_2_1_11', '//item.mi.com/1182800001.html', 'pcpid', 'reccom_Cart_0_2#eid=force_180:0:0:0:0:0:0:0:0:8586&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8586&amp;bid=3038456.2&amp;page=cartbuy']); "> 红米6A 全网通版 3GB内存 32GB </a> </dd> <dd class="xm-recommend-price ">669元</dd> <dd class="xm-recommend-tips ">   761人好评    <a href="https://item.mi.com/cart/add/2182800001-0-1 " data-log_code="reccom_Cart_0_2#eid=force_180:0:0:0:0:0:0:0:0:8586&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8586&amp;bid=3038456.2&amp;page=cartbuy " data-stat-gid="2182800001 " data-stat-method="1_11 " data-stat-index="2 " data-stat-text="红米6A 全网通版 3GB内存 32GB " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_2_1_11 " data-stat-aid="红米6A全网通版3GB内存32GB " data-stat-id="红米6A全网通版3GB内存32GB+stat_Cart加购.购物车_2_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-红米6A全网通版3GB内存32GB+stat_Cart加购.购物车_2_1_11', '//item.mi.com/cart/add/2182800001-0-1', 'pcpid', 'reccom_Cart_0_2#eid=force_180:0:0:0:0:0:0:0:0:8586&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8586&amp;bid=3038456.2&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1182100062.html " data-log_code="reccom_Cart_0_3#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8154&amp;bid=3038456.3&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="3 " data-stat-text="小米6X 全网通版 4GB内存 32GB " target="_blank " data-stat-pid="stat_Cart.购物车_3_1_11 " data-stat-aid="小米6X全网通版4GB内存32GB " data-stat-id="小米6X全网通版4GB内存32GB+stat_Cart.购物车_3_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米6X全网通版4GB内存32GB+stat_Cart.购物车_3_1_11', '//item.mi.com/1182100062.html', 'pcpid', 'reccom_Cart_0_3#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8154&amp;bid=3038456.3&amp;page=cartbuy']); "> <img src="images/pms_1527144856.jpg " srcset="//i1.mifile.cn/a1/pms_1527144856.99441961!280x280.jpg 2x " alt="小米6X 全网通版 4GB内存 32GB "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1182100062.html " data-log_code="reccom_Cart_0_3#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8154&amp;bid=3038456.3&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="3 " target="_blank " data-stat-pid="stat_Cart.购物车_3_1_11 " data-stat-id="null+stat_Cart.购物车_3_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_3_1_11', '//item.mi.com/1182100062.html', 'pcpid', 'reccom_Cart_0_3#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8154&amp;bid=3038456.3&amp;page=cartbuy']); "> 小米6X 全网通版 4GB内存 32GB </a> </dd> <dd class="xm-recommend-price ">1299元</dd> <dd class="xm-recommend-tips ">   3424人好评    <a href="https://item.mi.com/cart/add/2182100062-0-1 " data-log_code="reccom_Cart_0_3#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8154&amp;bid=3038456.3&amp;page=cartbuy " data-stat-gid="2182100062 " data-stat-method="1_11 " data-stat-index="3 " data-stat-text="小米6X 全网通版 4GB内存 32GB " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_3_1_11 " data-stat-aid="小米6X全网通版4GB内存32GB " data-stat-id="小米6X全网通版4GB内存32GB+stat_Cart加购.购物车_3_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米6X全网通版4GB内存32GB+stat_Cart加购.购物车_3_1_11', '//item.mi.com/cart/add/2182100062-0-1', 'pcpid', 'reccom_Cart_0_3#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8154&amp;bid=3038456.3&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1171800017.html " data-log_code="reccom_Cart_0_4#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038456.4&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="4 " data-stat-text="小米Max 2 全网通版 4GB内存 " target="_blank " data-stat-pid="stat_Cart.购物车_4_1_11 " data-stat-aid="小米Max2全网通版4GB内存 " data-stat-id="小米Max2全网通版4GB内存+stat_Cart.购物车_4_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米Max2全网通版4GB内存+stat_Cart.购物车_4_1_11', '//item.mi.com/1171800017.html', 'pcpid', 'reccom_Cart_0_4#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038456.4&amp;page=cartbuy']); "> <img src="images/pms_1508855689.jpg " srcset="//i1.mifile.cn/a1/pms_1508855689.04744020!280x280.jpg 2x " alt="小米Max 2 全网通版 4GB内存 "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1171800017.html " data-log_code="reccom_Cart_0_4#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038456.4&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="4 " target="_blank " data-stat-pid="stat_Cart.购物车_4_1_11 " data-stat-id="null+stat_Cart.购物车_4_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_4_1_11', '//item.mi.com/1171800017.html', 'pcpid', 'reccom_Cart_0_4#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038456.4&amp;page=cartbuy']); "> 小米Max 2 全网通版 4GB内存 </a> </dd> <dd class="xm-recommend-price ">1199元</dd> <dd class="xm-recommend-tips ">   4.3万人好评    <a href="https://item.mi.com/cart/add/2171800013-0-1 " data-log_code="reccom_Cart_0_4#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038456.4&amp;page=cartbuy " data-stat-gid="2171800013 " data-stat-method="1_11 " data-stat-index="4 " data-stat-text="小米Max 2 全网通版 4GB内存 " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_4_1_11 " data-stat-aid="小米Max2全网通版4GB内存 " data-stat-id="小米Max2全网通版4GB内存+stat_Cart加购.购物车_4_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米Max2全网通版4GB内存+stat_Cart加购.购物车_4_1_11', '//item.mi.com/cart/add/2171800013-0-1', 'pcpid', 'reccom_Cart_0_4#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5780&amp;bid=3038456.4&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1181600007.html " data-log_code="reccom_Cart_0_5#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7909&amp;bid=3038456.5&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="5 " data-stat-text="小米6X 标准高透贴膜 " target="_blank " data-stat-pid="stat_Cart.购物车_5_1_11 " data-stat-aid="小米6X标准高透贴膜 " data-stat-id="小米6X标准高透贴膜+stat_Cart.购物车_5_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米6X标准高透贴膜+stat_Cart.购物车_5_1_11', '//item.mi.com/1181600007.html', 'pcpid', 'reccom_Cart_0_5#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7909&amp;bid=3038456.5&amp;page=cartbuy']); "> <img src="images/pms_1524466931.jpg " srcset="//i1.mifile.cn/a1/pms_1524466931.58435208!280x280.jpg 2x " alt="小米6X 标准高透贴膜 "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1181600007.html " data-log_code="reccom_Cart_0_5#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7909&amp;bid=3038456.5&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="5 " target="_blank " data-stat-pid="stat_Cart.购物车_5_1_11 " data-stat-id="null+stat_Cart.购物车_5_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_5_1_11', '//item.mi.com/1181600007.html', 'pcpid', 'reccom_Cart_0_5#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7909&amp;bid=3038456.5&amp;page=cartbuy']); "> 小米6X 标准高透贴膜 </a> </dd> <dd class="xm-recommend-price ">19元</dd> <dd class="xm-recommend-tips ">   927人好评    <a href="https://item.mi.com/cart/add/2181600006-0-1 " data-log_code="reccom_Cart_0_5#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7909&amp;bid=3038456.5&amp;page=cartbuy " data-stat-gid="2181600006 " data-stat-method="1_11 " data-stat-index="5 " data-stat-text="小米6X 标准高透贴膜 " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_5_1_11 " data-stat-aid="小米6X标准高透贴膜 " data-stat-id="小米6X标准高透贴膜+stat_Cart加购.购物车_5_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米6X标准高透贴膜+stat_Cart加购.购物车_5_1_11', '//item.mi.com/cart/add/2181600006-0-1', 'pcpid', 'reccom_Cart_0_5#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7909&amp;bid=3038456.5&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1181600008.html " data-log_code="reccom_Cart_0_6#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7910&amp;bid=3038456.6&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="6 " data-stat-text="小米6X 极简保护壳 " target="_blank " data-stat-pid="stat_Cart.购物车_6_1_11 " data-stat-aid="小米6X极简保护壳 " data-stat-id="小米6X极简保护壳+stat_Cart.购物车_6_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米6X极简保护壳+stat_Cart.购物车_6_1_11', '//item.mi.com/1181600008.html', 'pcpid', 'reccom_Cart_0_6#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7910&amp;bid=3038456.6&amp;page=cartbuy']); "> <img src="images/pms_1524466977.jpg " srcset="//i1.mifile.cn/a1/pms_1524466977.94886383!280x280.jpg 2x " alt="小米6X 极简保护壳 "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1181600008.html " data-log_code="reccom_Cart_0_6#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7910&amp;bid=3038456.6&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="6 " target="_blank " data-stat-pid="stat_Cart.购物车_6_1_11 " data-stat-id="null+stat_Cart.购物车_6_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_6_1_11', '//item.mi.com/1181600008.html', 'pcpid', 'reccom_Cart_0_6#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7910&amp;bid=3038456.6&amp;page=cartbuy']); "> 小米6X 极简保护壳 </a> </dd> <dd class="xm-recommend-price ">29元</dd> <dd class="xm-recommend-tips ">   858人好评    <a href="https://item.mi.com/cart/add/2181600007-0-1 " data-log_code="reccom_Cart_0_6#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7910&amp;bid=3038456.6&amp;page=cartbuy " data-stat-gid="2181600007 " data-stat-method="1_11 " data-stat-index="6 " data-stat-text="小米6X 极简保护壳 " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_6_1_11 " data-stat-aid="小米6X极简保护壳 " data-stat-id="小米6X极简保护壳+stat_Cart加购.购物车_6_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米6X极简保护壳+stat_Cart加购.购物车_6_1_11', '//item.mi.com/cart/add/2181600007-0-1', 'pcpid', 'reccom_Cart_0_6#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7910&amp;bid=3038456.6&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1182100049.html " data-log_code="reccom_Cart_0_7#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8151&amp;bid=3038456.7&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="7 " data-stat-text="小米8 SE 全网通版 4GB内存 64GB " target="_blank " data-stat-pid="stat_Cart.购物车_7_1_11 " data-stat-aid="小米8SE全网通版4GB内存64GB " data-stat-id="小米8SE全网通版4GB内存64GB+stat_Cart.购物车_7_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米8SE全网通版4GB内存64GB+stat_Cart.购物车_7_1_11', '//item.mi.com/1182100049.html', 'pcpid', 'reccom_Cart_0_7#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8151&amp;bid=3038456.7&amp;page=cartbuy']); "> <img src="images/pms_1527684990.jpg " srcset="//i1.mifile.cn/a1/pms_1527684990.93616987!280x280.jpg 2x " alt="小米8 SE 全网通版 4GB内存 64GB "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1182100049.html " data-log_code="reccom_Cart_0_7#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8151&amp;bid=3038456.7&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="7 " target="_blank " data-stat-pid="stat_Cart.购物车_7_1_11 " data-stat-id="null+stat_Cart.购物车_7_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_7_1_11', '//item.mi.com/1182100049.html', 'pcpid', 'reccom_Cart_0_7#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8151&amp;bid=3038456.7&amp;page=cartbuy']); "> 小米8 SE 全网通版 4GB内存 64GB </a> </dd> <dd class="xm-recommend-price ">1799元</dd> <dd class="xm-recommend-tips ">   3252人好评    <a href="https://item.mi.com/cart/add/2182100049-0-1 " data-log_code="reccom_Cart_0_7#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8151&amp;bid=3038456.7&amp;page=cartbuy " data-stat-gid="2182100049 " data-stat-method="1_11 " data-stat-index="7 " data-stat-text="小米8 SE 全网通版 4GB内存 64GB " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_7_1_11 " data-stat-aid="小米8SE全网通版4GB内存64GB " data-stat-id="小米8SE全网通版4GB内存64GB+stat_Cart加购.购物车_7_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米8SE全网通版4GB内存64GB+stat_Cart加购.购物车_7_1_11', '//item.mi.com/cart/add/2182100049-0-1', 'pcpid', 'reccom_Cart_0_7#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8151&amp;bid=3038456.7&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1165100001.html " data-log_code="reccom_Cart_0_8#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038456.8&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="8 " data-stat-text="小米活塞耳机 清新版 " target="_blank " data-stat-pid="stat_Cart.购物车_8_1_11 " data-stat-aid="小米活塞耳机清新版 " data-stat-id="小米活塞耳机清新版+stat_Cart.购物车_8_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米活塞耳机清新版+stat_Cart.购物车_8_1_11', '//item.mi.com/1165100001.html', 'pcpid', 'reccom_Cart_0_8#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038456.8&amp;page=cartbuy']); "> <img src="images/pms_1482321199.jpg " srcset="//i1.mifile.cn/a1/pms_1482321199.12589253!280x280.jpg 2x " alt="小米活塞耳机 清新版 "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1165100001.html " data-log_code="reccom_Cart_0_8#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038456.8&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="8 " target="_blank " data-stat-pid="stat_Cart.购物车_8_1_11 " data-stat-id="null+stat_Cart.购物车_8_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_8_1_11', '//item.mi.com/1165100001.html', 'pcpid', 'reccom_Cart_0_8#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038456.8&amp;page=cartbuy']); "> 小米活塞耳机 清新版 </a> </dd> <dd class="xm-recommend-price ">29元</dd> <dd class="xm-recommend-tips ">   11.1万人好评    <a href="https://item.mi.com/cart/add/2165100001-0-1 " data-log_code="reccom_Cart_0_8#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038456.8&amp;page=cartbuy " data-stat-gid="2165100001 " data-stat-method="1_11 " data-stat-index="8 " data-stat-text="小米活塞耳机 清新版 " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_8_1_11 " data-stat-aid="小米活塞耳机清新版 " data-stat-id="小米活塞耳机清新版+stat_Cart加购.购物车_8_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-小米活塞耳机清新版+stat_Cart加购.购物车_8_1_11', '//item.mi.com/cart/add/2165100001-0-1', 'pcpid', 'reccom_Cart_0_8#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5059&amp;bid=3038456.8&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li>  <li class="J_xm-recommend-list span4 ">    <dl> <dt> <a href="https://item.mi.com/1174400055.html " data-log_code="reccom_Cart_0_9#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7243&amp;bid=3038456.9&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="9 " data-stat-text="8H蝶形护颈记忆绵枕 " target="_blank " data-stat-pid="stat_Cart.购物车_9_1_11 " data-stat-aid="8H蝶形护颈记忆绵枕 " data-stat-id="8H蝶形护颈记忆绵枕+stat_Cart.购物车_9_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-8H蝶形护颈记忆绵枕+stat_Cart.购物车_9_1_11', '//item.mi.com/1174400055.html', 'pcpid', 'reccom_Cart_0_9#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7243&amp;bid=3038456.9&amp;page=cartbuy']); "> <img src="images/pms_1510124061.jpg " srcset="//i1.mifile.cn/a1/pms_1510124061.78733980!280x280.jpg 2x " alt="8H蝶形护颈记忆绵枕 "> </a> </dt> <dd class="xm-recommend-name "> <a href="https://item.mi.com/1174400055.html " data-log_code="reccom_Cart_0_9#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7243&amp;bid=3038456.9&amp;page=cartbuy " data-stat-method="1_11 " data-stat-index="9 " target="_blank " data-stat-pid="stat_Cart.购物车_9_1_11 " data-stat-id="null+stat_Cart.购物车_9_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-null+stat_Cart.购物车_9_1_11', '//item.mi.com/1174400055.html', 'pcpid', 'reccom_Cart_0_9#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7243&amp;bid=3038456.9&amp;page=cartbuy']); "> 8H蝶形护颈记忆绵枕 </a> </dd> <dd class="xm-recommend-price ">109元</dd> <dd class="xm-recommend-tips ">   1389人好评    <a href="https://item.mi.com/cart/add/2174400027-0-1 " data-log_code="reccom_Cart_0_9#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7243&amp;bid=3038456.9&amp;page=cartbuy " data-stat-gid="2174400027 " data-stat-method="1_11 " data-stat-index="9 " data-stat-text="8H蝶形护颈记忆绵枕 " data-stat-addcart="加购 " class="btn btn-small btn-line-primary J_xm-recommend-btn " data-stat-pid="stat_Cart加购.购物车_9_1_11 " data-stat-aid="8H蝶形护颈记忆绵枕 " data-stat-id="8H蝶形护颈记忆绵枕+stat_Cart加购.购物车_9_1_11 " onclick="_msq.push([ 'trackEvent', '5df97b551662ffe7-8H蝶形护颈记忆绵枕+stat_Cart加购.购物车_9_1_11', '//item.mi.com/cart/add/2174400027-0-1', 'pcpid', 'reccom_Cart_0_9#eid=180:16:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7243&amp;bid=3038456.9&amp;page=cartbuy']); ">加入购物车</a>  </dd> <dd class="xm-recommend-notice "></dd> </dl>  </li></ul></div></div>

        <!-- <div class="cart-recommend " id="J_miHistoryBox "></div> -->
    </div>
</div>

<!-- 商品列表 模板 -->
<script id="J_cartGoodsTemplate " type="text/x-dot-template ">
    {{~it :value:index}}
        {{? !value.isOvercartTTL & !value.showCos && value.is_on_sale}}
            <div class="item-box ">
                <div class="item-table J_cartGoods " data-info="{ commodity_id: '{{=value.commodity_id}}', gettype: '{{=value.getType}}', itemid: '{{=value.itemId}}', num: '{{=value.num}}'} ">
                    <div class="item-row clearfix ">
                        <div class="col col-check ">
                            {{? value.sel_status === 1}}
                                <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox " data-itemid="{{=value.itemId}} " data-status="{{=value.sel_status}} ">&#x221a;</i>
                            {{?? value.sel_status === 0}}
                                <i class="iconfont icon-checkbox icon-checkbox J_itemCheckbox " data-itemid="{{=value.itemId}} " data-status="{{=value.sel_status}} ">&#x221a;</i>
                            {{?? value.sel_status === 2}}
                                 <i class="iconfont icon-checkbox icon-checkbox-show " >&#x221a;</i>
                            {{? }}
                        </div>
                        <div class="col col-img ">
                            {{? value.noLink && value.image_url}}
                                <img alt=" " src="{{=MI.cart.unit.formatImageUrl(value.image_url, '80')}} " width="80 " height="80 ">
                            {{?? value.image_url}}
                                <a href="{{=value.goodsUrl}} " target="_blank ">
                                    <img alt=" " src="{{=MI.cart.unit.formatImageUrl(value.image_url, '80')}} " width="80 " height="80 ">
                                </a>
                            {{?}}
                        </div>
                        <div class="col col-name ">
                            {{? value.showTypeName || value.showType}}
                            <div class="tags ">
                                {{? value.showTypeName}}
                                    <span class="tag tag-orange ">{{=value.showTypeName}}</span>
                                {{?}}
                                {{? value.showType === 'bigtap'}}
                                    <span class="tag tag-green tag-openbuy ">开放购买活动商品</span>
                                {{?}}
                            </div>
                            {{?}}
                            
                            
                            {{? value.show_tags}}
                            <div class="tags ">
                                {{~value.show_tags :tagitem:tagindex}}
                                    {{? tagitem.tag}}
                                        <span class="tag " style="background-color:{{=tagitem.color}} ">{{=tagitem.tag}}</span>
                                    {{?}}
                                {{~}}
                            </div>
                            {{?}}

                            <h3 class="name ">
                                {{? value.noLink }}
                                    {{=value.product_name}}
                                {{??}}
                                    <a href="{{=value.goodsUrl}} " target="_blank ">
                                        {{=value.product_name}}
                                    </a>
                                {{?}}
                            </h3>
                            {{? value.adaptStr}}
                                <p class="desc ">
                                    <span>适配机型：</span>
                                    {{=value.adaptStr}}
                                </p>
                            {{?}}

                            {{? value.isContract }}
                                <p class="desc ">{{=value.contractContent}}<p>
                            {{?}}

                            {{? value.showOpenActTime}}
                                <p class="desc ">抢购以支付成功为准，请尽快付款</p>
                            {{?}}

                            {{? value.showCommonCartTTL && value.cartTTL > 0}}
                                <p class="desc ">
                                    请您在 {{=MI.cart.unit.formatDate(value.cartTTL, '##M##月##D##日 ##h##:##m##')}} 前下单
                                </p>
                            {{? }}
                        </div>
                        <div class="col col-price ">
                            {{=value.salePrice}}元
                        </div>
                        <div class="col col-num ">
                            {{? value.can_change_num}}
                                <div class="change-goods-num clearfix J_changeGoodsNum ">
                                    <a href="javascript:void(0) " class="J_minus "><i class="iconfont ">&#xe60b;</i></a>
                                    <input tyep="text " name="{{=value.itemId}} " value="{{=value.num}} " data-num="{{=value.num}} " data-buylimit="{{=value.buy_limit}} " autocomplete="off " class="goods-num J_goodsNum "">
												<a href="javascript:void(0)" class="J_plus"><i class="iconfont">&#xe609;</i></a>

												{{? (parseInt(value.buy_limit) - parseInt(value.num)) > 0 && parseInt(value.num) > 1 }} {{? parseInt(value.buy_limit) - parseInt(value.num) > 10 }}
												<div class="msg J_canBuyLimit">还可买 10 件以上</div>
												{{?? }}
												<div class="msg J_canBuyLimit">还可买 {{=parseInt(value.buy_limit) - parseInt(value.num)}} 件</div>
												{{? }} {{? }}
											</div>
											{{??}} {{=value.num}} {{?}}
										</div>
										<div class="col col-total">
											{{=value.subtotal}}元
											<p class="pre-info">
												{{? value.elementsGoods && value.elementsGoods.length > 0 && value.saveMoney}} 已优惠{{=value.saveMoney}}元 {{?}}
											</p>
										</div>
										<div class="col col-action">
											<a id="{{=value.itemId}}" data-msg="{{=value.delConfirm}}" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont">&#xe602;</i></a>
										</div>
									</div>
								</div>

								{{? value.pulse_gift && value.pulse_gift.length > 0}}
								<div class="item-sub-box">
									{{~value.pulse_gift :giftValue:giftIndex}}
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-img">
												<a href="{{=giftValue.link_url}}" target="_blank">
													<img alt="" src="{{=MI.cart.unit.formatImageUrl(giftValue.image_url,'60')}}" width="60" height="60">
												</a>
											</div>
											<div class="col col-name">
												<div class="tags"> <span class="tag tag-red">赠品</span> </div>
												<h3 class="name">
                                            <a href="{{=giftValue.link_url}}" target="_blank">{{=giftValue.product_name}}</a>
                                        </h3> {{? giftValue.selectable }}
												<p class="desc">
													<a href="javascript:void(0)" class="J_chooseGift" data-actid="{{=giftValue.actId}}">选择其他版本</a>
												</p>
												{{?}}
											</div>
											<div class="col col-price">
											</div>
											<div class="col col-num">
												{{=giftValue.num}}
											</div>
											<div class="col col-total">
											</div>
											<div class="col col-action">
											</div>
										</div>
									</div>
									{{~}}
									<i class="arrow"></i>
								</div>
								{{?}} {{? value.pulse_reduction && value.pulse_reduction.length > 0}}
								<div class="item-sub-box">
									{{~value.pulse_reduction :reductionValue:reductionIndex}}
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-img">
												<span class="icon-activity icon-activity-reduction">满减</span>
											</div>
											<div class="col col-name">
												<h3 class="name">
                                            {{=reductionValue.actName}}
                                        </h3>
											</div>
											<div class="col col-price">
												-{{=reductionValue.reduceMoneySingle}}元
											</div>
											<div class="col col-num">
												{{=reductionValue.times}}
											</div>
											<div class="col col-total">
												-{{=reductionValue.reduceMoney}}元
											</div>
											<div class="col col-action">
											</div>
										</div>
									</div>
									{{~}}
									<i class="arrow"></i>
								</div>
								{{?}} {{? value.pulse_bargains_cart && value.pulse_bargains_cart.length > 0 }}
								<div class="item-sub-box">
									{{~value.pulse_bargains_cart :bcValue:bcIndex}}
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-img">
												<a href="{{=bcValue.goodsUrl}}" target="_blank">
													<img alt="" src="{{=MI.cart.unit.formatImageUrl(bcValue.image_url,'60')}}" width="60" height="60">
												</a>
											</div>
											<div class="col col-name">
												<div class="tags"> <span class="tag tag-orange">加价购</span> </div>
												<h3 class="name">
                                            <a href="{{=bcValue.goodsUrl}}" target="_blank">{{=bcValue.product_name}}</a>
                                        </h3>
											</div>
											<div class="col col-price">
												{{=bcValue.salePrice}}元
											</div>
											<div class="col col-num">
												{{=bcValue.num}}
											</div>
											<div class="col col-total">
												{{=(bcValue.salePrice * parseInt(bcValue.num)).toFixed(2)}}元
											</div>
											<div class="col col-action">
												<a id="{{=bcValue.itemId}}" data-msg="{{=bcValue.delConfirm}}" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont">&#xe602;</i></a>
											</div>
										</div>
									</div>
									{{~}}
									<i class="arrow"></i>
								</div>
								{{?}} {{? value.service_info && value.service_info.length > 0 }} {{~value.service_info :serviceList:serviceIndex}} {{~serviceList.service_info:service:servicelistIndex}} {{?service.item_id}}
								<div class="item-box item-sub-box">
									<div class="item-table ">
										<div class="item-row clearfix">
											<div class="col col-img">
												{{? serviceList.service_url}}
												<a href="{{=serviceList.service_url}}" target="_blank">
													<img alt="" src="{{=MI.cart.unit.formatImageUrl(service.service_image_url,'60')}}" width="60" height="60">
												</a>
												{{??}}
												<img alt="" src="{{=MI.cart.unit.formatImageUrl(service.service_image_url,'60')}}" width="60" height="60"> {{?}}
											</div>
											<div class="col col-name">

												<h3 class="name">
                                        {{? serviceList.service_url}}
                                        <a href="{{=serviceList.service_url}}" target="_blank">
                                            {{=service.service_short_name}}
                                        </a>
                                        {{??}}
                                        {{=service.service_short_name}}
                                        {{?}}
                                    </h3>
												<p class="desc">
													{{=service.service_name}}
												</p>
											</div>
											<div class="col col-price">
												{{?service.act_price}} {{=parseInt(service.act_price)}}元 {{?parseInt(service.service_price) > parseInt(service.act_price)}}
												<br/><del>{{=parseInt(service.service_price)}}元</del> {{?}} {{??}} {{=parseInt(service.service_price)}}元 {{?}}
											</div>
											<div class="col col-num">
												{{?parseInt(service.maxnum) > 1 && service.can_change_num}}
												<div class="change-goods-num clearfix J_changeGoodsNum">
													<a href="javascript:void(0)" {{? service.num <=1 }} class="disabled" {{??}} class="J_minus" {{?}}><i class="iconfont">&#xe60b;</i></a>
													<input tyep="text" name="{{=service.item_id}}" value="{{=service.num}}" data-num="{{=service.num}}" data-buylimit="{{=service.maxnum}}" autocomplete="off" class="goods-num J_goodsNum">
													<a href="javascript:void(0)" {{? service.maxnum !=s ervice.num }} class="J_plus" {{??}} class="disabled" {{?}}><i class="iconfont">&#xe609;</i></a>

													{{? (parseInt(service.maxnum) - parseInt(service.num)) > 0 && parseInt(service.num) >= 1 }} {{? parseInt(service.maxnum) - parseInt(service.num) > 10 }}
													<div class="msg J_canBuyLimit">还可买 10 件以上</div>
													{{?? }}
													<div class="msg J_canBuyLimit">还可买 {{=parseInt(service.maxnum) - parseInt(service.num)}} 件</div>
													{{? }} {{? }}
												</div>
												{{??}} {{=parseInt(service.num)}} {{?}}
											</div>
											<div class="col col-total">
												{{?service.act_price}} {{=(parseInt(service.act_price) * service.num)}}元 {{??}} {{=(parseInt(service.service_price) * service.num)}}元 {{?}}
											</div>
											<div class="col col-action">
												{{?service.can_delete}}
												<a id="{{=service.item_id}}" data-msg="确定要删除{{=service.service_short_name}}吗？" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont">&#xe602;</i></a>
												{{?}}
											</div>
										</div>
									</div>
								</div>
								{{?}} {{~}} {{~}} {{?}} {{? value.service_info && value.service_info.length > 0 }} {{~value.service_info :serviceList:serviceIndex}}

								<div class="item-sub-box J_service" data-index="{{=serviceIndex}}" data-multi="{{=serviceList.can_multi}}">
									{{~serviceList.service_info:service:servicelistIndex}} {{?!service.item_id}}
									<div class="extend-buy" data-pindex="{{=index}}" data-sindex="{{=serviceIndex}}" data-index="{{=servicelistIndex}}">
										<i class="iconfont icon-plus">&#xe609;</i>{{=service.service_short_name}} {{?service.act_price}} {{=parseInt(service.act_price)}}元 {{?parseInt(service.act_diff) > 0}}
										<span class="price-diff"> ( 省 {{=parseInt(service.act_diff)}}元 )</span> {{?}} {{??}} {{=parseInt(service.service_price)}}元 {{?}} {{?service.service_url}}
										<a href="{{=service.service_url}}" target="_blank" class="agreement">了解{{=serviceList.type_name}} &gt;</a>
										{{?}}
									</div>
									{{?}} {{~}}
								</div>
								{{~}} {{?}} {{? value.pulse_bargains && value.pulse_bargains.length > 0}}
								<div class="item-sub-box">
									{{~value.pulse_bargains :bargainsValue:bargainsIndex}} {{? bargainsValue.num > 0}}
									<div class="extend-buy J_raiseBuyItem" data-info="{
                                isBatch:'{{=bargainsValue.selectable ? 'true' : 'false'}}',
                                productId:'{{=bargainsValue.product_id}}',
                                goodsId:'{{=bargainsValue.product_id}}-0-1-{{=bargainsValue.actId}}',
                                bargainId:'{{=bargainsValue.bargainId}}',
                                actId:'{{=bargainsValue.actId}}',
                                type:'1',
                                num: {{=bargainsValue.num}},
                                maxnum: {{=bargainsValue.maxnum}}
                            }">
										{{? bargainsValue.product_id === '2160300025'}}
										<i class="iconfont icon-plus">&#xe609;</i>{{=bargainsValue.product_name}} <span style="color:#ff6700">随新机优惠价199元（原价498元）</span> {{?? bargainsValue.product_id === '2163200057'}}
										<i class="iconfont icon-plus">&#xe609;</i><span style="color:#ff6700">{{=bargainsValue.product_name}} {{=bargainsValue.salePrice}}元</span> {{?? }}
										<i class="iconfont icon-plus">&#xe609;</i>{{=bargainsValue.bargain_name}} {{=bargainsValue.salePrice}}元 {{? bargainsValue.selecInfo && bargainsValue.selecInfo.length > 0}} （多版本可选） {{? }} {{? }}
									</div>
									{{? }} {{~}}
								</div>
								{{?}} {{? value.elementsGoods && value.elementsGoods.length > 0 && !value.isContract}}
								<div class="item-sub-box">
									{{~value.elementsGoods :goodsValue:goodsIndex}}
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-img">
												<a href="{{=goodsValue.product_link_url}}" target="_blank">
													<img alt="" src="{{=MI.cart.unit.formatImageUrl(goodsValue.image_url,'60')}}" width="60" height="60">
												</a>
											</div>
											<div class="col col-name">
												<h3 class="name">
                                            <a href="{{=goodsValue.product_link_url}}" target="_blank">{{=goodsValue.product_name}}</a>
                                        </h3>
											</div>
											<div class="col col-price">
												{{? !goodsValue.is_suit}} {{=goodsValue.price}}元 {{? }}
											</div>
											<div class="col col-num">
												{{=goodsValue.num}}
											</div>
											<div class="col col-total">
												{{? !goodsValue.is_suit}} {{=goodsValue.price}}元 {{? }}
											</div>
											<div class="col col-action">
											</div>
										</div>
									</div>
									{{~}}
									<i class="arrow"></i>
								</div>
								{{?}} {{? value.properties && value.properties.insurance}} {{? value.properties.insurance.itemId }}
								<div class="item-sub-box">
									<div class="item-table" data-info="{
                                parent_itemId:'{{=value.itemId}}',
                                name:'{{=value.properties.insurance.name}}',
                                price:'{{=value.properties.insurance.price}}',
                                sku:'{{=value.properties.insurance.sku}}',
                                goodsId:'{{=value.properties.insurance.goods_id}}',
                                itemId:'{{=value.properties.insurance.itemId}}',
                                count:'{{=value.num}}'
                            }">
										<div class="item-row clearfix">
											<div class="col col-img">
												<img src="{{=MI.cart.unit.formatImageUrl(value.properties.insurance.image_url,'50')}}" alt="" width="50" height="50">
											</div>
											<div class="col col-name">
												<h3 class="name">
                                            <a href="{{=MI.GLOBAL_CONFIG.wwwSite}}/service/safe" target="_blank">{{=value.properties.insurance.name}}</a>
                                            <a href="{{=MI.GLOBAL_CONFIG.cartSite}}/static/insuranceAgreement.php?type={{=value.properties.insurance.type}}" target="_blank" class="baoxian-service">查看详细条款</a>
                                        </h3>
											</div>
											<div class="col col-price">
												{{=value.properties.insurance.price}}元
											</div>
											<div class="col col-num">
												{{=value.num}}
											</div>
											<div class="col col-total">
												{{=value.properties.insurance.subtotal}}元
											</div>
											<div class="col col-action">
												<a onclick="_msq.push(['trackEvent', '{{=value.properties.insurance.name}}_购物车_删除', '{{=MI.GLOBAL_CONFIG.orderSite}}/cart/delete/id/{{=value.properties.insurance.itemId}}', 'pcpid', '']);" id="{{=value.properties.insurance.itemId}}" data-msg="确定删除吗？" href="{{=MI.GLOBAL_CONFIG.orderSite}}/cart/delete/id/{{=value.properties.insurance.itemId}}" title="删除" class="del J_delGoods"><i class="iconfont">&#xe602;</i></a>
											</div>
										</div>
									</div>
									<i class="arrow"></i>
								</div>
								{{?? value.properties.insurance.itemId === ''}}
								<div class="item-sub-box">
									<div onclick="_msq.push(['trackEvent', '{{=value.properties.insurance.name}}_购物车_未添加购物车', '{{=value.properties.insurance.name}}', 'pcpid', '']);" class="extend-buy J_showBaoxian" data-info="{
                                    name:'{{=value.properties.insurance.name}}',
                                    parent_itemId:'{{=value.itemId}}',
                                    price:'{{=value.properties.insurance.price}}',
                                    sku:'{{=value.properties.insurance.sku}}',
                                    goodsId:'{{=value.properties.insurance.goods_id}}',
                                    itemId:'{{=value.properties.insurance.itemId}}',
                                    count:'{{=value.num}}',
                                    type:'{{=value.properties.insurance.type}}'
                                }">
										<i class="iconfont icon-plus">&#xe609;</i>{{=value.properties.insurance.name}} ¥{{=value.properties.insurance.price}}/份
										<a href="javascript:void(0);" data-info="{
                                    name:'{{=value.properties.insurance.name}}',
                                    parent_itemId:'{{=value.itemId}}',
                                    price:'{{=value.properties.insurance.price}}',
                                    sku:'{{=value.properties.insurance.sku}}',
                                    goodsId:'{{=value.properties.insurance.goods_id}}',
                                    itemId:'{{=value.properties.insurance.itemId}}',
                                    count:'{{=value.num}}',
                                    type:'{{=value.properties.insurance.type}}'
                                }">查看详细条款</a>
									</div>
								</div>
								{{?}} {{?}} {{? value.properties && value.properties.wallMount}} {{? !value.properties.wallMount.itemId}}
								<div class="item-sub-box">
									<div class="extend-buy J_showGuajia" data-gid="{{=value.properties.wallMount.goods_id}}" data-parent_itemid="{{=value.itemId}}">
										<i class="iconfont icon-plus">&#xe609;</i>{{=value.properties.wallMount.name}}
										<a href="javascript:void(0);" data-gid="{{=value.properties.wallMount.goods_id}}" data-parent_itemid="{{=value.itemId}}">查看详细条款</a>
									</div>
								</div>
								{{?? value.properties.wallMount.itemId }}
								<div class="item-sub-box">
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-img">
												<img src="{{=MI.cart.unit.formatImageUrl(value.properties.wallMount.image_url,'50')}}" alt="" width="50" height="50">
											</div>
											<div class="col col-name">
												<h3 class="name">
                                            {{=value.properties.wallMount.name}}
                                        </h3>
											</div>
											<div class="col col-price">
											</div>
											<div class="col col-num">
											</div>
											<div class="col col-total">
											</div>
											<div class="col col-action">
												<a id="{{= value.properties.wallMount.itemId}}" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont">&#xe602;</i></a>
											</div>
										</div>
									</div>
									<i class="arrow"></i>
								</div>
								{{?}} {{?}} {{? value.properties && value.properties.waterTap}} {{? !value.properties.waterTap.itemId}}
								<div class="item-sub-box">
									<div class="extend-buy J_showWaterInstall" data-gid="{{=value.properties.waterTap.goods_id}}" data-parent_itemid="{{=value.itemId}}">
										<i class="iconfont icon-plus">&#xe609;</i>{{=value.properties.waterTap.name}}
										<a href="javascript:void(0);" data-gid="{{=value.properties.waterTap.goods_id}}" data-parent_itemid="{{=value.itemId}}">查看详细条款</a>
									</div>
								</div>
								{{?? value.properties.waterTap.itemId }}
								<div class="item-sub-box">
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-img">
												<img src="{{=MI.cart.unit.formatImageUrl(value.properties.waterTap.image_url,'50')}}" alt="" width="50" height="50">
											</div>
											<div class="col col-name">
												<h3 class="name">
                                            {{=value.properties.waterTap.name}}
                                        </h3>
											</div>
											<div class="col col-price">
											</div>
											<div class="col col-num">
											</div>
											<div class="col col-total">
											</div>
											<div class="col col-action">
												{{? value.properties.waterTap.can_delete}}
												<a id="{{= value.properties.waterTap.itemId}}" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont">&#xe602;</i></a>
												{{? }}
											</div>
										</div>
									</div>
									<i class="arrow"></i>
								</div>
								{{?}} {{?}}
							</div>
							{{? }} {{~}}
							</script>

							<!-- 活动商品 -->
							<script id="J_cartActivitysTemplate" type="text/x-dot-template">
								{{? it.gift && it.gift.length > 0}} {{~it.gift :giftValue:giftIndex}}
								<div class="item-box">
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-check">
												<i class="iconfont icon-checkbox icon-checkbox-show">&#x221a;</i>
											</div>
											<div class="col col-img">
												<a href="{{=MI.GLOBAL_CONFIG.itemSite}}/{{=giftValue.commodity_id}}.html" target="_blank">
													<img src="{{=MI.cart.unit.formatImageUrl(giftValue.image_url,'80')}}" width="80" height="80">
												</a>
											</div>
											<div class="col col-name">
												<div class="tags">
													<span class="tag tag-red">赠品</span>
												</div>
												<h3 class="name">
                                <a target="_blank" href="{{=MI.GLOBAL_CONFIG.itemSite}}/{{=giftValue.commodity_id}}.html">{{=giftValue.product_name}}</a>
                            </h3>
												<p class="desc">
													{{=giftValue.actName}} {{? giftValue.selectable}}
													<br>
													<a href="javascript:void(0)" class="J_chooseGift" data-actid="{{=giftValue.actId}}">选择其他赠品</a>
													{{?}}
												</p>
											</div>
											<div class="col col-price">
												{{=giftValue.salePrice}}元
											</div>
											<div class="col col-num">
												{{? giftValue.getType === 'gift' }} {{=giftValue.num}} {{??}}
												<select name="{{=giftValue.itemId}}" id="J_cart_{{=giftValue.itemId}}" data-select="1">
													{{ for (var $i = 1; $i
													<=p arseInt(giftValue.maxDropdownOption); $i+=1) { }} {{ if ($i==g iftValue.num){ }} <option value="{{=$i}}" selected='selected'>{{=$i}}</option>
														{{ }else{ }}
														<option value="{{=$i}}">{{=$i}}</option>
														{{ } }} {{ } }}
												</select>
												{{?}}
											</div>
											<div class="col col-total">
												{{=giftValue.subtotal}}元
											</div>
											<div class="col col-action">
											</div>
										</div>
									</div>
								</div>
								{{~}} {{?}} {{? it.reduction && it.reduction.length > 0}} {{~it.reduction :reductionValue:reductionIndex}}
								<div class="item-box">
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-check">
												<i class="iconfont icon-checkbox icon-checkbox-show">&#x221a;</i>
											</div>
											<div class="col col-img">
												<span class="icon-activity icon-activity-reduction">满减</span>
											</div>
											<div class="col col-name">
												<h3 class="name">
                                {{=reductionValue.actName}}
                            </h3>
											</div>
											<div class="col col-price">
												-{{=reductionValue.reduceMoneySingle}}元
											</div>
											<div class="col col-num">
												{{=reductionValue.times}}
											</div>
											<div class="col col-total">
												-{{=reductionValue.reduceMoney}}元
											</div>
											<div class="col col-action">
											</div>
										</div>
									</div>
								</div>
								{{~}} {{?}} {{? it.coupons && it.coupons.length > 0}} {{~it.coupons :couponsValue:couponsIndex}}
								<div class="item-box">
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-check">
												<i class="iconfont icon-checkbox icon-checkbox-show">&#x221a;</i>
											</div>
											<div class="col col-img">
												<span class="icon-activity icon-activity-coupons">返券</span>
											</div>
											<div class="col col-name">
												<h3 class="name">
                                {{=couponsValue.actName}}  {{=couponsValue.coupon_type_name}}
                            </h3>
											</div>
											<div class="col col-price">
											</div>
											<div class="col col-num">
												{{=couponsValue.coupon_num}}
											</div>
											<div class="col col-total">
											</div>
											<div class="col col-action">
											</div>
										</div>
									</div>
								</div>
								{{~}} {{?}} {{? it.postFree && it.postFree.actName}}
								<div class="item-box">
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-check">
												<i class="iconfont icon-checkbox icon-checkbox-show">&#x221a;</i>
											</div>
											<div class="col col-img">
												<span class="icon-activity icon-activity-postfree">免邮</span>
											</div>
											<div class="col col-name">
												<h3 class="name">
                            免邮费：{{=it.postFree.actName}}
                        </h3>
											</div>
											<div class="col col-price">
											</div>
											<div class="col col-num">
											</div>
											<div class="col col-total">
											</div>
											<div class="col col-action">
											</div>
										</div>
									</div>
								</div>
								{{?}}
							</script>

							<!-- 加价购 -->
							<script id="J_cartRaisebuyTemplate" type="text/x-dot-template">
								{{~it :value:index}} {{? parseInt(value.num) === 0 }} {{var sel = 'hide'; }} {{??}} {{var sel = ''; }} {{?}}
								<div class="item {{=sel}} J_raiseBuyItem" data-info="{
            isBatch:'{{=value.selectable ? 'true' : 'false'}}',
            productId:'{{=value.product_id}}',
            goodsId:'{{=value.product_id}}-0-1-{{=value.actId}}',
            bargainId:'{{=value.bargainId}}',
            actId:'{{=value.actId}}',
            type:'1',
            num:{{=value.num}},
            maxnum:{{=value.maxnum}}
        }">
									{{? value.bargain_name}}
									<i class="iconfont icon-plus">&#xe609;</i>{{=value.bargain_name}} {{=value.salePrice}}元 {{??}}
									<i class="iconfont icon-plus">&#xe609;</i>{{=value.product_name}} {{=value.salePrice}}元 {{?}}
								</div>
								{{~}}
							</script>

							<script id="J_cartRaisebuyClassTemplate" type="text/x-dot-template">
								{{~it :value:index}}
								<div class="modal fade modal-hide modal-choose-pro J_modalRaisebuy J_carouselContainer" id="J_choosePro-{{=value.actId}}" data-isadd="true">
									<div class="modal-header">
										<span class="close" data-dismiss='modal'><i class="iconfont">&#xe602;</i></span>
										<h3>选择产品</h3>
									</div>
									<div class="modal-body">
										<ul class="clearfix list J_chooseProList {{? value.selecInfo.length > 3 }} J_carouselList {{?}}">
											{{? value.selecInfo && value.selecInfo.length >0 }} {{~value.selecInfo :itemValue:itemIndex}} {{? itemValue.isBuy === 'true' }}
											<li class="span4" data-gid="{{=itemValue.product_id}}-0-1-{{=value.actId}}" data-num="{{=itemValue.num}}" data-isbuy="{{=itemValue.isBuy}}" data-pid="{{=itemValue.product_id}}" data-actid="{{=value.actId}}">
												{{??}}
												<li class="span4" data-gid="{{=itemValue.product_id}}-0-1-{{=value.actId}}" data-num="{{=itemValue.shopcart_num ? itemValue.shopcart_num : 0}}" data-maxnum="{{=value.maxnum ? value.maxnum : ''}}" data-pid="{{=itemValue.product_id}}" data-actid="{{=value.actId}}">
													{{?}}
													<img disabled="" data-src="{{=MI.cart.unit.formatImageUrl(itemValue.image_url,'220')}}" alt="" width="220" height="220">
													<p class="g-name">{{=itemValue.product_name}}</p>
													<p class="g-price">{{=value.salePrice}}元</p>
													<i class="icon-radio"></i>
												</li>
												{{~}} {{?}}
										</ul>
									</div>
									<div class="modal-footer">
										<a href="javascript:void(0);" class="btn btn-gray btn-disable J_chooseProBtn" data-actid="{{=value.actId}}" data-type="1">加入购物车</a>
									</div>
								</div>
								{{~}}
							</script>

							<script id="J_goodsSubRaisebuyClassTemplate" type="text/x-dot-template">
								{{~it :value:index}}
								<div class="modal fade modal-hide modal-choose-pro J_modalGoodsSubRaisebuy J_carouselContainer" id="J_choosePro-{{=value.actId}}" data-isadd="true">
									<div class="modal-header">
										<span class="close" data-dismiss='modal'><i class="iconfont">&#xe602;</i></span>
										<h3>选择产品</h3>
									</div>
									<div class="modal-body">
										<ul class="clearfix list J_chooseProList {{? value.selecInfo.length > 3 }} J_carouselList {{?}}">
											{{? value.selecInfo && value.selecInfo.length >0 }} {{~value.selecInfo :itemValue:itemIndex}} {{? itemValue.isBuy === 'true' }}
											<li class="span4" data-gid="{{=itemValue.product_id}}-0-1-{{=value.actId}}" data-num="{{=itemValue.num}}" data-isbuy="{{=itemValue.isBuy}}" data-pid="{{=itemValue.product_id}}" data-actid="{{=value.actId}}">
												{{??}}
												<li class="span4" data-gid="{{=itemValue.product_id}}-0-1-{{=value.actId}}" data-num="{{=itemValue.shopcart_num ? itemValue.shopcart_num : 0}}" data-maxnum="{{=value.maxnum ? value.maxnum : ''}}" data-pid="{{=itemValue.product_id}}" data-actid="{{=value.actId}}">
													{{?}}
													<img disabled="" data-src="{{=MI.cart.unit.formatImageUrl(itemValue.image_url,'220')}}" alt="" width="220" height="220">
													<p class="g-name">{{=itemValue.product_name}}</p>
													<p class="g-price">{{=value.salePrice}}元</p>
													<i class="icon-radio"></i>
												</li>
												{{~}} {{?}}
										</ul>
									</div>
									<div class="modal-footer">
										<a href="javascript:void(0);" class="btn btn-gray btn-disable J_chooseProBtn" data-actid="{{=value.actId}}" data-type="1">加入购物车</a>
									</div>
								</div>
								{{~}}
							</script>

							<!-- 凑单 -->
							<script id="J_cartCoudanTemplate" type="text/x-dot-template">
								<div class="modal fade modal-hide modal-choose-pro modal-coudan J_modalCoudan J_carouselContainer" id="J_CoudanBox">
									<div class="modal-header">
										<span class="close" data-dismiss="modal"><i class="iconfont">&#xe602;</i></span>
										<h3>选购凑单商品</h3>
										<p class="desc" id="J_coudanDesc">你还需要凑<span class="money"><i id="J_coudanMoney"></i>元</span>即可免运费</p>
										<p class="desc over hide" id="J_coudanOver">您已满足免运费条件</p>
									</div>
									<div class="modal-body">
										<ul class="clearfix list J_chooseProList  J_carouselList">
											{{~it :value:index}}
											<li class="span4" data-coudan="true" data-gid="{{=value.product_id}}" data-price="{{=value.price}}">

												<img data-src="{{=MI.cart.unit.formatImageUrl(value.image_origin,'220')}}" alt="{{=value.product_name}}">
												<p class="g-name">{{=value.product_name}}</p>
												<p class="g-price">
													{{=value.price}} 元
												</p>
												<i class="icon-radio"></i>
											</li>
											{{~}}
										</ul>
									</div>
									<div class="modal-footer">
										<a href="javascript:void(0);" class="btn btn-gray btn-disable J_chooseProBtn">加入购物车</a>
									</div>
								</div>
							</script>

							<!-- 礼物 -->
							<script id="J_cartGiftTemplate" type="text/x-dot-template">
								{{~it :value:index}}
								<div class="modal fade modal-hide modal-choose-pro J_modalGift J_carouselContainer" id="J_choosePro-{{=value.actId}}" data-isgift="true">
									<div class="modal-header">
										<span class="close" data-dismiss='modal'><i class="iconfont">&#xe602;</i></span>
										<h3>选择产品</h3>
										<div class="more J_carouselControl"></div>
									</div>
									<div class="modal-body">
										<ul class="clearfix list J_chooseProList {{? value.selecInfo.length > 3 }} J_carouselList {{?}}">
											{{? value.selecInfo && value.selecInfo.length >0 }} {{~value.selecInfo :itemValue:itemIndex}}
											<li class="span4" data-gid="{{=itemValue.product_id}}" data-price={{=itemValue.product_id}}-0-1-{{=value.actId}}-2>

												<img data-src="{{=MI.cart.unit.formatImageUrl(itemValue.image_url,'220')}}" alt="" width="220" height="220">
												<p class="g-name">{{=itemValue.product_name}}</p>
												<p class="g-price">{{=itemValue.price}}元</p>
												<i class="icon-radio"></i>
											</li>
											{{~}} {{?}}
										</ul>
									</div>
									<div class="modal-footer">
										<a href="javascript:void(0);" class="btn btn-gray btn-disable J_chooseProBtn" data-actid="{{=value.actId}}" data-type="2">加入购物车</a>
									</div>
								</div>
								{{~}}
							</script>

							<!-- 过期、售罄商品 模版 -->
							<script id="J_cartCloseTemplate" type="text/x-dot-template">
								{{~it :value:index}}
								<div class="item-box">
									<div class="item-table">
										<div class="item-row clearfix">
											<div class="col col-check">
												{{? value.sel_status === 1}}
												<i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="{{=value.itemId}}" data-isdis="true" data-status="{{=value.sel_status}}">&#x221a;</i> {{?? }} &nbsp; {{? }}
											</div>
											<div class="col col-status">
												{{? value.showCos}} 售罄 {{?}} {{? value.isOvercartTTL || value.showOpenActStatus }} 失效 {{?}} {{? !value.is_on_sale }} 下架 {{? }}
											</div>
											<div class="col col-img">
												{{? value.noLink }}
												<img alt="" src="{{=MI.cart.unit.formatImageUrl(value.image_url,'80')}}" width="80" height="80"> {{??}}
												<a href="{{=value.goodsUrl}}" target="_blank">
													<img alt="" src="{{=MI.cart.unit.formatImageUrl(value.image_url,'80')}}" width="80" height="80">
												</a>
												{{?}}
											</div>
											<div class="col col-name">
												<h3 class="name">
                        {{? value.noLink }}
                            {{=value.product_name}}
                        {{??}}
                            <a href="{{=value.goodsUrl}}" target="_blank">
                                {{=value.product_name}}
                            </a>
                        {{?}}
                    </h3> {{? value.adaptStr}}
												<p class="desc">
													<span>适配机型：</span> {{=value.adaptStr}}
												</p>
												{{? }} {{? value.is_on_sale && value.showType === 'bigtap'}}
												<p class="desc">抢购商品已失效或暂时售罄</p>
												{{?}}
											</div>
											<div class="col col-price">
												{{=value.salePrice}}元
											</div>
											<div class="col col-num">
												{{=value.num}}
											</div>
											<div class="col col-total">
												{{=value.subtotal}}元
											</div>
											<div class="col col-links">
												{{? value.isOvercartTTL}}
												<a href="javascript:void(0);" class="J_addFavorite add-favorite" data-gid="{{=value.commodity_id}}"><i class="iconfont hollow">&#xe614;</i><i class="iconfont solid">&#xe631;</i>喜欢</a>
												{{?}} {{? value.showCos || !value.is_on_sale}}
												<a href="{{=MI.GLOBAL_CONFIG.orderSite}}/misc/subscribe/goods/{{=value.goodsId}}" target="_blank"><i class="iconfont">&#xe606;</i>到货提醒</a>
												{{?}}
											</div>
											<div class="col col-action">
												<a id="{{=value.itemId}}" data-msg="{{=value.delConfirm}}" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont">&#xe602;</i></a>
											</div>
										</div>
									</div>
								</div>
								{{~}}
							</script>
							<!-- 保险服务购买弹层 -->
							<div class="modal fade modal-agreement modal-hide" id="J_modalAgreement">
							</div>
							<!-- 保险服务购买弹层模板 -->
							<script id="J_agreementTmp" type="text/x-dot-template">
								<span class="close" data-dismiss="modal"><i class="iconfont">&#xe602;</i></span>
								<div class="modal-body">
									<h3 class="title">购买服务</h3>
									<div class="con">
										<div class="left">
											{{?it.service_url}}
											<a href="{{=it.service_url}}" target="_blank">
												<img alt="" src="{{=it.service_image_url}}" width="60" height="60">
											</a>
											{{??}}
											<img alt="" src="{{=it.service_image_url}}" width="60" height="60"> {{?}}
										</div>
										<div class="right">
											<p class="name"> {{=it.service_short_name}} </p>
											<p class="desc"> {{=it.service_name}}
												<span class="price">
                    {{?it.act_price}}
                        {{=parseInt(it.act_price)}}元{{?parseInt(it.act_diff) > 0}}<span class="price-diff"> ( 省 {{=parseInt(it.act_diff)}}元 )</span>{{?}} {{??}} {{=parseInt(it.service_price)}}元 {{?}}
												</span>
											</p>
											{{?it.phone_accidentIns}}
											<p class="agreement">
												<i class="iconfont icon-checkbox J_agreement"><em>√</em></i> 我已阅读 {{~it.phone_accidentIns:agreementItem:agreementIndex }}
												<a href="{{=agreementItem.url}}" target="_blank">{{=agreementItem.desc}} {{?agreementIndex != it.phone_accidentIns.length - 1}}<span>|</span>{{?}}</a>
												{{~}}
											</p>
											{{?}}
										</div>
									</div>
									<div class="actions">
										<button {{?it.phone_accidentIns}} class="btn btn-primary btn-disabled" {{??}} class="btn btn-primary" {{?}} {{?it.act_id}} data-id="{{=it.service_goods_id}}-0-1-{{=it.act_id}}" {{??}} data-id={{=it.service_goods_id}} {{?}} data-pid="{{=it.parent_item_id}}" data-source="{{=it.source}}">确认购买</button>
									</div>
								</div>
							</script>

							<!-- 删除开放购买商品提示 -->
							<div class="modal fade modal-hide  modal-alert" id="J_modalAlert">
								<div class="modal-bd">
									<div class="text">
										<h3 id="J_alertMsg"></h3>
									</div>
									<div class="actions">
										<button class="btn btn-gray" data-dismiss="modal" id="J_alertCancel">取消</button>
										<button class="btn btn-primary" data-dismiss="modal" id="J_alertOk">确定</button>
									</div>
									<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="0e3f0f6c19212300" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-0e3f0f6c19212300', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
								</div>
							</div>

							<!--结算提示 -->
							<script id="J_preCheckTipTemplate" type="text/x-dot-template">
								{{? it.data.items && it.data.items.length}}
								<div class="modal fade modal-hide  modal-precheck-tip modal-precheck-tip-{{=it.data.items.length}}" id="J_modalPrecheckTip">
									{{?? }} {{? it.texts.msg}}
									<div class="modal fade modal-hide  modal-precheck-tip modal-precheck-tip-msg" id="J_modalPrecheckTip">
										{{?? }}
										<div class="modal fade modal-hide  modal-precheck-tip" id="J_modalPrecheckTip">
											{{? }} {{? }} {{? it.texts.title}}
											<div class="modal-hd">
												<h3 class="title">{{=it.texts.title}}</h3>
												<a class="close" data-dismiss="modal" href="javascript: void(0);"><i class="iconfont">&#xe602;</i></a>
											</div>
											{{?? }}
											<a class="close" data-dismiss="modal" href="javascript: void(0);"><i class="iconfont">&#xe602;</i></a>
											{{? }} {{? it.data.has_bigtap}}
											<div style="text-align:center;font-size:16px;padding-top:10px;">抢购以支付成功为准，未及时付款会导致商品失效</div>
											{{? }}

											<div class="modal-bd">
												{{? it.texts.msg}}
												<p class="msg">{{=it.texts.msg}}</p>
												{{? }} {{? it.data.items && it.data.items.length}}
												<ul class="list clearfix" id="J_preCheckList">
													{{~it.data.items :itemValue:itemIndex}}
													<li data-itemid="{{=itemValue.itemId}}" data-gid="{{=itemValue.goodsId}}">
														{{? itemValue.image_url}}
														<img src="{{=MI.cart.unit.formatImageUrl(itemValue.image_url,'160')}}" alt="{{=itemValue.product_name}}"> {{? }}
														<h3>{{=itemValue.product_name}}</h3>
														<p class="price">{{=itemValue.salePrice}}元</p>
													</li>
													{{~}}
												</ul>
												{{? }}
											</div>
											<div class="modal-ft">
												<a href="javascript:void(0);" class="btn btn-primary" id="J_preCheckBtn" {{? it.texts.action }} data-action="{{=it.texts.action}}" {{??}} data-dismiss="modal" {{?}}>{{=it.texts.btn}}</a>
											</div>
										</div>
							</script>
							<!-- 保险弹窗 -->
							<!-- 保险弹窗 -->
							<div class="modal fade in modal-hide modal-baoxian" id="J_baoxian">
								<div class="modal-header">
									<h3>小米意外保障服务/小米意外损坏保险</h3>
									<span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
								</div>
								<div class="modal-body">
									<div class="con-1">
										<h4>购买保障服务/保险的设备在意外受损时可获得免费维修或换新</h4>
										<ul class="icon-list clearfix">
											<li>
												<span class="icon icon-1"></span> 屏幕碎裂免费换新屏
											</li>
											<li>
												<span class="icon icon-2"></span> 进水、摔落免费修
											</li>
											<li>
												<span class="icon icon-3"></span> 修好为止
											</li>
										</ul>
										<dl class="xuzhi">
											<dt>为保障您的权益，购买前请仔细阅读：</dt>
											<dd>· 本保障服务/保险目前仅适用于有限的产品类型，不同产品的保障规则会有所差异，请以详细条款为准；</dd>
											<dd>· 本保障服务/保险自您收到设备起，有效期为一年，若您在收到设备7日内取消保障服务/保险，请连同设备一起申请退货。</dd>
											<dd>· 故意行为导致的设备损坏以及盗窃、抢劫、遗失设备等不在服务保障范围内（具体以详细条款为准）。</dd>
										</dl>
									</div>
								</div>
								<div class="modal-footer clearfix">
									<p>
										<span class="J_baoxianAgree"><i class="iconfont icon-checkbox">√</i> 
                我已经阅读并同意</span> 《
										<a href="https://api.jr.mi.com/insurance/document/phone_accidentIns_rules.html" target="_blank" data-stat-id="09fb6607b789d114" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-09fb6607b789d114', 'https://api.jr.mi.com/insurance/document/phone_accidentIns_rules.html', 'pcpid', '']);">保险条款</a>》、《
										<a href="https://api.jr.mi.com/insurance/document/phone_accidentIns_instruction.html" target="_blank" data-stat-id="3545524189c36e01" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-3545524189c36e01', 'https://api.jr.mi.com/insurance/document/phone_accidentIns_instruction.html', 'pcpid', '']);">投保须知</a>》、《
										<a href="https://api.jr.mi.com/insurance/document/phone_accidentIns_commonQuestions.html" target="_blank" data-stat-id="96f7d9100c606f1b" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-96f7d9100c606f1b', 'https://api.jr.mi.com/insurance/document/phone_accidentIns_commonQuestions.html', 'pcpid', '']);">常见问题</a>》
									</p>
									<a class="btn btn-primary J_buyBaoxian" data-stat-id="3223027ac5cd2707" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-3223027ac5cd2707', '', 'pcpid', '']);">确认并购买<span class="num"></span></a>
								</div>
							</div>

							<!-- 电视挂架弹窗 -->
							<div class="modal fade in modal-hide modal-guajia" id="J_modalGuajia">
								<div class="modal-header">
									<h3>预约电视挂架安装服务</h3>
									<span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
								</div>
								<div class="modal-body">
									<h4>购买须知：</h4>
									<ol class="icon-list clearfix">
										<li>本服务采用线上预约，安装时工作人员上门收费的服务模式。</li>
										<li>确认预约之后，工作人员将在商品（小米电视）到货后的3个工作日内，与您取得联系并上门安装。</li>
										<li>具体安装台数请与小米工作人员沟通。</li>
										<li>往返距离大于30公里的上门服务属于远程服务，对超出30公里的路程部分收取远程费，收费标准为1元/公里。</li>
										<li style="color: #ff6700">为了确保您的权益，请核实为您提供服务的工程师工牌信息，如有疑问现场拨打400-100-5678电话进行确认。</li>
									</ol>
									<table>
										<caption>
											材料费用：
										</caption>
										<thead>
											<tr>
												<th class="th-1">
													附件名称
												</th>
												<th class="th-2">
													使用说明
												</th>
												<th class="th-3">
													价格
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													小米电视壁挂架
												</td>
												<td>
													用于墙面挂装，由小米授权服务商进行安装
												</td>
												<td>
													99元
												</td>
											</tr>
											<tr>
												<td>
													小米电视主机/条形音响挂架
												</td>
												<td>
													用于墙面挂装，由小米授权服务商进行安装
												</td>
												<td>
													80元
												</td>
											</tr>
										</tbody>
									</table>

									<!-- <table>
            <caption>
                安装费用：
            </caption>
            <thead>
                <tr>
                    <th class="th-1">
                        安装类型
                    </th>
                    <th class="th-2">
                        服务内容
                    </th>
                    <th class="th-3">
                        人工费
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        主机/音响
                    </td>
                    <td>
                        条形音响+低音炮+座/挂装+连接组合+功能调试
                    </td>
                    <td>
                        50元/台
                    </td>
                </tr>
                <tr>
                    <td>
                        电视
                    </td>
                    <td>
                        电视+音响+座/挂装+连接组合+功能调试
                    </td>
                    <td>
                        100元/台
                    </td>
                </tr>
            </tbody>
        </table> -->

									<table>
										<caption>小米电视安装服务费标准</caption>
										<thead>
											<tr>
												<th rowspan="2" colspan="2" width="50%">机型</th>
												<th colspan="3">安装类型</th>
											</tr>
											<tr>
												<th>挂装</th>
												<th>座装</th>
												<th>移机</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">一体电视 / 分体屏幕</td>
												<td>≤60 吋</td>
												<td>100元/台</td>
												<td>100元/台</td>
												<td>100元/台</td>
											</tr>
											<tr>
												<td>61-70 吋</td>
												<td>200元/台</td>
												<td>200元/台</td>
												<td>200元/台</td>
											</tr>
											<tr>
												<td rowspan="3">附件 / 商品</td>
												<td>小米电视主机</td>
												<td>50元/台</td>
												<td>50元/台</td>
												<td>50元/台</td>
											</tr>
											<tr>
												<td>小米 soundbar</td>
												<td>50元/台</td>
												<td>50元/台</td>
												<td>50元/台</td>
											</tr>
											<tr>
												<td>小米低音炮</td>
												<td>－－</td>
												<td>50元/台</td>
												<td>50元/台</td>
											</tr>
										</tbody>
									</table>

									<dl>
										<dt>如何计算费用：</dt>
										<dd>如网点到您家里单程22公里，需要安装电视挂装</dd>
										<dd>总计费用：手工费（100元）+挂架材料费（99元）+路程补贴 （22*2-30=14元）=213元</dd>
										<dd>*网点到家往返超出30公里，需另外收取1元/公里的远程服务费</dd>
									</dl>
									<p>
										<a href="http://bbs.xiaomi.cn/thread/index/tid/11435552" target="_blank" data-stat-id="24affb4132e6b403" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-24affb4132e6b403', 'http://bbs.xiaomi.cn/thread/index/tid/11435552', 'pcpid', '']);">了解更多细则&gt;</a>
									</p>
								</div>
								<div class="modal-footer clearfix">
									<a class="btn btn-primary J_buyGuaJia" data-stat-id="bf9851d686574b5b" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-bf9851d686574b5b', '', 'pcpid', '']);">确认预约</a>
								</div>
							</div>
							<!-- 净水器或水龙头安装服务 -->
							<div class="modal fade in modal-hide modal-water-install" id="J_modalWaterInstall">
								<div class="modal-header">
									<h3>预约小米净水器或水龙头安装服务</h3>
									<span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
								</div>
								<div class="modal-body">
									<h4>购买须知：</h4>
									<ol class="icon-list clearfix">
										<li>本服务采用线上预约，安装时工作人员采取上门收费的服务形式。</li>
										<li>确认预约之后，工作人员将在商品（小米净水器）出库后（订单可查询）的3个工作日内，与您取得联系并上门安装。</li>
										<li>同一次上门安装小米净水器和不锈钢无铅水龙头，只收取一次安装人工费用（50元/台）。</li>
										<li>往返距离大于30公里的上门服务属于远程服务,对超出30公里的路程部分收取远程费,收费标准为1元/公里。</li>
										<li style="color: #ff6700">为了确保您的权益，请核实为您提供服务的工程师工牌信息，如有疑问现场拨打400-100-5678电话进行确认。</li>
									</ol>
									<p>
										<a href="http://bbs.xiaomi.cn/t-11515570" target="_blank" data-stat-id="12e2c6874af7b7ae" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-12e2c6874af7b7ae', 'http://bbs.xiaomi.cn/t-11515570', 'pcpid', '']);">了解更多细则 &gt;</a>
									</p>
									<table>
										<caption>
											收费标准：
										</caption>
										<thead>
											<tr>
												<th>
													项目名称
												</th>
												<th>
													安装人工费用
												</th>
												<th>
													材料费用
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													安装小米净水器
												</td>
												<td>
													50元/台
												</td>
												<td>
													－－
												</td>
											</tr>
											<tr>
												<td>
													安装不锈钢无铅水龙头
												</td>
												<td>
													50元/台
												</td>
												<td>
													240元
												</td>
											</tr>
										</tbody>
									</table>

									<p>温馨提示：如果您无需更换水龙头，自己动手就可以完成净水器安装哦。
										<a href="https://www.mi.com/water/gallery/?showInstall" target="_blank" data-stat-id="b9b4b08f31b90571" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-b9b4b08f31b90571', '//www.mi.com/water/gallery/showInstall', 'pcpid', '']);">参考安装演示 »</a>
									</p>
								</div>
								<div class="modal-footer clearfix">
									<a class="btn btn-primary J_buyWaterInstall" data-stat-id="a221b5835f4146c4" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-a221b5835f4146c4', '', 'pcpid', '']);">确认预约</a>
								</div>
							</div>
							<div class="site-footer">
								<div class="container">
									<div class="footer-service">
										<ul class="list-service clearfix">
											<li>
												<a rel="nofollow" href="https://www.mi.com/static/fast/" target="_blank" data-stat-id="4adab7c2c31eba19" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4adab7c2c31eba19', '//www.mi.com/static/fast/', 'pcpid', '']);"><i class="iconfont"></i>预约维修服务</a>
											</li>
											<li>
												<a rel="nofollow" href="https://www.mi.com/service/exchange#back" target="_blank" data-stat-id="e0963096565a91c3" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-e0963096565a91c3', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>7天无理由退货</a>
											</li>
											<li>
												<a rel="nofollow" href="https://www.mi.com/service/exchange#back" target="_blank" data-stat-id="ad96544e6c3d0af8" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-ad96544e6c3d0af8', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>15天免费换货</a>
											</li>
											<li>
												<a rel="nofollow" href="https://www.mi.com/service/buy/postage/" target="_blank" data-stat-id="d227c58646e0727e" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-d227c58646e0727e', '//www.mi.com/service/buy/postage/', 'pcpid', '']);"><i class="iconfont"></i>满150元包邮</a>
											</li>
											<li>
												<a rel="nofollow" href="https://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="690935f9256da678" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-690935f9256da678', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);"><i class="iconfont"></i>520余家售后网点</a>
											</li>
										</ul>
									</div>
									<div class="footer-links clearfix">

										<dl class="col-links col-links-first">
											<dt>帮助中心</dt>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/service/account/register/" target="_blank" data-stat-id="376afcbf0946f4f9" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-376afcbf0946f4f9', '//www.mi.com/service/account/register/', 'pcpid', '']);">账户管理</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/service/buy/buytime/" target="_blank" data-stat-id="a634dfba51fb9d3d" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-a634dfba51fb9d3d', '//www.mi.com/service/buy/buytime/', 'pcpid', '']);">购物指南</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/service/order/sendprogress/" target="_blank" data-stat-id="00732586f4621de7" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-00732586f4621de7', '//www.mi.com/service/order/sendprogress/', 'pcpid', '']);">订单操作</a>
											</dd>

										</dl>

										<dl class="col-links ">
											<dt>服务支持</dt>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/service/exchange" target="_blank" data-stat-id="4e31526564d3ea94" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4e31526564d3ea94', '//www.mi.com/service/exchange', 'pcpid', '']);">售后政策</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/service/" target="_blank" data-stat-id="5a5287ee9dc6bd7a" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-5a5287ee9dc6bd7a', '//www.mi.com/service/', 'pcpid', '']);">自助服务</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/c/service/download/" target="_blank" data-stat-id="4b9b65327e99328b" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4b9b65327e99328b', '//www.mi.com/c/service/download/', 'pcpid', '']);">相关下载</a>
											</dd>

										</dl>

										<dl class="col-links ">
											<dt>线下门店</dt>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/c/xiaomizhijia/" target="_blank" data-stat-id="06c2e27a7be23279" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-06c2e27a7be23279', '//www.mi.com/c/xiaomizhijia/', 'pcpid', '']);">小米之家</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="2c3f76e82e08387a" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-2c3f76e82e08387a', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);">服务网点</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/static/familyLocation/" target="_blank" data-stat-id="0ffdd6b347037808" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-0ffdd6b347037808', '//www.mi.com/static/familyLocation/', 'pcpid', '']);">授权体验店</a>
											</dd>

										</dl>

										<dl class="col-links ">
											<dt>关于小米</dt>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/about/" target="_blank" data-stat-id="56180583cea2d33a" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-56180583cea2d33a', '//www.mi.com/about/', 'pcpid', '']);">了解小米</a>
											</dd>

											<dd>
												<a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="848c38c2b3227525" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-848c38c2b3227525', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/ir/" target="_blank" data-stat-id="27853a704e82b110" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-27853a704e82b110', '//www.mi.com/ir/', 'pcpid', '']);">投资者关系</a>
											</dd>

										</dl>

										<dl class="col-links ">
											<dt>关注我们</dt>

											<dd>
												<a rel="nofollow" href="https://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="c3c91df9e06136d3" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-c3c91df9e06136d3', 'https://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a>
											</dd>

											<dd>
												<a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" data-stat-id="9ca26c080722ade4" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-9ca26c080722ade4', '#J_modalWeixin', 'pcpid', '']);">官方微信</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/about/contact/" target="_blank" data-stat-id="c3271068302e9796" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-c3271068302e9796', '//www.mi.com/about/contact/', 'pcpid', '']);">联系我们</a>
											</dd>

										</dl>

										<dl class="col-links ">
											<dt>特色服务</dt>

											<dd>
												<a rel="nofollow" href="https://order.mi.com/queue/f2code" target="_blank" data-stat-id="3952966c45898f52" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-3952966c45898f52', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://www.mi.com/giftcode/" target="_blank" data-stat-id="6b7f49cb33f58cd6" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-6b7f49cb33f58cd6', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a>
											</dd>

											<dd>
												<a rel="nofollow" href="https://order.mi.com/misc/checkitem" target="_blank" data-stat-id="eced7e442d440a9b" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-eced7e442d440a9b', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a>
											</dd>

										</dl>

										<div class="col-contact">
											<p class="phone">400-100-5678</p>
											<p>
												周一至周日 8:00-18:00<br>（仅收市话费）
											</p>
											<a rel="nofollow" class="btn btn-line-primary btn-small" href="https://www.mi.com/service/contact/" target="_blank" data-stat-id="586c325a68856034" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-586c325a68856034', '//www.mi.com/service/contact/', 'pcpid', '']);"><i class="iconfont"></i> 联系客服</a>
										</div>
									</div>
								</div>
							</div>
							<div class="site-info">
								<div class="container">
									<div class="logo ir">小米官网</div>
									<div class="info-text">
										<p class="sites">
											<a rel="nofollow" href="https://www.mi.com/index.html" target="_blank" data-stat-id="3c24bedbe72068ef" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-3c24bedbe72068ef', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span>
											<a rel="nofollow" href="https://www.miui.com/" target="_blank" data-stat-id="b6619e0b1662ec98" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-b6619e0b1662ec98', 'https://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span>
											<a rel="nofollow" href="https://home.mi.com/index.html" target="_blank" data-stat-id="5b40bbf76553f09b" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-5b40bbf76553f09b', 'https://home.mi.com/index.html', 'pcpid', '']);">米家</a><span class="sep">|</span>
											<a rel="nofollow" href="http://www.miliao.com/" target="_blank" data-stat-id="7a05b23dfa6b690a" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-7a05b23dfa6b690a', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span>
											<a rel="nofollow" href="https://www.duokan.com/" target="_blank" data-stat-id="c76bea8185c069f0" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-c76bea8185c069f0', 'https://www.duokan.com/', 'pcpid', '']);">多看</a><span class="sep">|</span>
											<a rel="nofollow" href="http://game.xiaomi.com/" target="_blank" data-stat-id="98aed750cbf887e2" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-98aed750cbf887e2', 'http://game.xiaomi.com/', 'pcpid', '']);">游戏</a><span class="sep">|</span>
											<a rel="nofollow" href="http://www.miwifi.com/" target="_blank" data-stat-id="36fb9518eb4bebc4" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-36fb9518eb4bebc4', 'http://www.miwifi.com/', 'pcpid', '']);">路由器</a><span class="sep">|</span>
											<a rel="nofollow" href="https://www.mi.com/micard/" target="_blank" data-stat-id="829fc8b0a225f6f6" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-829fc8b0a225f6f6', '//www.mi.com/micard/', 'pcpid', '']);">米粉卡</a><span class="sep">|</span>
											<a rel="nofollow" href="https://b.mi.com/?client_id=180100031058&amp;masid=17409.0358" target="_blank" data-stat-id="4155d2fc362374f4" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4155d2fc362374f4', 'https://b.mi.com/client_id=180100031058&amp;masid=17409.0358', 'pcpid', '']);">政企服务</a><span class="sep">|</span>
											<a rel="nofollow" href="https://xiaomi.tmall.com/" target="_blank" data-stat-id="19202dd049c8ded3" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-19202dd049c8ded3', 'https://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span>
											<a rel="nofollow" href="https://www.mi.com/about/privacy/" target="_blank" data-stat-id="de44ae05ee47c86a" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-de44ae05ee47c86a', 'https://www.mi.com/about/privacy/', 'pcpid', '']);">隐私政策</a><span class="sep">|</span>
											<a rel="nofollow" href="https://static.mi.com/feedback/" target="_blank" data-stat-id="29b6bc532d1dc118" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-29b6bc532d1dc118', 'https://static.mi.com/feedback/', 'pcpid', '']);">问题反馈</a><span class="sep">|</span>
											<a rel="nofollow" href="https://www.mi.com/jiancha/" target="_blank" data-stat-id="8c0aa21164085ae4" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-8c0aa21164085ae4', '//www.mi.com/jiancha/', 'pcpid', '']);">廉正举报</a><span class="sep">|</span>
											<a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal" data-stat-id="f517f9c2a0dbc9b9" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-f517f9c2a0dbc9b9', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>
										</p>
										<p>©
											<a href="https://www.mi.com/" target="_blank" title="mi.com" data-stat-id="c5215245524f0e73" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-c5215245524f0e73', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号
											<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="1a3be8ddffff1bcd" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-1a3be8ddffff1bcd', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a>
											<a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="cfa236ff35a7213e" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-cfa236ff35a7213e', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a>
											<a rel="nofollow" href="https://i8.mifile.cn/b2c-mimall-media/63cbc1342511938fc1395113f81324c4.jpg" target="_blank" data-stat-id="54f6a5fc8e0dd530" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-54f6a5fc8e0dd530', '//i8.mifile.cn/b2c-mimall-media/63cbc1342511938fc1395113f81324c4.jpg', 'pcpid', '']);">京网文[2017]1530-131号</a>

											<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
									</div>
									<div class="info-links">
										<a rel="nofollow" href="https://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank" data-stat-id="1290f247592c3186" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-1290f247592c3186', '//privacy.truste.com/privacy-seal/validationrid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid', '']);"><img rel="nofollow" src="images/truste.png" alt="TRUSTe Privacy Certification"></a>
										<a rel="nofollow" href="https://search.szfw.org/cert/l/CX20120926001783002010" target="_blank" data-stat-id="5ce65b599ac6a4a1" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-5ce65b599ac6a4a1', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid', '']);"><img rel="nofollow" src="images/v-logo-2.png" alt="诚信网站"></a>
										<a rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank" data-stat-id="cea1555b9a18cd76" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-cea1555b9a18cd76', 'https://ss.knet.cn/verifyseal.dllsn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid', '']);"><img rel="nofollow" src="images/v-logo-1.png" alt="可信网站"></a>
										<a rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank" data-stat-id="413bf96cf26e26fd" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-413bf96cf26e26fd', 'http://www.315online.com.cn/member/315140007.html', 'pcpid', '']);"><img rel="nofollow" src="images/v-logo-3.png" alt="网上交易保障中心"></a>
										<a rel="nofollow" href="https://www.mi.com/service/buy/commitment/" target="_blank" data-stat-id="1057acc0b02ccb79" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-1057acc0b02ccb79', 'https://www.mi.com/service/buy/commitment/', 'pcpid', '']);"><img rel="nofollow" src="images/ba10428a4f9495ac310fd0b5e0cf8370.png" alt="诚信经营 放心消费"></a>
									</div>
								</div>
								<div class="slogan ir">探索黑科技，小米为发烧而生</div>
							</div>
							<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
								<div class="modal-hd">
									<a class="close" data-dismiss="modal" data-stat-id="4f476044abeda0e7" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4f476044abeda0e7', '', 'pcpid', '']);"><i class="iconfont"></i></a>
									<span class="title">小米手机官方微信二维码</span>
								</div>
								<div class="modal-bd">
									<img alt="" src="images/weixin.jpg" width="680" height="340">
								</div>
							</div>
							<!-- .modal-weixin END -->
							<div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue">
								<div class="modal-body">
									<span class="close" data-dismiss="modal" aria-hidden="true">退出排队</span>
									<div class="con">
										<div class="title">正在排队，请稍候喔！</div>
										<div class="queue-tip-box">
											<p class="queue-tip">当前人数较多，请您耐心等待，排队期间请不要关闭页面。</p>
											<p class="queue-tip">时常来官网看看，最新产品和活动信息都会在这里发布。</p>
											<p class="queue-tip">下载小米商城 App 玩玩吧！产品开售信息抢先知道。</p>
											<p class="queue-tip">发现了让你眼前一亮的小米产品，别忘了分享给朋友！</p>
											<p class="queue-tip">产品开售前会有预售信息，关注官网首页就不会错过。</p>
										</div>
									</div>

									<div class="queue-posters">
										<div class="poster poster-3"></div>
										<div class="poster poster-2"></div>
										<div class="poster poster-1"></div>
										<div class="poster poster-4"></div>
										<div class="poster poster-5"></div>
									</div>
								</div>
							</div>
							<!-- .xm-dm-queue END -->
							<div id="J_bigtapError" class="modal modal-hide modal-bigtap-error">
								<span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont"></i></span>
								<div class="modal-body">
									<h3>抱歉，网络拥堵无法连接服务器</h3>
									<p class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p>
									<p>
										<a class="btn btn-primary" id="J_bigtapRetry" data-stat-id="682ae4b7ee285eb5" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-682ae4b7ee285eb5', '', 'pcpid', '']);">重试</a>
									</p>
								</div>
							</div>

							<div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode">
								<span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
								<div class="modal-body">
									<h3 class="title">为防黄牛，请您输入下面的验证码</h3>
									<p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。<br> 所以，这次劳烦您多输一次验证码，我们一起防黄牛。
									</p>
									<div class="mode-loading" id="J_bigtapModeLoading">
										<img src="images/loading.gif" alt="" width="32" height="32">
										<a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);" data-stat-id="26c326d5e29899a2" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-26c326d5e29899a2', 'javascript:void0', 'pcpid', '']);">网络错误，点击重新获取验证码！</a>
									</div>
									<div class="mode-action hide" id="J_bigtapModeAction">
										<div class="mode-con" id="J_bigtapModeContent"></div>
										<input name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
										<p class="tip" id="J_bigtapModeTip"></p>
										<a class="btn  btn-gray" id="J_bigtapModeSubmit" data-stat-id="d9de67af73fe8068" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-d9de67af73fe8068', '', 'pcpid', '']);">确认</a>
									</div>
								</div>
							</div>
							<!-- .xm-dm-error END -->
							<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
								<div class="modal-hd">
									<a class="close" data-dismiss="modal" data-stat-id="c4de0c6bff75d588" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-c4de0c6bff75d588', '', 'pcpid', '']);"><i class="iconfont"></i></a>
									<span class="title">Select Region</span>
								</div>
								<div class="modal-bd">
									<h3>Welcome to Mi.com</h3>
									<p class="modal-globalSites-tips">Please select your country or region</p>
									<p class="modal-globalSites-links clearfix">
										<a href="https://www.mi.com/index.html" data-stat-id="7b078cf76427edc7" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-7b078cf76427edc7', '//www.mi.com/index.html', 'pcpid', '']);">Mainland China</a>
										<a href="https://www.mi.com/hk/" data-stat-id="beac71f87334dd18" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-beac71f87334dd18', '//www.mi.com/hk/', 'pcpid', '']);">Hong Kong</a>
										<a href="https://www.mi.com/tw/" data-stat-id="2e33a88522e3174f" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-2e33a88522e3174f', '//www.mi.com/tw/', 'pcpid', '']);">Taiwan</a>
										<a href="https://www.mi.com/sg/" data-stat-id="563b6470a51fa63a" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-563b6470a51fa63a', '//www.mi.com/sg/', 'pcpid', '']);">Singapore</a>
										<a href="https://www.mi.com/my/" data-stat-id="413c3a7330c88736" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-413c3a7330c88736', '//www.mi.com/my/', 'pcpid', '']);">Malaysia</a>
										<a href="https://www.mi.com/ph/" data-stat-id="2645496e7d096cbd" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-2645496e7d096cbd', '//www.mi.com/ph/', 'pcpid', '']);">Philippines</a>
										<a href="https://www.mi.com/in/" data-stat-id="b80db43dc925c5f7" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-b80db43dc925c5f7', '//www.mi.com/in/', 'pcpid', '']);">India</a>
										<a href="https://www.mi.com/id/" data-stat-id="3b739d2eadfe921a" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-3b739d2eadfe921a', '//www.mi.com/id/', 'pcpid', '']);">Indonesia</a>
										<a href="https://www.mi.com/en/" data-stat-id="08433689c81b7ae9" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-08433689c81b7ae9', '//www.mi.com/en/', 'pcpid', '']);">Global Home</a>
										<a href="https://www.mi.com/mena/" data-stat-id="69a8e855f892eef0" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-69a8e855f892eef0', '//www.mi.com/mena/', 'pcpid', '']);">MENA</a>
										<a href="https://www.mi.com/pl/" data-stat-id="57f47dffc04ca07e" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-57f47dffc04ca07e', '//www.mi.com/pl/', 'pcpid', '']);">Poland</a>
										<a href="https://www.mi.com/ua/" data-stat-id="efecb97aa61c149b" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-efecb97aa61c149b', '//www.mi.com/ua/', 'pcpid', '']);">Ukraine</a>
										<a href="https://www.mi.com/ru/" data-stat-id="a3867181fb7a1ea7" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-a3867181fb7a1ea7', '//www.mi.com/ru/', 'pcpid', '']);">Russia</a>
										<a href="https://www.mi.com/vn/" data-stat-id="21dfee2bfc16096e" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-21dfee2bfc16096e', '//www.mi.com/vn/', 'pcpid', '']);">Vietnam</a>
										<a href="https://www.mi.com/mx/" data-stat-id="b9977dfa00befe8d" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-b9977dfa00befe8d', '//www.mi.com/mx/', 'pcpid', '']);">Mexico</a>
										<a href="https://www.mi.com/kr/" data-stat-id="8cc1140f5e403fdd" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-8cc1140f5e403fdd', '//www.mi.com/kr/', 'pcpid', '']);">Korea</a>
										<a href="https://www.mi.com/eg/" data-stat-id="a9f6e81830cb4431" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-a9f6e81830cb4431', '//www.mi.com/eg/', 'pcpid', '']);">Egypt</a>
										<a href="https://www.mi.com/th/" data-stat-id="ab37e047cb63e001" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-ab37e047cb63e001', '//www.mi.com/th/', 'pcpid', '']);">Thailand</a>
										<a href="https://www.mi.com/es/" data-stat-id="af272fa55fddeacb" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-af272fa55fddeacb', '//www.mi.com/es/', 'pcpid', '']);">Spain</a>
										<a href="https://www.mi.com/us/" data-stat-id="e664da85b7f4a8c2" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-e664da85b7f4a8c2', '//www.mi.com/us/', 'pcpid', '']);">United States</a>
										<a href="https://www.mi.com/it/" data-stat-id="b60f1ee05bf04648" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-b60f1ee05bf04648', '//www.mi.com/it/', 'pcpid', '']);">Italy</a>
										<a href="https://www.mi.com/fr/index.html" data-stat-id="a10d1ef56ab86845" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-a10d1ef56ab86845', '//www.mi.com/fr/index.html', 'pcpid', '']);">France</a>
										<a href="https://www.mi.com/bd/" data-stat-id="f46b7c4d6c78b410" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-f46b7c4d6c78b410', '//www.mi.com/bd/', 'pcpid', '']);">Bangladesh</a>
									</p>
								</div>
							</div>
							<!-- .modal-globalSites END -->
							<script src="home/js/base.js"></script>
							<script>
								(function() {
									MI.namespace('GLOBAL_CONFIG');
									MI.GLOBAL_CONFIG = {
										orderSite: '//order.mi.com',
										orderSSLSite: 'https://order.mi.com',
										wwwSite: '//www.mi.com',
										cartSite: '//cart.mi.com',
										itemSite: '//item.mi.com',
										assetsSite: '//s01.mifile.cn',
										listSite: '//list.mi.com',
										searchSite: '//search.mi.com',
										mySite: '//my.mi.com',
										damiaoSite: '//tp.hd.mi.com/',
										damiaoGoodsId: ["2160400006", "2160400007", "2162100004", "2162800010", "2155300001", "2155300002", "2163500025", "2163500026", "2163500027", "2164200021", "2142400036", "2170800008", "2171000055", "2171500039", "2171600005", "1171800032", "1171800031", "1171800030", "1171800035", "1171800034", "1171800033", "2171500038", "2171800016", "2171500037", "2171900024"],
										logoutUrl: '//order.mi.com/site/logout',
										staticSite: '//static.mi.com',
										quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
									};
									MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
									MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
									MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
									MI.miniCart.init();
									MI.updateMiniCart();
								})();
							</script>
							<script type="text/javascript" src="home/js/cart.js"></script>
							<!-- <script src="//i1.mifile.cn/f/i/15/stat/home/js/xmsg_ti.js"></script> -->
							<script>
								var _msq = _msq || [];
								_msq.push(['setDomainId', 100]);
								_msq.push(['trackPageView']);
								(function() {
									var ms = document.createElement('script');
									ms.type = 'text/javascript';
									ms.async = true;
									ms.src = '//s1.mi.com/stat/18/xmst.js';
									var s = document.getElementsByTagName('script')[0];
									s.parentNode.insertBefore(ms, s);
								})();
							</script>
							<!--mae_monitor-->

	</body>

</html>