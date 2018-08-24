<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<script type="text/javascript" async="" src="home/js/mstr.js"></script>
		<script type="text/javascript" async="" src="home/js/jquery.js"></script>
		<script type="text/javascript" async="" src="home/js/xmst.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="UTF-8">
		<title>订单详情</title>
		<meta name="viewport" content="width=1226">
		<meta name="description" content="">
		<meta name="keywords" content="小米商城">
		<link rel="shortcut icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
		<link rel="icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="home/css/base.css">
		<link rel="stylesheet" type="text/css" href="home/css/order-view.css">
		<link rel="stylesheet" type="text/css" href="home/css/main.css">
	</head>

	<body>
		<div class="site-topbar">
			<div class="container">
				<div class="topbar-nav">
					<a href="https://www.mi.com/index.html" data-stat-id="b9b0bdeb7e2775a6" onclick="_msq.push(['trackEvent', '60439036470411e8-b9b0bdeb7e2775a6', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span>
					<a href="https://www.miui.com/" target="_blank" data-stat-id="6128e9a75953f633" onclick="_msq.push(['trackEvent', '60439036470411e8-6128e9a75953f633', 'https://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span>
					<a href="https://iot.mi.com/index.html" data-stat-id="7059e99e15e28c85" onclick="_msq.push(['trackEvent', '60439036470411e8-7059e99e15e28c85', 'https://iot.mi.com/index.html', 'pcpid', '']);">IoT</a><span class="sep">|</span>
					<a href="https://i.mi.com/" target="_blank" data-stat-id="8c58363a5ababe2d" onclick="_msq.push(['trackEvent', '60439036470411e8-8c58363a5ababe2d', 'https://i.mi.com/', 'pcpid', '']);">云服务</a><span class="sep">|</span>
					<a href="https://jr.mi.com/?from=micom" target="_blank" data-stat-id="095147a94541896b" onclick="_msq.push(['trackEvent', '60439036470411e8-095147a94541896b', 'https://jr.mi.comfrom=micom', 'pcpid', '']);">金融</a><span class="sep">|</span>
					<a href="https://youpin.mi.com/" target="_blank" data-stat-id="3a506062e830f5eb" onclick="_msq.push(['trackEvent', '60439036470411e8-3a506062e830f5eb', 'https://youpin.mi.com/', 'pcpid', '']);">有品</a><span class="sep">|</span>
					<a href="https://shuidi.mi.com/" target="_blank" data-stat-id="17e85039722a6097" onclick="_msq.push(['trackEvent', '60439036470411e8-17e85039722a6097', 'https://shuidi.mi.com/', 'pcpid', '']);">小爱开放平台</a><span class="sep">|</span>
					<a href="https://b.mi.com/?client_id=180100031058&amp;masid=17409.0358" target="_blank" data-stat-id="3689a970d3fdd20f" onclick="_msq.push(['trackEvent', '60439036470411e8-3689a970d3fdd20f', 'https://b.mi.com/client_id=180100031058&amp;masid=17409.0358', 'pcpid', '']);">政企服务</a><span class="sep">|</span>
					<a href="#J_modal-globalSites" data-toggle="modal" data-stat-id="0bedcd6ff990438a" onclick="_msq.push(['trackEvent', '60439036470411e8-0bedcd6ff990438a', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>
				</div>
				<div class="topbar-cart" id="J_miniCartTrigger">
					<a class="cart-mini" id="J_miniCartBtn" href="https://static.mi.com/cart/" data-stat-id="8f0937fe6410ddc3" onclick="_msq.push(['trackEvent', '60439036470411e8-8f0937fe6410ddc3', '//static.mi.com/cart/', 'pcpid', '']);"><i class="iconfont"></i>购物车<span class="cart-mini-num J_cartNum">（0）</span></a>
					<div class="cart-menu" id="J_miniCartMenu">
						<div class="loading">
							<div class="loader"></div>
						</div>
					</div>
				</div>
				<div class="topbar-info" id="J_userInfo"><span class="user"><a rel="nofollow" class="user-name" href="https://my.mi.com/portal" target="_blank" data-stat-id="932c9bb456f33799" onclick="_msq.push(['trackEvent', '60439036470411e8-932c9bb456f33799', '//my.mi.com/portal', 'pcpid', '']);"><span class="name">筱然</span><i class="iconfont"></i></a>
					<ul class="user-menu">
						<li>
							<a rel="nofollow" href="https://my.mi.com/portal" target="_blank" data-stat-id="30a4bac2fc07ab03" onclick="_msq.push(['trackEvent', '60439036470411e8-30a4bac2fc07ab03', '//my.mi.com/portal', 'pcpid', '']);">个人中心</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/user/comment" target="_blank" data-stat-id="343fbd50889adf1e" onclick="_msq.push(['trackEvent', '60439036470411e8-343fbd50889adf1e', 'https://order.mi.com/user/comment', 'pcpid', '']);">评价晒单</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/user/favorite" target="_blank" data-stat-id="31bd21ed122c6990" onclick="_msq.push(['trackEvent', '60439036470411e8-31bd21ed122c6990', 'https://order.mi.com/user/favorite', 'pcpid', '']);">我的喜欢</a>
						</li>
						<li>
							<a rel="nofollow" href="https://account.xiaomi.com/" target="_blank" data-stat-id="450bcb3f3a763be8" onclick="_msq.push(['trackEvent', '60439036470411e8-450bcb3f3a763be8', '//account.xiaomi.com/', 'pcpid', '']);">小米账户</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/site/logout" data-stat-id="6e46f9e5682cc798" onclick="_msq.push(['trackEvent', '60439036470411e8-6e46f9e5682cc798', 'https://order.mi.com/site/logout', 'pcpid', '']);">退出登录</a>
						</li>
					</ul>
					</span><span class="sep">|</span><span class="message"><a rel="nofollow" href="https://order.mi.com/message/list" data-stat-id="775208ab005f49c0" onclick="_msq.push(['trackEvent', '60439036470411e8-775208ab005f49c0', 'https://order.mi.com/message/list', 'pcpid', '']);">消息通知<i class="J_miMessageTotal"></i></a></span><span class="sep">|</span>
					<a rel="nofollow" class="link link-order" href="https://static.mi.com/order/" target="_blank" data-stat-id="dd8cd03c29f5ba77" onclick="_msq.push(['trackEvent', '60439036470411e8-dd8cd03c29f5ba77', '//static.mi.com/order/', 'pcpid', '']);">我的订单</a>
				</div>
			</div>
		</div>

		<div class="site-header">
			<div class="container">
				<div class="header-logo">
					<a class="logo ir" href="https://www.mi.com/index.html" title="小米官网" data-stat-id="18bc2769f69cba7a" onclick="_msq.push(['trackEvent', '60439036470411e8-18bc2769f69cba7a', '//www.mi.com/index.html', 'pcpid', '']);">小米官网</a>
				</div>
				<div class="header-nav">
					<ul class="nav-list J_navMainList clearfix">
						<li id="J_navCategory" class="nav-category">
							<a class="link-category" href="https://list.mi.com/" data-stat-id="7f1e9e367e436895" onclick="_msq.push(['trackEvent', '60439036470411e8-7f1e9e367e436895', '//list.mi.com', 'pcpid', '']);"><span class="text">全部商品分类</span></a>
							<div class="site-category">
								<ul id="J_categoryList" class="site-category-list clearfix">
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/1915.html" data-stat-id="29f8592d89ac50a1" onclick="_msq.push(['trackEvent', '60439036470411e8-29f8592d89ac50a1', '//www.mi.com/p/1915.html', 'pcpid', '']);">手机 电话卡<i class="iconfont"></i></a>
										<div class="children clearfix children-col-4">
											<ul class="children-list children-list-col children-list-col-1">
												<li>
													<a class="link" href="https://www.mi.com/mi8/" data-stat-id="09fe7ee5ded8beac" onclick="_msq.push(['trackEvent', '60439036470411e8-09fe7ee5ded8beac', 'https://www.mi.com/mi8/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/m8-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米8</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mi8i/" data-stat-id="3c29d8030f1b2875" onclick="_msq.push(['trackEvent', '60439036470411e8-3c29d8030f1b2875', 'https://www.mi.com/mi8i/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/m8se-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米8 SE</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mix2s/" data-stat-id="a0ff04e201b2dd64" onclick="_msq.push(['trackEvent', '60439036470411e8-a0ff04e201b2dd64', 'https://www.mi.com/mix2s/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mix2s80-80white.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米MIX 2S</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/max3/" data-stat-id="ed402ccb24ab8839" onclick="_msq.push(['trackEvent', '60439036470411e8-ed402ccb24ab8839', 'https://www.mi.com/max3/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/max3-80-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米Max 3</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mi6x/" data-stat-id="5ded6d32b4c478fd" onclick="_msq.push(['trackEvent', '60439036470411e8-5ded6d32b4c478fd', 'https://www.mi.com/mi6x/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/80808080808080.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米6X</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/blackshark/" data-stat-id="4750868913824795" onclick="_msq.push(['trackEvent', '60439036470411e8-4750868913824795', 'https://www.mi.com/blackshark/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/heisha-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">黑鲨游戏手机</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-2">
												<li>
													<a class="link" href="https://www.mi.com/mix2/" data-stat-id="d4cd90aa01524dc6" onclick="_msq.push(['trackEvent', '60439036470411e8-d4cd90aa01524dc6', 'https://www.mi.com/mix2/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mix2-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米MIX 2</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/max2/" data-stat-id="939258e7a36b556a" onclick="_msq.push(['trackEvent', '60439036470411e8-939258e7a36b556a', '//www.mi.com/max2/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/max2_80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米Max 2</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/redmi6pro/" data-stat-id="7dd41212464c53d7" onclick="_msq.push(['trackEvent', '60439036470411e8-7dd41212464c53d7', '//www.mi.com/redmi6pro/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/6pro140-140.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">红米6 Pro</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/redmi6/" data-stat-id="a2e2903049480e7f" onclick="_msq.push(['trackEvent', '60439036470411e8-a2e2903049480e7f', '//www.mi.com/redmi6/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/666666.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">红米6</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/redmi6a/" data-stat-id="5f34b98c693a9c8a" onclick="_msq.push(['trackEvent', '60439036470411e8-5f34b98c693a9c8a', '//www.mi.com/redmi6a/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/6AAAA.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">红米6A</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/redminote5/" data-stat-id="8b42e9ccd1ce3aad" onclick="_msq.push(['trackEvent', '60439036470411e8-8b42e9ccd1ce3aad', 'https://www.mi.com/redminote5/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/note5-80-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">红米Note 5</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-3">
												<li>
													<a class="link" href="https://www.mi.com/redmis2/" data-stat-id="f19207b7f4a590d2" onclick="_msq.push(['trackEvent', '60439036470411e8-f19207b7f4a590d2', 'https://www.mi.com/redmis2/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/s2-80-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">红米S2</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/redmi5/" data-stat-id="f5bb5e197ded4f31" onclick="_msq.push(['trackEvent', '60439036470411e8-f5bb5e197ded4f31', '//www.mi.com/redmi5/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/redmi5P-80-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">红米5 Plus</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/p/5592.html" data-stat-id="e57761425f2ac373" onclick="_msq.push(['trackEvent', '60439036470411e8-e57761425f2ac373', '//www.mi.com/p/5592.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">移动4G+专区</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/compare/" data-stat-id="a52f047d15d6d17e" onclick="_msq.push(['trackEvent', '60439036470411e8-a52f047d15d6d17e', '//www.mi.com/compare/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/15/goods/sidebar/compare.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">对比手机</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/micard" data-stat-id="c8766b6c2f066c4c" onclick="_msq.push(['trackEvent', '60439036470411e8-c8766b6c2f066c4c', 'https://www.mi.com/micard', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mifenka-1.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">米粉卡 日租卡</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mimobile/" data-stat-id="164f9c9acc9212e8" onclick="_msq.push(['trackEvent', '60439036470411e8-164f9c9acc9212e8', '//www.mi.com/mimobile/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/15/goods/sidebar/mimobile.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米移动 电话卡</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-4">
												<li>
													<a class="link" href="https://item.mi.com/product/7532.html" data-stat-id="c0739a6da31cd176" onclick="_msq.push(['trackEvent', '60439036470411e8-c0739a6da31cd176', 'https://item.mi.com/product/7532.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/weixiu80-80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">手机上门维修</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/1995.html" data-stat-id="4eeab3694d3db21b" onclick="_msq.push(['trackEvent', '60439036470411e8-4eeab3694d3db21b', 'https://www.mi.com/p/1995.html', 'pcpid', '']);">电视 盒子<i class="iconfont"></i></a>
										<div class="children clearfix children-col-4">
											<ul class="children-list children-list-col children-list-col-1">
												<li>
													<a class="link" href="https://www.mi.com/mitv4/75/" data-stat-id="0cf73b767555ced6" onclick="_msq.push(['trackEvent', '60439036470411e8-0cf73b767555ced6', 'https://www.mi.com/mitv4/75/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4-75.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4 75英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4A/32/" data-stat-id="f7b8445436c96a9e" onclick="_msq.push(['trackEvent', '60439036470411e8-f7b8445436c96a9e', '///www.mi.com/mitv4A/32/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4A-32.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4A 32英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4A/40/" data-stat-id="d153f06da8e89954" onclick="_msq.push(['trackEvent', '60439036470411e8-d153f06da8e89954', 'https://www.mi.com/mitv4A/40/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4A-40.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4A 40英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4A/43/?cfrom=search" data-stat-id="2c664bfa1c8cc81f" onclick="_msq.push(['trackEvent', '60439036470411e8-2c664bfa1c8cc81f', 'https://www.mi.com/mitv4A/43/cfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4A-43.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4A 43英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4A/43y" data-stat-id="f79fcee6f9703191" onclick="_msq.push(['trackEvent', '60439036470411e8-f79fcee6f9703191', 'https://www.mi.com/mitv4A/43y', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4A-43QC.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4A 43英寸青春版</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4A/49/" data-stat-id="e5e6517cd565dc87" onclick="_msq.push(['trackEvent', '60439036470411e8-e5e6517cd565dc87', '//www.mi.com/mitv4A/49/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4A-49.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4A 49英寸</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-2">
												<li>
													<a class="link" href="https://www.mi.com/mitv4A/50" data-stat-id="6f37d1e952a0b4df" onclick="_msq.push(['trackEvent', '60439036470411e8-6f37d1e952a0b4df', '//www.mi.com/mitv4A/50', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4A-50.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4A 50英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4A/55/" data-stat-id="33d8c0521480915e" onclick="_msq.push(['trackEvent', '60439036470411e8-33d8c0521480915e', '//www.mi.com/mitv4A/55/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4A-55.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4A 55英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4A/65/" data-stat-id="da6c81aed45354b2" onclick="_msq.push(['trackEvent', '60439036470411e8-da6c81aed45354b2', '//www.mi.com/mitv4A/65/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4A-65.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4A 65英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4x/55/" data-stat-id="6563fb7762342948" onclick="_msq.push(['trackEvent', '60439036470411e8-6563fb7762342948', '//www.mi.com/mitv4x/55/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4X-55.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4X 55英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4c/32/" data-stat-id="cf778eaf634e7180" onclick="_msq.push(['trackEvent', '60439036470411e8-cf778eaf634e7180', '//www.mi.com/mitv4c/32/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4C-32.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4C 32英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4c/43/" data-stat-id="7bb349b24fecf315" onclick="_msq.push(['trackEvent', '60439036470411e8-7bb349b24fecf315', '//www.mi.com/mitv4c/43/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4C-43.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4C 43英寸</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-3">
												<li>
													<a class="link" href="https://www.mi.com/mitv4c/50/" data-stat-id="ca1aa214dbd629f6" onclick="_msq.push(['trackEvent', '60439036470411e8-ca1aa214dbd629f6', 'https://www.mi.com/mitv4c/50/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4C-50.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4C 50英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4c/55/" data-stat-id="bf9d681d3dfec723" onclick="_msq.push(['trackEvent', '60439036470411e8-bf9d681d3dfec723', 'https://www.mi.com/mitv4c/55/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4C-55.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4C 55英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%B0%8F%E7%B1%B3%E7%94%B5%E8%A7%86%E4%BD%93%E8%82%B2%E7%89%88" data-stat-id="aac10013a868048f" onclick="_msq.push(['trackEvent', '60439036470411e8-aac10013a868048f', '//search.mi.com/search_E5B08FE7B1B3E794B5E8A786E4BD93E882B2E78988', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TVTYB.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视 体育版</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4/49/" data-stat-id="58ea30c4b83cb569" onclick="_msq.push(['trackEvent', '60439036470411e8-58ea30c4b83cb569', '//www.mi.com/mitv4/49/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4-49.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4 49英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4/55/" data-stat-id="4634a6fac17546f8" onclick="_msq.push(['trackEvent', '60439036470411e8-4634a6fac17546f8', '//www.mi.com/mitv4/55/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4-55.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4 55英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4/65/" data-stat-id="afee684dc84d7888" onclick="_msq.push(['trackEvent', '60439036470411e8-afee684dc84d7888', '//www.mi.com/mitv4/65/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4-65.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4 65英寸</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-4">
												<li>
													<a class="link" href="https://www.mi.com/mitv4s/55q/" data-stat-id="507e06d704333769" onclick="_msq.push(['trackEvent', '60439036470411e8-507e06d704333769', 'https://www.mi.com/mitv4s/55q/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4S-55Q.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4S 55英寸曲面</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4s/55/" data-stat-id="532c1a98a40bd200" onclick="_msq.push(['trackEvent', '60439036470411e8-532c1a98a40bd200', 'https://www.mi.com/mitv4s/55/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4S-55.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4S 55英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4s/50/" data-stat-id="3b7b10cb699ac9fa" onclick="_msq.push(['trackEvent', '60439036470411e8-3b7b10cb699ac9fa', 'https://www.mi.com/mitv4s/50/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4S-50.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4S 50英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4s/43/" data-stat-id="1a458345240e0a67" onclick="_msq.push(['trackEvent', '60439036470411e8-1a458345240e0a67', 'https://www.mi.com/mitv4s/43/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4S-43.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4S 43英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mitv4s/32/" data-stat-id="bc68a9c55e2cad0c" onclick="_msq.push(['trackEvent', '60439036470411e8-bc68a9c55e2cad0c', 'https://www.mi.com/mitv4s/32/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/TV4S-32.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米电视4S 32英寸</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%9B%92%E5%AD%90-33" data-stat-id="77d772ec33da1d53" onclick="_msq.push(['trackEvent', '60439036470411e8-77d772ec33da1d53', '//search.mi.com/search_E79B92E5AD90-33', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/hezibai480_80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米盒子</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/2074.html" data-stat-id="0533d27676ffdc96" onclick="_msq.push(['trackEvent', '60439036470411e8-0533d27676ffdc96', 'https://www.mi.com/p/2074.html', 'pcpid', '']);">笔记本 平板<i class="iconfont"></i></a>
										<div class="children clearfix children-col-4">
											<ul class="children-list children-list-col children-list-col-1">
												<li>
													<a class="link" href="https://item.mi.com/product/10000108.html" data-stat-id="d3b42d925dc8bc56" onclick="_msq.push(['trackEvent', '60439036470411e8-d3b42d925dc8bc56', 'https://item.mi.com/product/10000108.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/pingban2.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米平板4</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_8%E4%BB%A3" data-stat-id="d3835487f7fcc707" onclick="_msq.push(['trackEvent', '60439036470411e8-d3835487f7fcc707', 'https://search.mi.com/search_8E4BBA3', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/youxiben-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米游戏本 15.6" 第八代</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/migaminglaptop/" data-stat-id="e8a86613c82d62d3" onclick="_msq.push(['trackEvent', '60439036470411e8-e8a86613c82d62d3', 'https://www.mi.com/migaminglaptop/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/80x80youxichuantu.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米游戏本 15.6"</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mibookair-12/" data-stat-id="c758b75ff6f2e49d" onclick="_msq.push(['trackEvent', '60439036470411e8-c758b75ff6f2e49d', '//www.mi.com/mibookair-12/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/bijiben80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">笔记本Air 12.5"</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mibookair/" data-stat-id="431ffdc43a959f24" onclick="_msq.push(['trackEvent', '60439036470411e8-431ffdc43a959f24', '//www.mi.com/mibookair/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/bijiben80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">笔记本Air 13.3" 独显</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mibookair-13in/" data-stat-id="62436dfc486b2033" onclick="_msq.push(['trackEvent', '60439036470411e8-62436dfc486b2033', 'https://www.mi.com/mibookair-13in/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/bijiben80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">笔记本Air 13.3" 集显</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-2">
												<li>
													<a class="link" href="https://www.mi.com/mibookair-13/" data-stat-id="5acf16f4fcfebb25" onclick="_msq.push(['trackEvent', '60439036470411e8-5acf16f4fcfebb25', 'https://www.mi.com/mibookair-13/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/80x80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">笔记本Air 13.3" 四核增强</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mibookpro/" data-stat-id="5ff1df68e99e3bfe" onclick="_msq.push(['trackEvent', '60439036470411e8-5ff1df68e99e3bfe', 'https://www.mi.com/mibookpro/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/WechatIMG605.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">笔记本Pro 15.6"</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mibookpro-gtx/?cfrom=search" data-stat-id="be11e4b88eecfb9e" onclick="_msq.push(['trackEvent', '60439036470411e8-be11e4b88eecfb9e', 'https://www.mi.com/mibookpro-gtx/cfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/PRO-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米笔记本15.6"  GTX版</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/1163000011.html" data-stat-id="8c41e22d28473521" onclick="_msq.push(['trackEvent', '60439036470411e8-8c41e22d28473521', '//item.mi.com/1163000011.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/15/goods/sidebar/usbzjqggg80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">HDMI转接器</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/1173700004.html?cfrom=search" data-stat-id="371b08b8683ad1da" onclick="_msq.push(['trackEvent', '60439036470411e8-371b08b8683ad1da', 'https://item.mi.com/1173700004.htmlcfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/vga.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">VGA 千兆网口转接器</span></a>
												</li>
												<li>
													<a class="link" href="https://list.mi.com/accessories/tag?id=neidanbao" data-stat-id="c03757d1e99639bc" onclick="_msq.push(['trackEvent', '60439036470411e8-c03757d1e99639bc', '//list.mi.com/accessories/tagid=neidanbao', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/neidanbao80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米笔记本内胆包</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-3">
												<li>
													<a class="link" href="https://www.mi.com/game-keyboard/?cfrom=search" data-stat-id="89b76d6e6b5fa1fb" onclick="_msq.push(['trackEvent', '60439036470411e8-89b76d6e6b5fa1fb', '//www.mi.com/game-keyboard/cfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/jianpan80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米游戏键盘</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/keyboard/" data-stat-id="d5a9bbecd46f15c6" onclick="_msq.push(['trackEvent', '60439036470411e8-d5a9bbecd46f15c6', '//www.mi.com/keyboard/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/ymjp80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">悦米机械键盘</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/1181300020.html" data-stat-id="38cd33cba61f51e9" onclick="_msq.push(['trackEvent', '60439036470411e8-38cd33cba61f51e9', 'https://item.mi.com/1181300020.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/jianpanbashi.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">悦米机械键盘Pro静音版</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mouse/" data-stat-id="d39680febe8c4d66" onclick="_msq.push(['trackEvent', '60439036470411e8-d39680febe8c4d66', '//www.mi.com/mouse/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/shubiao80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米便携鼠标</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/mouse-2/" data-stat-id="ae7f175265c200d1" onclick="_msq.push(['trackEvent', '60439036470411e8-ae7f175265c200d1', '//www.mi.com/mouse-2/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/wxsb80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小米无线鼠标</span></a>
												</li>
												<li>
													<a class="link" href="https://list.mi.com/59" data-stat-id="7ea6e969a7053528" onclick="_msq.push(['trackEvent', '60439036470411e8-7ea6e969a7053528', '//list.mi.com/59', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/xmsbd80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">鼠标垫</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-4">
												<li>
													<a class="link" href="https://www.mi.com/commutator-dp/" data-stat-id="8f97e6c8ad99f1ee" onclick="_msq.push(['trackEvent', '60439036470411e8-8f97e6c8ad99f1ee', 'https://www.mi.com/commutator-dp/', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/USBC80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">DisplayPort转接器</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/1173700032.html" data-stat-id="524fe7b54885290d" onclick="_msq.push(['trackEvent', '60439036470411e8-524fe7b54885290d', '//item.mi.com/1173700032.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/6838xiaozhuanjieqi.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">USB至千兆网口转接器</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%B8%B8%E6%88%8F%E9%BC%A0%E6%A0%87" data-stat-id="d052abddd4d2d42b" onclick="_msq.push(['trackEvent', '60439036470411e8-d052abddd4d2d42b', 'https://search.mi.com/search_游戏鼠标', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/youxishubiao80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">游戏鼠标</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%AC%94%E8%AE%B0%E6%9C%AC%E5%8F%8C%E8%82%A9%E5%8C%85" data-stat-id="280d939ccaf8c4e6" onclick="_msq.push(['trackEvent', '60439036470411e8-280d939ccaf8c4e6', 'https://search.mi.com/search_笔记本双肩包', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/bijibenshuangjianbao80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">笔记本双肩包</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E9%80%82%E9%85%8D%E5%99%A8" data-stat-id="3037822bb50aa526" onclick="_msq.push(['trackEvent', '60439036470411e8-3037822bb50aa526', 'https://search.mi.com/search_适配器', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/shipeiqi80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">USB-C电源适配器</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%AC%94%E8%AE%B0%E6%9C%AC%E5%B9%B3%E6%9D%BF%E9%85%8D%E4%BB%B6" data-stat-id="3debb3dcabce4119" onclick="_msq.push(['trackEvent', '60439036470411e8-3debb3dcabce4119', 'https://search.mi.com/search_E7AC94E8AEB0E69CACE5B9B3E69DBFE9858DE4BBB6', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/xiaomipingbanpeijian80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">平板配件</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/3469.html?client_id=180100041086&amp;masid=17409.0245" data-stat-id="1268b6cce0d6ef80" onclick="_msq.push(['trackEvent', '60439036470411e8-1268b6cce0d6ef80', '//www.mi.com/p/3469.htmlclient_id=180100041086&amp;masid=17409.0245', 'pcpid', '']);">家电 插线板<i class="iconfont"></i></a>
										<div class="children clearfix children-col-3">
											<ul class="children-list children-list-col children-list-col-1">
												<li>
													<a class="link" href="https://www.mi.com/aircondition/third" data-stat-id="d4a9de42537d3f71" onclick="_msq.push(['trackEvent', '60439036470411e8-d4a9de42537d3f71', 'https://www.mi.com/aircondition/third', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/kongtiaoguan140.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">米家互联网空调</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%87%80%E6%B0%B4%E5%99%A8-132" data-stat-id="cd13b34b55ef7761" onclick="_msq.push(['trackEvent', '60439036470411e8-cd13b34b55ef7761', 'https://search.mi.com/search_E58780E6B0B4E599A8-132', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/jingshuiqi80haha.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">净水器</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%87%80%E6%B0%B4%E5%99%A8%E6%BB%A4%E8%8A%AF" data-stat-id="bfc905e9d7cdaf67" onclick="_msq.push(['trackEvent', '60439036470411e8-bfc905e9d7cdaf67', 'https://search.mi.com/search_E58780E6B0B4E599A8E6BBA4E88AAF', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/lvxinbashi.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">净水器滤芯</span></a>
												</li>
												<li>
													<a class="link" href="https://www.mi.com/roomrobot/?cfrom=search" data-stat-id="61782103d68f4222" onclick="_msq.push(['trackEvent', '60439036470411e8-61782103d68f4222', 'https://www.mi.com/roomrobot/cfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/doodle/jiqiren.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">扫地机器人</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%89%AB%E5%9C%B0%E6%9C%BA%E5%99%A8%E4%BA%BA%E9%85%8D%E4%BB%B61-174" data-stat-id="4a8006d56c156870" onclick="_msq.push(['trackEvent', '60439036470411e8-4a8006d56c156870', 'https://search.mi.com/search_E689ABE59CB0E69CBAE599A8E4BABAE9858DE4BBB61-174', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/saodipeijian-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">扫地机配件</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%B1%B3%E5%AE%B6%E7%A9%BA%E6%B0%94%E5%87%80%E5%8C%96%E5%99%A8-116" data-stat-id="8f5a8b576e244702" onclick="_msq.push(['trackEvent', '60439036470411e8-8f5a8b576e244702', 'https://search.mi.com/search_E7B1B3E5AEB6E7A9BAE6B094E58780E58C96E599A8-116', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/jinghuaqi2S-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">空气净化器</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-2">
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%B1%B3%E5%AE%B6%E7%94%B5%E9%A5%AD%E7%85%B2" data-stat-id="ceb6023212f61188" onclick="_msq.push(['trackEvent', '60439036470411e8-ceb6023212f61188', 'https://search.mi.com/search_E7B1B3E5AEB6E794B5E9A5ADE785B2', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/yalidianfanbao-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">电饭煲</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/product/7528.html" data-stat-id="69f186999c71805f" onclick="_msq.push(['trackEvent', '60439036470411e8-69f186999c71805f', 'https://item.mi.com/product/7528.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/diancilu-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">电磁炉</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%9F%A5%E5%90%BE%E7%85%AE-0-0-0-0-1-0-0-0-1" data-stat-id="d87d5dd7cbafd00b" onclick="_msq.push(['trackEvent', '60439036470411e8-d87d5dd7cbafd00b', 'https://search.mi.com/search_E79FA5E590BEE785AE-0-0-0-0-1-0-0-0-1', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/tangguo-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">厨房用具</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%94%B5%E6%B0%B4%E5%A3%B6" data-stat-id="f5402bb943c388ba" onclick="_msq.push(['trackEvent', '60439036470411e8-f5402bb943c388ba', 'https://search.mi.com/search_E794B5E6B0B4E5A3B6', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/dianshuihu-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">电水壶</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%BB%A4%E6%B0%B4%E5%A3%B6" data-stat-id="a1210afe29c3f752" onclick="_msq.push(['trackEvent', '60439036470411e8-a1210afe29c3f752', 'https://search.mi.com/search_E6BBA4E6B0B4E5A3B6', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/lvshuihu80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">滤水壶</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/1182100014.html?cfrom=search" data-stat-id="df4571a5d58bbde5" onclick="_msq.push(['trackEvent', '60439036470411e8-df4571a5d58bbde5', 'https://item.mi.com/1182100014.htmlcfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/mijiadianfengshan80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">落地风扇</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-3">
												<li>
													<a class="link" href="https://www.mi.com/projector/?cfrom=search" data-stat-id="f23ff1ec27962a55" onclick="_msq.push(['trackEvent', '60439036470411e8-f23ff1ec27962a55', 'https://www.mi.com/projector/cfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/touyingyi80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">投影仪</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%81%AF%E5%85%B7" data-stat-id="46b1ebb0a924651e" onclick="_msq.push(['trackEvent', '60439036470411e8-46b1ebb0a924651e', 'https://search.mi.com/search_E781AFE585B7', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/xidingdeng-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">灯具</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%8F%92%E7%BA%BF%E6%9D%BF-125" data-stat-id="e5b4f6ade234ffc7" onclick="_msq.push(['trackEvent', '60439036470411e8-e5b4f6ade234ffc7', 'https://search.mi.com/search_E68F92E7BABFE69DBF-125', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/chaxianban80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">插线板</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/3507.html?client_id=180100041086&amp;masid=17409.0240" data-stat-id="9dad6ce7f06469d8" onclick="_msq.push(['trackEvent', '60439036470411e8-9dad6ce7f06469d8', '//www.mi.com/p/3507.htmlclient_id=180100041086&amp;masid=17409.0240', 'pcpid', '']);">出行 穿戴<i class="iconfont"></i></a>
										<div class="children clearfix children-col-2">
											<ul class="children-list children-list-col children-list-col-1">
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%89%8B%E7%8E%AF%E6%89%8B%E8%A1%A8-111" data-stat-id="058bd628eb5a4f26" onclick="_msq.push(['trackEvent', '60439036470411e8-058bd628eb5a4f26', 'https://search.mi.com/search_E6898BE78EAFE6898BE8A1A8-111', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/shouhuan3.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">手环手表</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_vr-163" data-stat-id="aedc427308bf6051" onclick="_msq.push(['trackEvent', '60439036470411e8-aedc427308bf6051', 'https://search.mi.com/search_vr-163', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/VRyitiji80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">VR</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%B9%B3%E8%A1%A1%E8%BD%A6-139" data-stat-id="56e5312020e369fc" onclick="_msq.push(['trackEvent', '60439036470411e8-56e5312020e369fc', 'https://search.mi.com/search_E5B9B3E8A1A1E8BDA6-139', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/scooter-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">平衡车</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%BB%91%E6%9D%BF%E8%BD%A6-178" data-stat-id="ea4d8a5d09059b85" onclick="_msq.push(['trackEvent', '60439036470411e8-ea4d8a5d09059b85', 'https://search.mi.com/search_E6BB91E69DBFE8BDA6-178', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/scooter2-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">滑板车</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%B9%B3%E8%A1%A1%E8%BD%A6-160" data-stat-id="7c9d0544cc172b16" onclick="_msq.push(['trackEvent', '60439036470411e8-7c9d0544cc172b16', 'https://search.mi.com/search_E5B9B3E8A1A1E8BDA6-160', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/zxc80-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">自行车</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E8%BD%A6%E8%BD%BD%E9%80%86%E5%8F%98%E5%99%A8" data-stat-id="36b73353dd497a6c" onclick="_msq.push(['trackEvent', '60439036470411e8-36b73353dd497a6c', 'https://search.mi.com/search_E8BDA6E8BDBDE98086E58F98E599A8', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/chezainibianqi80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">车载逆变器</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-2">
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%B9%B3%E8%A1%A1%E8%BD%A6-30" data-stat-id="4f3632aaa3ba247b" onclick="_msq.push(['trackEvent', '60439036470411e8-4f3632aaa3ba247b', 'https://search.mi.com/search_E5B9B3E8A1A1E8BDA6-30', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/peijian80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">平衡车配件</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%90%8E%E8%A7%86%E9%95%9C-183" data-stat-id="f404b63267499b90" onclick="_msq.push(['trackEvent', '60439036470411e8-f404b63267499b90', 'https://search.mi.com/search_E5908EE8A786E9959C-183', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mirror-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">智能后视镜</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E8%BD%A6%E8%BD%BD-237" data-stat-id="c99cde08481be08a" onclick="_msq.push(['trackEvent', '60439036470411e8-c99cde08481be08a', 'https://search.mi.com/search_E8BDA6E8BDBD-237', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/chezaikongqijinghua80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">车载空气净化器</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/3483.html?client_id=180100041086&amp;masid=17409.0243" data-stat-id="7236060400292cf5" onclick="_msq.push(['trackEvent', '60439036470411e8-7236060400292cf5', '//www.mi.com/p/3483.htmlclient_id=180100041086&amp;masid=17409.0243', 'pcpid', '']);">智能 路由器<i class="iconfont"></i></a>
										<div class="children clearfix children-col-1">
											<ul class="children-list clearfix">
												<li>
													<a class="link" href="https://search.mi.com/search_wifi-29" data-stat-id="0210a2c1b5ebaa7a" onclick="_msq.push(['trackEvent', '60439036470411e8-0210a2c1b5ebaa7a', 'https://search.mi.com/search_wifi-29', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/luyouqi4_80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">路由器</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%AF%B9%E8%AE%B2%E6%9C%BA-136" data-stat-id="22cb56f249d76383" onclick="_msq.push(['trackEvent', '60439036470411e8-22cb56f249d76383', 'https://search.mi.com/search_E5AFB9E8AEB2E69CBA-136', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/duijiangji80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">对讲机</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%99%BA%E8%83%BD%E5%AE%B6%E5%BA%AD-130" data-stat-id="fb26a017078eea9f" onclick="_msq.push(['trackEvent', '60439036470411e8-fb26a017078eea9f', 'https://search.mi.com/search_E699BAE883BDE5AEB6E5BAAD-130', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/zhinengjiating80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">智能家庭</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%97%A0%E4%BA%BA%E6%9C%BA-155" data-stat-id="9db28e33016075af" onclick="_msq.push(['trackEvent', '60439036470411e8-9db28e33016075af', 'https://search.mi.com/search_E697A0E4BABAE69CBA-155', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/wurenji80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">无人机</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%91%84%E5%83%8F%E6%9C%BA-114" data-stat-id="a182d615b0691857" onclick="_msq.push(['trackEvent', '60439036470411e8-a182d615b0691857', 'https://search.mi.com/search_E69184E5838FE69CBA-114', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/camera-head-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">摄像机</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%9B%B8%E6%9C%BA-122" data-stat-id="95959eacbcb2066d" onclick="_msq.push(['trackEvent', '60439036470411e8-95959eacbcb2066d', 'https://search.mi.com/search_E79BB8E69CBA-122', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/camera-small-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">照相机</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/3496.html?client_id=180100041086&amp;masid=17409.0241" data-stat-id="25670c922cd9928a" onclick="_msq.push(['trackEvent', '60439036470411e8-25670c922cd9928a', 'https://www.mi.com/p/3496.htmlclient_id=180100041086&amp;masid=17409.0241', 'pcpid', '']);">电源 配件<i class="iconfont"></i></a>
										<div class="children clearfix children-col-3">
											<ul class="children-list children-list-col children-list-col-1">
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%A7%BB%E5%8A%A8%E7%94%B5%E6%BA%90-12" data-stat-id="38cfed106d365d4c" onclick="_msq.push(['trackEvent', '60439036470411e8-38cfed106d365d4c', 'https://search.mi.com/search_E7A7BBE58AA8E794B5E6BA90-12', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/dianyuan2.100080.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">移动电源</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%95%B0%E6%8D%AE%E7%BA%BF-16" data-stat-id="f7fe289d6a78a0dd" onclick="_msq.push(['trackEvent', '60439036470411e8-f7fe289d6a78a0dd', 'https://search.mi.com/search_E695B0E68DAEE7BABF-16', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/shujuxian-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">数据线</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E8%BD%A6%E5%85%85-15" data-stat-id="8e4b111b13d0eda1" onclick="_msq.push(['trackEvent', '60439036470411e8-8e4b111b13d0eda1', 'https://search.mi.com/search_E8BDA6E58585-15', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/chezaichongdianqi80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">车充</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%89%8B%E6%9C%BA%E5%85%85%E7%94%B5%E5%99%A8-15" data-stat-id="5ed4b4ef5839d762" onclick="_msq.push(['trackEvent', '60439036470411e8-5ed4b4ef5839d762', 'https://search.mi.com/search_E6898BE69CBAE58585E794B5E599A8-15', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">充电器</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%97%A0%E7%BA%BF%E5%85%85%E7%94%B5%E5%99%A8" data-stat-id="e83b1853e8b29e95" onclick="_msq.push(['trackEvent', '60439036470411e8-e83b1853e8b29e95', 'https://search.mi.com/search_E697A0E7BABFE58585E794B5E599A8', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/wuxianchong80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">无线充</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%94%B5%E6%B1%A0-14" data-stat-id="082ddcdfbf176d17" onclick="_msq.push(['trackEvent', '60439036470411e8-082ddcdfbf176d17', 'https://search.mi.com/search_E794B5E6B1A0-14', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/15/goods/sidebar/7Battery1.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">电池</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-2">
												<li>
													<a class="link" href="https://search.mi.com/search_%E8%87%AA%E6%8B%8D%E6%9D%86-5" data-stat-id="8506f8745e8e8419" onclick="_msq.push(['trackEvent', '60439036470411e8-8506f8745e8e8419', 'https://search.mi.com/search_E887AAE68B8DE69D86-5', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/zipaigan80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">自拍杆</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%AD%98%E5%82%A8%E5%8D%A1-27" data-stat-id="39b02e7ed0667c48" onclick="_msq.push(['trackEvent', '60439036470411e8-39b02e7ed0667c48', 'https://search.mi.com/search_E5AD98E582A8E58DA1-27', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/cunchu80x80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">存储卡</span></a>
												</li>
												<li>
													<a class="link" href="https://list.mi.com/8-0-0-0-0-0-0-0-1" data-stat-id="700a6c5f14deaf2b" onclick="_msq.push(['trackEvent', '60439036470411e8-700a6c5f14deaf2b', '//list.mi.com/8-0-0-0-0-0-0-0-1', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/15/goods/sidebar/baohu.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">手机壳</span></a>
												</li>
												<li>
													<a class="link" href="https://list.mi.com/9" data-stat-id="ecb68dab684605f6" onclick="_msq.push(['trackEvent', '60439036470411e8-ecb68dab684605f6', '//list.mi.com/9', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/15/goods/sidebar/tiemo.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">手机贴膜</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/1162000043.html?cfrom=search" data-stat-id="f90d439267328f24" onclick="_msq.push(['trackEvent', '60439036470411e8-f90d439267328f24', '//item.mi.com/1162000043.htmlcfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/shoujizhijia80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">手机支架</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%B9%B3%E6%9D%BF%E9%85%8D%E4%BB%B6" data-stat-id="4e3f7c55c7bc9789" onclick="_msq.push(['trackEvent', '60439036470411e8-4e3f7c55c7bc9789', 'https://search.mi.com/search_E5B9B3E69DBFE9858DE4BBB6', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/pingban80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">平板配件</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-3">
												<li>
													<a class="link" href="https://search.mi.com/search_%E9%BB%91%E9%B2%A8%E9%85%8D%E4%BB%B6" data-stat-id="938f40eee65440d4" onclick="_msq.push(['trackEvent', '60439036470411e8-938f40eee65440d4', 'https://search.mi.com/search_E9BB91E9B2A8E9858DE4BBB6', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/heishashoubing80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">黑鲨配件</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%85%B6%E4%BB%96-241" data-stat-id="1ff5ce8274cbdcc5" onclick="_msq.push(['trackEvent', '60439036470411e8-1ff5ce8274cbdcc5', 'https://search.mi.com/search_E585B6E4BB96-241', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/qitapeijian80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">其他配件</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/3468.html?client_id=180100041086&amp;masid=17409.0246" data-stat-id="0138060a34872f7b" onclick="_msq.push(['trackEvent', '60439036470411e8-0138060a34872f7b', 'https://www.mi.com/p/3468.htmlclient_id=180100041086&amp;masid=17409.0246', 'pcpid', '']);">个护 儿童<i class="iconfont"></i></a>
										<div class="children clearfix children-col-2">
											<ul class="children-list children-list-col children-list-col-1">
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%89%83%E9%A1%BB%E5%88%80-197" data-stat-id="23f3f326f383d0f7" onclick="_msq.push(['trackEvent', '60439036470411e8-23f3f326f383d0f7', 'https://search.mi.com/search_E58983E9A1BBE58880-197', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/tixvdao80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">剃须刀</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%89%99%E5%88%B7-198" data-stat-id="f391f0548009246e" onclick="_msq.push(['trackEvent', '60439036470411e8-f391f0548009246e', 'https://search.mi.com/search_E78999E588B7-198', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/yashua80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">牙刷</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E4%BD%93%E9%87%8D%E7%A7%A4-210" data-stat-id="f66f1148c49f7cfd" onclick="_msq.push(['trackEvent', '60439036470411e8-f66f1148c49f7cfd', 'https://search.mi.com/search_E4BD93E9878DE7A7A4-210', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/15/goods/list/scale.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">体重秤</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/product/3674.html" data-stat-id="b5a5cfdd915ab755" onclick="_msq.push(['trackEvent', '60439036470411e8-b5a5cfdd915ab755', 'https://item.mi.com/product/3674.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/xueyaji80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">血压计</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E4%BD%93%E6%B8%A9%E8%AE%A1" data-stat-id="b6f6723ca6d62508" onclick="_msq.push(['trackEvent', '60439036470411e8-b6f6723ca6d62508', 'https://search.mi.com/search_E4BD93E6B8A9E8AEA1', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/tiwenji80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">体温计</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%97%A9%E6%95%99%E5%90%AF%E6%99%BA-200" data-stat-id="f3e0a2d167251f84" onclick="_msq.push(['trackEvent', '60439036470411e8-f3e0a2d167251f84', 'https://search.mi.com/search_E697A9E69599E590AFE699BA-200', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mitugushi-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">早教启智</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-2">
												<li>
													<a class="link" href="https://search.mi.com/search_%E9%81%A5%E6%8E%A7%E7%94%B5%E5%8A%A8-201" data-stat-id="41c5f7a1bfd6b285" onclick="_msq.push(['trackEvent', '60439036470411e8-41c5f7a1bfd6b285', 'https://search.mi.com/search_E981A5E68EA7E794B5E58AA8-201', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/XIAOFEIJIBASHI.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">遥控电动</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%9B%8A%E6%99%BA%E7%A7%AF%E6%9C%A8-196" data-stat-id="5fd9172c4b828550" onclick="_msq.push(['trackEvent', '60439036470411e8-5fd9172c4b828550', 'https://search.mi.com/search_E79B8AE699BAE7A7AFE69CA8-196', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/toyblock2-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">益智积木</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%84%BF%E7%AB%A5%E6%89%8B%E8%A1%A8-199" data-stat-id="c95638be086c6b1b" onclick="_msq.push(['trackEvent', '60439036470411e8-c95638be086c6b1b', 'https://search.mi.com/search_E584BFE7ABA5E6898BE8A1A8-199', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/shoubiao280.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">儿童手表</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%84%BF%E7%AB%A5%E6%BB%91%E6%9D%BF%E8%BD%A6-202" data-stat-id="27d582d0ec855b84" onclick="_msq.push(['trackEvent', '60439036470411e8-27d582d0ec855b84', 'https://search.mi.com/search_E584BFE7ABA5E6BB91E69DBFE8BDA6-202', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/huabanche80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">儿童滑板车</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%84%BF%E7%AB%A5%E4%B9%A6%E5%8C%85-203" data-stat-id="ad9c9166969804b6" onclick="_msq.push(['trackEvent', '60439036470411e8-ad9c9166969804b6', 'https://search.mi.com/search_E584BFE7ABA5E4B9A6E58C85-203', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/ertongshubao.80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">儿童书包</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/3480.html?client_id=180100041086&amp;masid=17409.0244" data-stat-id="539d8f8cd8759e89" onclick="_msq.push(['trackEvent', '60439036470411e8-539d8f8cd8759e89', '//www.mi.com/p/3480.htmlclient_id=180100041086&amp;masid=17409.0244', 'pcpid', '']);">耳机 音箱<i class="iconfont"></i></a>
										<div class="children clearfix children-col-1">
											<ul class="children-list clearfix">
												<li>
													<a class="link" href="https://www.mi.com/aispeaker-mini/?cfrom=search" data-stat-id="deb22e390778df34" onclick="_msq.push(['trackEvent', '60439036470411e8-deb22e390778df34', '//www.mi.com/aispeaker-mini/cfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/yinxiangmini80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">小爱音箱</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%BA%BF%E6%8E%A7%E8%80%B3%E6%9C%BA-205" data-stat-id="6c084ace82eb9640" onclick="_msq.push(['trackEvent', '60439036470411e8-6c084ace82eb9640', 'https://search.mi.com/search_E7BABFE68EA7E880B3E69CBA-205', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/erji80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">线控耳机</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E8%93%9D%E7%89%99%E8%80%B3%E6%9C%BA-206" data-stat-id="f1b37994024b69aa" onclick="_msq.push(['trackEvent', '60439036470411e8-f1b37994024b69aa', 'https://search.mi.com/search_E8939DE78999E880B3E69CBA-206', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/80xiangquan.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">蓝牙耳机</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%A4%B4%E6%88%B4%E8%80%B3%E6%9C%BA-207" data-stat-id="d89e5b7d805b8a4b" onclick="_msq.push(['trackEvent', '60439036470411e8-d89e5b7d805b8a4b', 'https://search.mi.com/search_E5A4B4E688B4E880B3E69CBA-207', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/toudai80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">头戴耳机</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%93%81%E7%89%8C%E8%80%B3%E6%9C%BA-18" data-stat-id="0d59897816af858e" onclick="_msq.push(['trackEvent', '60439036470411e8-0d59897816af858e', 'https://search.mi.com/search_E59381E7898CE880B3E69CBA-18', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/video/pinpai80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">品牌耳机</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E8%93%9D%E7%89%99%E9%9F%B3%E7%AE%B1-208" data-stat-id="e7b7119280b89582" onclick="_msq.push(['trackEvent', '60439036470411e8-e7b7119280b89582', 'https://search.mi.com/search_E8939DE78999E99FB3E7AEB1-208', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">蓝牙音箱</span></a>
												</li>
											</ul>
										</div>
									</li>
									<li class="category-item">
										<a class="title" href="https://www.mi.com/p/3484.html?client_id=180100041086&amp;masid=17409.0242" data-stat-id="88b8b84a5d0a6fa3" onclick="_msq.push(['trackEvent', '60439036470411e8-88b8b84a5d0a6fa3', '//www.mi.com/p/3484.htmlclient_id=180100041086&amp;masid=17409.0242', 'pcpid', '']);">生活 箱包<i class="iconfont"></i></a>
										<div class="children clearfix children-col-4">
											<ul class="children-list children-list-col children-list-col-1">
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%8F%8C%E8%82%A9%E5%8C%85-213" data-stat-id="43b9927f63a078c5" onclick="_msq.push(['trackEvent', '60439036470411e8-43b9927f63a078c5', 'https://search.mi.com/search_E58F8CE882A9E58C85-213', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/xiangbao-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">双肩包</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E9%92%B1%E5%8C%85" data-stat-id="a9fd14b9178f6c79" onclick="_msq.push(['trackEvent', '60439036470411e8-a9fd14b9178f6c79', 'https://search.mi.com/search_E992B1E58C85', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/qianbao-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">钱包</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%8F%A3%E7%BD%A9-240" data-stat-id="7d05c3fe6c1c7ba9" onclick="_msq.push(['trackEvent', '60439036470411e8-7d05c3fe6c1c7ba9', 'https://search.mi.com/search_E58FA3E7BDA9-240', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/kouzhaofenlei.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">口罩</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%94%B6%E7%BA%B3%E5%8C%85-215" data-stat-id="1e2c81ce1c9a665d" onclick="_msq.push(['trackEvent', '60439036470411e8-1e2c81ce1c9a665d', 'https://search.mi.com/search_E694B6E7BAB3E58C85-215', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/shounabao-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">收纳包</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%97%85%E8%A1%8C%E7%AE%B1-216" data-stat-id="a56465af5cf7fb84" onclick="_msq.push(['trackEvent', '60439036470411e8-a56465af5cf7fb84', 'https://search.mi.com/search_E69785E8A18CE7AEB1-216', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/15/goods/sidebar/lvxingxiang.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">旅行箱</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E8%BF%90%E5%8A%A8%E9%9E%8B-217" data-stat-id="a0ea0eaf1956fdf4" onclick="_msq.push(['trackEvent', '60439036470411e8-a0ea0eaf1956fdf4', 'https://search.mi.com/search_E8BF90E58AA8E99E8B-217', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/shenhuahui80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">运动鞋</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-2">
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%9C%8D%E9%A5%B0-218" data-stat-id="b561ea5a027dfdda" onclick="_msq.push(['trackEvent', '60439036470411e8-b561ea5a027dfdda', 'https://search.mi.com/search_E69C8DE9A5B0-218', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/txv80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">服饰</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%9C%BC%E9%95%9C-219" data-stat-id="f180ef23d6903e42" onclick="_msq.push(['trackEvent', '60439036470411e8-f180ef23d6903e42', 'https://search.mi.com/search_E79CBCE9959C-219', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/tyj80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">眼镜</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E5%BA%8A%E5%9E%AB-220" data-stat-id="4e87f75c77e88771" onclick="_msq.push(['trackEvent', '60439036470411e8-4e87f75c77e88771', 'https://search.mi.com/search_E5BA8AE59EAB-220', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/chuangdian-80-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">床垫</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%9E%95%E5%A4%B4-221" data-stat-id="dbc28715c5a193f0" onclick="_msq.push(['trackEvent', '60439036470411e8-dbc28715c5a193f0', 'https://search.mi.com/search_E69E95E5A4B4-221', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/zhent.ou80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">枕头</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E8%A2%AB%E5%AD%90-222" data-stat-id="c3e6d57ae71832e3" onclick="_msq.push(['trackEvent', '60439036470411e8-c3e6d57ae71832e3', 'https://search.mi.com/search_E8A2ABE5AD90-222', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/beizi8.0..png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">被子</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%B2%99%E5%8F%91-223" data-stat-id="1f786afccdfb4ee2" onclick="_msq.push(['trackEvent', '60439036470411e8-1f786afccdfb4ee2', 'https://search.mi.com/search_E6B299E58F91-223', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/shafa.80.png?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">沙发</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-3">
												<li>
													<a class="link" href="https://item.mi.com/1180500029.html?cfrom=search" data-stat-id="f4252203524c08f5" onclick="_msq.push(['trackEvent', '60439036470411e8-f4252203524c08f5', 'https://item.mi.com/1180500029.htmlcfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/sijiantao-80-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">针织件套</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/1181300014.html?cfrom=search" data-stat-id="a0bbb74d90798897" onclick="_msq.push(['trackEvent', '60439036470411e8-a0bbb74d90798897', 'https://item.mi.com/1181300014.htmlcfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/jinmitu.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">金米兔</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/product/6125.html" data-stat-id="aa1698df0a66d303" onclick="_msq.push(['trackEvent', '60439036470411e8-aa1698df0a66d303', 'https://item.mi.com/product/6125.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/luosidao-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">螺丝刀</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/1174800007.html?cfrom=search" data-stat-id="0c9bc283cb9903b7" onclick="_msq.push(['trackEvent', '60439036470411e8-0c9bc283cb9903b7', 'https://item.mi.com/1174800007.htmlcfrom=search', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/bbbbei.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">保温杯</span></a>
												</li>
												<li>
													<a class="link" href="https://item.mi.com/product/6124.html" data-stat-id="fdb15392548bbc4e" onclick="_msq.push(['trackEvent', '60439036470411e8-fdb15392548bbc4e', 'https://item.mi.com/product/6124.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/umbrella.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">伞</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E9%A9%B1%E8%9A%8A%E5%99%A8-229" data-stat-id="161aee2b86eddd1d" onclick="_msq.push(['trackEvent', '60439036470411e8-161aee2b86eddd1d', 'https://search.mi.com/search_E9A9B1E89A8AE599A8-229', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/quwenqi.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">驱蚊器</span></a>
												</li>
											</ul>
											<ul class="children-list children-list-col children-list-col-4">
												<li>
													<a class="link" href="https://item.mi.com/product/7716.html" data-stat-id="6319ad1ae8d01900" onclick="_msq.push(['trackEvent', '60439036470411e8-6319ad1ae8d01900', 'https://item.mi.com/product/7716.html', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/ukelele.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">尤克里里</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E6%AF%9B%E5%B7%BE%20%E6%B5%B4%E5%B7%BE-231" data-stat-id="32c9319cb416b855" onclick="_msq.push(['trackEvent', '60439036470411e8-32c9319cb416b855', 'https://search.mi.com/search_E6AF9BE5B7BE20E6B5B4E5B7BE-231', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/maojinmaojin.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">毛巾/浴巾</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%B1%B3%E5%85%94-232" data-stat-id="649f88c862fbe837" onclick="_msq.push(['trackEvent', '60439036470411e8-649f88c862fbe837', 'https://search.mi.com/search_米兔-232', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">米兔</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%AD%BE%E5%AD%97%E7%AC%94-233" data-stat-id="726c06ead4d863c1" onclick="_msq.push(['trackEvent', '60439036470411e8-726c06ead4d863c1', 'https://search.mi.com/search_E7ADBEE5AD97E7AC94-233', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/qianzibi-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">签字笔</span></a>
												</li>
												<li>
													<a class="link" href="https://search.mi.com/search_%E7%AC%94%E8%AE%B0%E6%9C%AC-234" data-stat-id="00d38ffdbfe6d47f" onclick="_msq.push(['trackEvent', '60439036470411e8-00d38ffdbfe6d47f', 'https://search.mi.com/search_E7AC94E8AEB0E69CAC-234', 'pcpid', '']);"><img class="thumb" src="images/placeholder-40.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/duoyongbijiben-80.jpg?width=80&amp;height=80" alt="" width="40" height="40"><span class="text">笔记本</span></a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="javascript:%20void(0);" data-stat-id="5786b88421e50df7" onclick="_msq.push(['trackEvent', '60439036470411e8-5786b88421e50df7', 'javascript:void0', 'pcpid', '']);"><span class="text">小米手机</span><span class="arrow"></span></a>
							<div class="item-children">
								<div class="container">
									<ul class="children-list clearfix">
										<li class="first">
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mi8/" data-stat-id="ac4ecf0fb3c16845" onclick="_msq.push(['trackEvent', '60439036470411e8-ac4ecf0fb3c16845', 'https://www.mi.com/mi8/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/pc-320-220-mi8.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/pc-320-220-mi8.png 2x" alt="小米8" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mi8/" data-stat-id="2325f3809c760016" onclick="_msq.push(['trackEvent', '60439036470411e8-2325f3809c760016', 'https://www.mi.com/mi8/', 'pcpid', '']);">小米8</a>
											</div>
											<p class="price">2699元起</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mi8i/" data-stat-id="b3a38c3f3206a2e5" onclick="_msq.push(['trackEvent', '60439036470411e8-b3a38c3f3206a2e5', 'https://www.mi.com/mi8i/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/pc-320-220-mi8se.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/pc-320-220-mi8se.png 2x" alt="小米8 SE" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mi8i/" data-stat-id="c72aa4ee57d919c7" onclick="_msq.push(['trackEvent', '60439036470411e8-c72aa4ee57d919c7', 'https://www.mi.com/mi8i/', 'pcpid', '']);">小米8 SE</a>
											</div>
											<p class="price">1799元起</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/max3/" data-stat-id="93cf147d856372cd" onclick="_msq.push(['trackEvent', '60439036470411e8-93cf147d856372cd', 'https://www.mi.com/max3/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/max3-320-220.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/max3-320-220.png 2x" alt="小米Max 3" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/max3/" data-stat-id="e697734885017550" onclick="_msq.push(['trackEvent', '60439036470411e8-e697734885017550', 'https://www.mi.com/max3/', 'pcpid', '']);">小米Max 3</a>
											</div>
											<p class="price">1699元起</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mix2s/" data-stat-id="ef51843c6753c496" onclick="_msq.push(['trackEvent', '60439036470411e8-ef51843c6753c496', 'https://www.mi.com/mix2s/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mix2s320-220white.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/mix2s320-220white.png 2x" alt="小米MIX 2S" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mix2s/" data-stat-id="59aa3d0d7d4b90da" onclick="_msq.push(['trackEvent', '60439036470411e8-59aa3d0d7d4b90da', 'https://www.mi.com/mix2s/', 'pcpid', '']);">小米MIX 2S</a>
											</div>
											<p class="price">3299元起</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mix2/" data-stat-id="66098ed0b2e3d62d" onclick="_msq.push(['trackEvent', '60439036470411e8-66098ed0b2e3d62d', 'https://www.mi.com/mix2/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mix2320-220.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/mix2320-220.png 2x" alt="小米MIX 2" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mix2/" data-stat-id="76bcdebba6f509f9" onclick="_msq.push(['trackEvent', '60439036470411e8-76bcdebba6f509f9', 'https://www.mi.com/mix2/', 'pcpid', '']);">小米MIX 2</a>
											</div>
											<p class="price">2599元起</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mi6x/" data-stat-id="db5bd2adf61709a0" onclick="_msq.push(['trackEvent', '60439036470411e8-db5bd2adf61709a0', 'https://www.mi.com/mi6x/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/32022012085!160x110.jpg" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/32022012085!320x220.jpg 2x" alt="小米6X" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mi6x/" data-stat-id="37e87ce512bfe96a" onclick="_msq.push(['trackEvent', '60439036470411e8-37e87ce512bfe96a', 'https://www.mi.com/mi6x/', 'pcpid', '']);">小米6X</a>
											</div>
											<p class="price">1399元起</p>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="javascript:%20void(0);" data-stat-id="e3d40f12d1252f53" onclick="_msq.push(['trackEvent', '60439036470411e8-e3d40f12d1252f53', 'javascript:void0', 'pcpid', '']);"><span class="text">红米</span><span class="arrow"></span></a>
							<div class="item-children">
								<div class="container">
									<ul class="children-list clearfix">
										<li class="first">
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/redmi6pro/" data-stat-id="6ec95befdfaaa20c" onclick="_msq.push(['trackEvent', '60439036470411e8-6ec95befdfaaa20c', 'https://www.mi.com/redmi6pro/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/6pro320-220.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/6pro320-220.png 2x" alt="红米6 Pro" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/redmi6pro/" data-stat-id="bc1f86b5b5971d1d" onclick="_msq.push(['trackEvent', '60439036470411e8-bc1f86b5b5971d1d', 'https://www.mi.com/redmi6pro/', 'pcpid', '']);">红米6 Pro</a>
											</div>
											<p class="price">999元起</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/redmi6/" data-stat-id="690118643052074f" onclick="_msq.push(['trackEvent', '60439036470411e8-690118643052074f', 'https://www.mi.com/redmi6/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/666320.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/666320.png 2x" alt="红米6" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/redmi6/" data-stat-id="d715d597da915108" onclick="_msq.push(['trackEvent', '60439036470411e8-d715d597da915108', 'https://www.mi.com/redmi6/', 'pcpid', '']);">红米6</a>
											</div>
											<p class="price">799元</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="http://www.mi.com/redmi6a/" data-stat-id="8d57e442a4ae66c6" onclick="_msq.push(['trackEvent', '60439036470411e8-8d57e442a4ae66c6', 'http://www.mi.com/redmi6a/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/6A320.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/6A320.png 2x" alt="红米6A" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="http://www.mi.com/redmi6a/" data-stat-id="4b98c1042d9fae5e" onclick="_msq.push(['trackEvent', '60439036470411e8-4b98c1042d9fae5e', 'http://www.mi.com/redmi6a/', 'pcpid', '']);">红米6A</a>
											</div>
											<p class="price">599元</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/redminote5" data-stat-id="dbde46c75ad4ddc6" onclick="_msq.push(['trackEvent', '60439036470411e8-dbde46c75ad4ddc6', 'https://www.mi.com/redminote5', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/note5-320-220.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/note5-320-220.png 2x" alt="红米Note 5" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/redminote5" data-stat-id="90ff48352abf244b" onclick="_msq.push(['trackEvent', '60439036470411e8-90ff48352abf244b', 'https://www.mi.com/redminote5', 'pcpid', '']);">红米Note 5</a>
											</div>
											<p class="price">1099元起</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/redmis2/" data-stat-id="efe0e116931ee27b" onclick="_msq.push(['trackEvent', '60439036470411e8-efe0e116931ee27b', 'https://www.mi.com/redmis2/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/s2-320-220.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/s2-320-220.png 2x" alt="红米S2" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/redmis2/" data-stat-id="378886c4791a8c14" onclick="_msq.push(['trackEvent', '60439036470411e8-378886c4791a8c14', 'https://www.mi.com/redmis2/', 'pcpid', '']);">红米S2</a>
											</div>
											<p class="price">999元起</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/redmi5/" data-stat-id="e4dfd748fecc15a6" onclick="_msq.push(['trackEvent', '60439036470411e8-e4dfd748fecc15a6', 'https://www.mi.com/redmi5/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/5P-320-220.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/5P-320-220.png 2x" alt="红米5 Plus" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/redmi5/" data-stat-id="a5414b6c0caeade7" onclick="_msq.push(['trackEvent', '60439036470411e8-a5414b6c0caeade7', 'https://www.mi.com/redmi5/', 'pcpid', '']);">红米5 Plus</a>
											</div>
											<p class="price">999元起</p>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="javascript:%20void(0);" data-stat-id="aa7960251519c1f1" onclick="_msq.push(['trackEvent', '60439036470411e8-aa7960251519c1f1', 'javascript:void0', 'pcpid', '']);"><span class="text">电视</span><span class="arrow"></span></a>
							<div class="item-children">
								<div class="container">
									<ul class="children-list clearfix">
										<li class="first">
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mitv4/75/" data-stat-id="ef104dfac75d54be" onclick="_msq.push(['trackEvent', '60439036470411e8-ef104dfac75d54be', '//www.mi.com/mitv4/75/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/75.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/75.png 2x" alt="小米电视4 75英寸" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mitv4/75/" data-stat-id="1f732af5efd614dc" onclick="_msq.push(['trackEvent', '60439036470411e8-1f732af5efd614dc', '//www.mi.com/mitv4/75/', 'pcpid', '']);">小米电视4 75英寸</a>
											</div>
											<p class="price">8999元</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mitv4A/32/" data-stat-id="c1b9b294eeec2784" onclick="_msq.push(['trackEvent', '60439036470411e8-c1b9b294eeec2784', 'https://www.mi.com/mitv4A/32/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/32.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/32.png 2x" alt="小米电视4A 32英寸" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mitv4A/32/" data-stat-id="d00f200900f63220" onclick="_msq.push(['trackEvent', '60439036470411e8-d00f200900f63220', 'https://www.mi.com/mitv4A/32/', 'pcpid', '']);">小米电视4A 32英寸</a>
											</div>
											<p class="price">899元</p>
											<div class="flags">
												<div class="flag">热卖</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mitv4A/43y" data-stat-id="ec9c1fe8f0001e02" onclick="_msq.push(['trackEvent', '60439036470411e8-ec9c1fe8f0001e02', '//www.mi.com/mitv4A/43y', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/4a43.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/4a43.png 2x" alt="小米电视4A 43英寸青春版" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mitv4A/43y" data-stat-id="72a866c0e24db622" onclick="_msq.push(['trackEvent', '60439036470411e8-72a866c0e24db622', '//www.mi.com/mitv4A/43y', 'pcpid', '']);">小米电视4A 43英寸青春版</a>
											</div>
											<p class="price">1399元</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mitv4A/50/" data-stat-id="847ef5e940e21021" onclick="_msq.push(['trackEvent', '60439036470411e8-847ef5e940e21021', '//www.mi.com/mitv4A/50/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/50.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/50.png 2x" alt="小米电视4A 50英寸" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mitv4A/50/" data-stat-id="012ddc70f758a921" onclick="_msq.push(['trackEvent', '60439036470411e8-012ddc70f758a921', '//www.mi.com/mitv4A/50/', 'pcpid', '']);">小米电视4A 50英寸</a>
											</div>
											<p class="price">1799元</p>
											<div class="flags">
												<div class="flag">热卖</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mitv4A/55/" data-stat-id="135221e71acb82a7" onclick="_msq.push(['trackEvent', '60439036470411e8-135221e71acb82a7', '//www.mi.com/mitv4A/55/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/4a55.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/4a55.png 2x" alt="小米电视4A 55英寸" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mitv4A/55/" data-stat-id="cd3ebe1c39e3200d" onclick="_msq.push(['trackEvent', '60439036470411e8-cd3ebe1c39e3200d', '//www.mi.com/mitv4A/55/', 'pcpid', '']);">小米电视4A 55英寸</a>
											</div>
											<p class="price">2299元</p>
											<div class="flags">
												<div class="flag">热卖</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/p/1995.html" data-stat-id="cae4dd7b84d44953" onclick="_msq.push(['trackEvent', '60439036470411e8-cae4dd7b84d44953', 'https://www.mi.com/p/1995.html', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/4a65555.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/4a65555.png 2x" alt="查看全部&lt;br/&gt;小米电视" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/p/1995.html" data-stat-id="ad193dca63758bc6" onclick="_msq.push(['trackEvent', '60439036470411e8-ad193dca63758bc6', 'https://www.mi.com/p/1995.html', 'pcpid', '']);">查看全部<br>小米电视</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="javascript:%20void(0);" data-stat-id="84268c122d223d4f" onclick="_msq.push(['trackEvent', '60439036470411e8-84268c122d223d4f', 'javascript:void0', 'pcpid', '']);"><span class="text">笔记本</span><span class="arrow"></span></a>
							<div class="item-children">
								<div class="container">
									<ul class="children-list clearfix">
										<li class="first">
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mipad4/" data-stat-id="eb58ea48b8e30665" onclick="_msq.push(['trackEvent', '60439036470411e8-eb58ea48b8e30665', 'https://www.mi.com/mipad4/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="https://i1.mifile.cn/f/i/g/2015/cn-index/pingbanok.png" srcset="https://i1.mifile.cn/f/i/g/2015/cn-index/pingbanok.png 2x" alt="小米平板" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mipad4/" data-stat-id="39a1465d48cec4b8" onclick="_msq.push(['trackEvent', '60439036470411e8-39a1465d48cec4b8', 'https://www.mi.com/mipad4/', 'pcpid', '']);">小米平板</a>
											</div>
											<p class="price">1099元起</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/gamelaptop/?cfrom=search" data-stat-id="9175705d6b0559a3" onclick="_msq.push(['trackEvent', '60439036470411e8-9175705d6b0559a3', 'https://www.mi.com/gamelaptop/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/xinbijiben.png" srcset="//i1.mifile.cn/f/i/g/2015/xinbijiben.png 2x" alt="小米游戏本 8代" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/gamelaptop/?cfrom=search" data-stat-id="c4a35fe1160150f4" onclick="_msq.push(['trackEvent', '60439036470411e8-c4a35fe1160150f4', 'https://www.mi.com/gamelaptop/cfrom=search', 'pcpid', '']);">小米游戏本 8代</a>
											</div>
											<p class="price">6699元起</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mibookpro-gtx/?cfrom=search" data-stat-id="8d8419cd6a59b525" onclick="_msq.push(['trackEvent', '60439036470411e8-8d8419cd6a59b525', 'https://www.mi.com/mibookpro-gtx/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/WechatIMG603.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/WechatIMG603.png 2x" alt="小米笔记本15.6" gtx版 "=" " width="160 " height="110 "></a>
                                    </div>
                                    <div class="title "><a href="https://www.mi.com/mibookpro-gtx/?cfrom=search " data-stat-id="c31965c14fbb89c3 " onclick="_msq.push([ 'trackEvent', '60439036470411e8-c31965c14fbb89c3', 'https://www.mi.com/mibookpro-gtx/cfrom=search', 'pcpid', '']); ">小米笔记本15.6" GTX版</a></div>
											<p class="price">6299元起</p>
											<div class="flags">
												<div class="flag">新品</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/migaminglaptop/" data-stat-id="83ba6e9f0fa01b06" onclick="_msq.push(['trackEvent', '60439036470411e8-83ba6e9f0fa01b06', '//www.mi.com/migaminglaptop/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/320x220youxichuantu.png" srcset="//i1.mifile.cn/f/i/g/2015/320x220youxichuantu.png 2x" alt="小米游戏本" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/migaminglaptop/" data-stat-id="a677599c06064706" onclick="_msq.push(['trackEvent', '60439036470411e8-a677599c06064706', '//www.mi.com/migaminglaptop/', 'pcpid', '']);">小米游戏本</a>
											</div>
											<p class="price">5999元起</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mibookpro/" data-stat-id="b72e06cc975e0954" onclick="_msq.push(['trackEvent', '60439036470411e8-b72e06cc975e0954', '//www.mi.com/mibookpro/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/WechatIMG603.png" srcset="//i1.mifile.cn/f/i/g/2015/cn-index/WechatIMG603.png 2x" alt="小米笔记本 Pro" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mibookpro/" data-stat-id="af83d1aff74cc275" onclick="_msq.push(['trackEvent', '60439036470411e8-af83d1aff74cc275', '//www.mi.com/mibookpro/', 'pcpid', '']);">小米笔记本 Pro</a>
											</div>
											<p class="price">5599元起</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mibookair-13/" data-stat-id="fba0f9ec8777901c" onclick="_msq.push(['trackEvent', '60439036470411e8-fba0f9ec8777901c', '//www.mi.com/mibookair-13/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!320x220.jpg 2x" alt="小米笔记本 Air 系列" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mibookair-13/" data-stat-id="2ba818b0caaeec04" onclick="_msq.push(['trackEvent', '60439036470411e8-2ba818b0caaeec04', '//www.mi.com/mibookair-13/', 'pcpid', '']);">小米笔记本 Air 系列</a>
											</div>
											<p class="price">3599元起</p>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="javascript:%20void(0);" data-stat-id="c19f393463733586" onclick="_msq.push(['trackEvent', '60439036470411e8-c19f393463733586', 'javascript:void0', 'pcpid', '']);"><span class="text">空调</span><span class="arrow"></span></a>
							<div class="item-children">
								<div class="container">
									<ul class="children-list clearfix">
										<li class="first">
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/aircondition/third/?cfrom=search" data-stat-id="2b47d535434aab84" onclick="_msq.push(['trackEvent', '60439036470411e8-2b47d535434aab84', '//www.mi.com/aircondition/third/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/kongtiao320-220!160x110.jpg" srcset="//i1.mifile.cn/f/i/g/2015/kongtiao320-220!320x220.jpg 2x" alt="米家互联网空调" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/aircondition/third/?cfrom=search" data-stat-id="42578ea41daa2fd1" onclick="_msq.push(['trackEvent', '60439036470411e8-42578ea41daa2fd1', '//www.mi.com/aircondition/third/cfrom=search', 'pcpid', '']);">米家互联网空调</a>
											</div>
											<p class="price">1999元</p>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="https://www.mi.com/p/2848.html" data-stat-id="bd050f2fbf2e8f50" onclick="_msq.push(['trackEvent', '60439036470411e8-bd050f2fbf2e8f50', '//www.mi.com/p/2848.html', 'pcpid', '']);"><span class="text">新品</span><span class="arrow"></span></a>
							<div class="item-children">
								<div class="container">
									<ul class="children-list clearfix">
										<li class="first">
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/shouhuan3/?cfrom=search" data-stat-id="fbe36b1f046748eb" onclick="_msq.push(['trackEvent', '60439036470411e8-fbe36b1f046748eb', 'https://www.mi.com/shouhuan3/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/shouhuan.png" srcset="//i1.mifile.cn/f/i/g/2015/shouhuan.png 2x" alt="小米手环3" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/shouhuan3/?cfrom=search" data-stat-id="d5102bd7a76cb008" onclick="_msq.push(['trackEvent', '60439036470411e8-d5102bd7a76cb008', 'https://www.mi.com/shouhuan3/cfrom=search', 'pcpid', '']);">小米手环3</a>
											</div>
											<p class="price">169元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/miwifi4/?cfrom=search" data-stat-id="58f6cbde109b6086" onclick="_msq.push(['trackEvent', '60439036470411e8-58f6cbde109b6086', 'https://www.mi.com/miwifi4/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/luyouqi.png" srcset="//i1.mifile.cn/f/i/g/2015/luyouqi.png 2x" alt="小米路由器4" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/miwifi4/?cfrom=search" data-stat-id="463a80cd465f96f0" onclick="_msq.push(['trackEvent', '60439036470411e8-463a80cd465f96f0', 'https://www.mi.com/miwifi4/cfrom=search', 'pcpid', '']);">小米路由器4</a>
											</div>
											<p class="price">199元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/aispeaker-mini/?cfrom=search" data-stat-id="ccfcebe9322ec828" onclick="_msq.push(['trackEvent', '60439036470411e8-ccfcebe9322ec828', 'https://www.mi.com/aispeaker-mini/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/xiaomixiaoaiai.png" srcset="//i1.mifile.cn/f/i/g/2015/xiaomixiaoaiai.png 2x" alt="小米小爱音箱mini" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/aispeaker-mini/?cfrom=search" data-stat-id="7767770a25db02c4" onclick="_msq.push(['trackEvent', '60439036470411e8-7767770a25db02c4', 'https://www.mi.com/aispeaker-mini/cfrom=search', 'pcpid', '']);">小米小爱音箱mini</a>
											</div>
											<p class="price">169元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/projector/?cfrom=search" data-stat-id="013f62af1546cb0e" onclick="_msq.push(['trackEvent', '60439036470411e8-013f62af1546cb0e', 'https://www.mi.com/projector/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/toiuyingyi.png" srcset="//i1.mifile.cn/f/i/g/2015/toiuyingyi.png 2x" alt="米家投影仪" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/projector/?cfrom=search" data-stat-id="6e0920074623a670" onclick="_msq.push(['trackEvent', '60439036470411e8-6e0920074623a670', 'https://www.mi.com/projector/cfrom=search', 'pcpid', '']);">米家投影仪</a>
											</div>
											<p class="price">3999元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/mivr-1o/?cfrom=search" data-stat-id="1b70027ea4beee67" onclick="_msq.push(['trackEvent', '60439036470411e8-1b70027ea4beee67', 'https://www.mi.com/mivr-1o/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/VR.png" srcset="//i1.mifile.cn/f/i/g/2015/VR.png 2x" alt="小米VR 一体机" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/mivr-1o/?cfrom=search" data-stat-id="aa29296359623278" onclick="_msq.push(['trackEvent', '60439036470411e8-aa29296359623278', 'https://www.mi.com/mivr-1o/cfrom=search', 'pcpid', '']);">小米VR 一体机</a>
											</div>
											<p class="price">1499元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/camera-360/?cfrom=search" data-stat-id="ec59bf03af7753e6" onclick="_msq.push(['trackEvent', '60439036470411e8-ec59bf03af7753e6', 'https://www.mi.com/camera-360/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/shexiangji.png" srcset="//i1.mifile.cn/f/i/g/2015/shexiangji.png 2x" alt="小米米家智能摄像机 云台版" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/camera-360/?cfrom=search" data-stat-id="7ae4040f1c776c30" onclick="_msq.push(['trackEvent', '60439036470411e8-7ae4040f1c776c30', 'https://www.mi.com/camera-360/cfrom=search', 'pcpid', '']);">小米米家智能摄像机 云台版</a>
											</div>
											<p class="price">199元</p>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="javascript:%20void(0);" data-stat-id="0379d38356128a54" onclick="_msq.push(['trackEvent', '60439036470411e8-0379d38356128a54', 'javascript:void0', 'pcpid', '']);"><span class="text">路由器</span><span class="arrow"></span></a>
							<div class="item-children">
								<div class="container">
									<ul class="children-list clearfix">
										<li class="first">
											<div class="figure figure-thumb">
												<a href="https://item.mi.com/product/8105.html" data-stat-id="4c692c122a298537" onclick="_msq.push(['trackEvent', '60439036470411e8-4c692c122a298537', 'https://item.mi.com/product/8105.html', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/xiaomiluyouqi4.png" srcset="//i1.mifile.cn/f/i/g/2015/xiaomiluyouqi4.png 2x" alt="小米路由器 4" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://item.mi.com/product/8105.html" data-stat-id="4e29d5255b703291" onclick="_msq.push(['trackEvent', '60439036470411e8-4e29d5255b703291', 'https://item.mi.com/product/8105.html', 'pcpid', '']);">小米路由器 4</a>
											</div>
											<p class="price">179元</p>
											<div class="flags">
												<div class="flag">双频双核</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://item.mi.com/1182400090.html?cfrom=search" data-stat-id="a890c26a5bea723c" onclick="_msq.push(['trackEvent', '60439036470411e8-a890c26a5bea723c', '//item.mi.com/1182400090.htmlcfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/4Q.png" srcset="//i1.mifile.cn/f/i/g/2015/4Q.png 2x" alt="小米路由器 4Q" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://item.mi.com/1182400090.html?cfrom=search" data-stat-id="54807ad7041888df" onclick="_msq.push(['trackEvent', '60439036470411e8-54807ad7041888df', '//item.mi.com/1182400090.htmlcfrom=search', 'pcpid', '']);">小米路由器 4Q</a>
											</div>
											<p class="price">69元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/miwifi3a/?cfrom=search" data-stat-id="e19d268f86a6478c" onclick="_msq.push(['trackEvent', '60439036470411e8-e19d268f86a6478c', 'https://www.mi.com/miwifi3a/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/3A.png" srcset="//i1.mifile.cn/f/i/g/2015/3A.png 2x" alt="小米路由器 3A" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/miwifi3a/?cfrom=search" data-stat-id="5f7542514557662d" onclick="_msq.push(['trackEvent', '60439036470411e8-5f7542514557662d', 'https://www.mi.com/miwifi3a/cfrom=search', 'pcpid', '']);">小米路由器 3A</a>
											</div>
											<p class="price">99元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/miwifi3g/" data-stat-id="83651a3e943f3c6c" onclick="_msq.push(['trackEvent', '60439036470411e8-83651a3e943f3c6c', '//www.mi.com/miwifi3g/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/3G.png" srcset="//i1.mifile.cn/f/i/g/2015/3G.png 2x" alt="小米路由器 3G" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/miwifi3g/" data-stat-id="e478962f270ed704" onclick="_msq.push(['trackEvent', '60439036470411e8-e478962f270ed704', '//www.mi.com/miwifi3g/', 'pcpid', '']);">小米路由器 3G</a>
											</div>
											<p class="price">199元</p>
											<div class="flags">
												<div class="flag">双千兆</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/miwifihd/" data-stat-id="0225c65ea230d02b" onclick="_msq.push(['trackEvent', '60439036470411e8-0225c65ea230d02b', '//www.mi.com/miwifihd/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/PRO.png" srcset="//i1.mifile.cn/f/i/g/2015/PRO.png 2x" alt="小米路由器 HD/Pro" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/miwifihd/" data-stat-id="d34d58d0c7685c98" onclick="_msq.push(['trackEvent', '60439036470411e8-d34d58d0c7685c98', '//www.mi.com/miwifihd/', 'pcpid', '']);">小米路由器 HD/Pro</a>
											</div>
											<p class="price">499元起</p>
											<div class="flags">
												<div class="flag">大容量</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/p/3483.html?client_id=180100041086&amp;masid=17409.0243" data-stat-id="94ae4bfb0a9df433" onclick="_msq.push(['trackEvent', '60439036470411e8-94ae4bfb0a9df433', 'https://www.mi.com/p/3483.htmlclient_id=180100041086&amp;masid=17409.0243', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/quanbuluyouqi.png" srcset="//i1.mifile.cn/f/i/g/2015/quanbuluyouqi.png 2x" alt="查看全部小米路由器" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/p/3483.html?client_id=180100041086&amp;masid=17409.0243" data-stat-id="e542e1ff4d013ffd" onclick="_msq.push(['trackEvent', '60439036470411e8-e542e1ff4d013ffd', 'https://www.mi.com/p/3483.htmlclient_id=180100041086&amp;masid=17409.0243', 'pcpid', '']);">查看全部小米路由器</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="javascript:void(0);" data-stat-id="48df1e98707698c8" onclick="_msq.push(['trackEvent', '60439036470411e8-48df1e98707698c8', 'javascript:void0', 'pcpid', '']);"><span class="text">智能硬件</span><span class="arrow"></span></a>
							<div class="item-children">
								<div class="container">
									<ul class="children-list clearfix">
										<li class="first">
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/aispeaker-mini/?cfrom=search" data-stat-id="ff67334f9ed5c59f" onclick="_msq.push(['trackEvent', '60439036470411e8-ff67334f9ed5c59f', 'https://www.mi.com/aispeaker-mini/cfrom=search', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="https://i1.mifile.cn/f/i/g/2015/xiaomixiaoaiai.png" srcset="https://i1.mifile.cn/f/i/g/2015/xiaomixiaoaiai.png 2x" alt="小米小爱音箱mini" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/aispeaker-mini/?cfrom=search" data-stat-id="77faaec7dbb4e15c" onclick="_msq.push(['trackEvent', '60439036470411e8-77faaec7dbb4e15c', 'https://www.mi.com/aispeaker-mini/cfrom=search', 'pcpid', '']);">小米小爱音箱mini</a>
											</div>
											<p class="price">169元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/miuav/" data-stat-id="8df54736f2448fc3" onclick="_msq.push(['trackEvent', '60439036470411e8-8df54736f2448fc3', '//www.mi.com/miuav/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/123321!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/123321!320x220.jpg 2x" alt="小米无人机" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/miuav/" data-stat-id="e04e9c138691d2dd" onclick="_msq.push(['trackEvent', '60439036470411e8-e04e9c138691d2dd', '//www.mi.com/miuav/', 'pcpid', '']);">小米无人机</a>
											</div>
											<p class="price">2999元</p>
											<div class="flags">
												<div class="flag">航拍利器</div>
											</div>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/water2/" data-stat-id="c64430e458b105ab" onclick="_msq.push(['trackEvent', '60439036470411e8-c64430e458b105ab', '//www.mi.com/water2/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//i1.mifile.cn/f/i/g/2015/xiaomijingshuiqi!160x110.jpg" srcset="//i1.mifile.cn/f/i/g/2015/xiaomijingshuiqi!320x220.jpg 2x" alt="小米净水器" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/water2/" data-stat-id="a55de784ebb62f0f" onclick="_msq.push(['trackEvent', '60439036470411e8-a55de784ebb62f0f', '//www.mi.com/water2/', 'pcpid', '']);">小米净水器</a>
											</div>
											<p class="price">1999元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/roomrobot/" data-stat-id="571321ed14bd7531" onclick="_msq.push(['trackEvent', '60439036470411e8-571321ed14bd7531', '//www.mi.com/roomrobot/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/saodijiqiren320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/saodijiqiren320-220!320x220.jpg 2x" alt="米家扫地机器人" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/roomrobot/" data-stat-id="4b70d7d78cfaad54" onclick="_msq.push(['trackEvent', '60439036470411e8-4b70d7d78cfaad54', '//www.mi.com/roomrobot/', 'pcpid', '']);">米家扫地机器人</a>
											</div>
											<p class="price">1699元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/dianfanbao/" data-stat-id="acade2a216370378" onclick="_msq.push(['trackEvent', '60439036470411e8-acade2a216370378', '//www.mi.com/dianfanbao/', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!320x220.jpg 2x" alt="米家压力IH电饭煲" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/dianfanbao/" data-stat-id="d5fc7a5b317e5986" onclick="_msq.push(['trackEvent', '60439036470411e8-d5fc7a5b317e5986', '//www.mi.com/dianfanbao/', 'pcpid', '']);">米家压力IH电饭煲</a>
											</div>
											<p class="price">999元</p>
										</li>
										<li>
											<div class="figure figure-thumb">
												<a href="https://www.mi.com/p/3469.html?client_id=180100041086&amp;masid=17409.0245" data-stat-id="de6ea49fd51cd475" onclick="_msq.push(['trackEvent', '60439036470411e8-de6ea49fd51cd475', '//www.mi.com/p/3469.htmlclient_id=180100041086&amp;masid=17409.0245', 'pcpid', '']);"><img src="images/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/air2!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/air2!320x220.jpg 2x" alt="查看全部&lt;br/&gt;智能硬件" width="160" height="110"></a>
											</div>
											<div class="title">
												<a href="https://www.mi.com/p/3469.html?client_id=180100041086&amp;masid=17409.0245" data-stat-id="eead17a66c5a0793" onclick="_msq.push(['trackEvent', '60439036470411e8-eead17a66c5a0793', '//www.mi.com/p/3469.htmlclient_id=180100041086&amp;masid=17409.0245', 'pcpid', '']);">查看全部<br>智能硬件</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="link" href="https://www.mi.com/service/" target="_blank" data-stat-id="b8a9c64da1c6d13c" onclick="_msq.push(['trackEvent', '60439036470411e8-b8a9c64da1c6d13c', '//www.mi.com/service/', 'pcpid', '']);"><span class="text">服务</span></a>
						</li>
						<li class="nav-item">
							<a class="link" href="http://www.xiaomi.cn/" target="_blank" data-stat-id="f907df5bad47a236" onclick="_msq.push(['trackEvent', '60439036470411e8-f907df5bad47a236', 'http://www.xiaomi.cn/', 'pcpid', '']);"><span class="text">社区</span></a>
						</li>
					</ul>
				</div>
				<div class="header-search">
					<form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
						<label for="search" class="hide">站内搜索</label>
						<input class="search-text" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米6X','Rst':6},{'Key':'小米MIX&nbsp;2S','Rst':5},{'Key':'黑鲨游戏手机','Rst':3},{'Key':'红米Note&nbsp;5','Rst':6},{'Key':'红米5A','Rst':13},{'Key':'小米电视4C','Rst':5},{'Key':'电视32英寸','Rst':3},{'Key':'笔记本pro','Rst':5},{'Key':'空气净化器','Rst':11},{'Key':'净水器','Rst':8}]}" type="search">
						<input class="search-btn iconfont" value="" type="submit">
						<div class="search-hot-words">
							<a href="https://www.mi.com/mi8/" data-stat-id="bcfb80c36e36ae09" onclick="_msq.push(['trackEvent', '60439036470411e8-bcfb80c36e36ae09', 'https://www.mi.com/mi8/', 'pcpid', '']);">小米8</a>
							<a href="https://item.mi.com/product/10000085.html" data-stat-id="d9f37cb813ce34a2" onclick="_msq.push(['trackEvent', '60439036470411e8-d9f37cb813ce34a2', 'https://item.mi.com/product/10000085.html', 'pcpid', '']);">小米MIX 2S</a>
						</div>
						<div id="J_keywordList" class="keyword-list hide">
							<ul class="result-list"></ul>
						</div>
					</form>
				</div>
			</div>
			<div id="J_navMenu" class="header-nav-menu" style="display: none;">
				<div class="container"></div>
			</div>
		</div>

		<div class="breadcrumbs">
			<div class="container">
				<a href="https://www.mi.com/index.html" data-stat-id="0d3af9f068a22879" onclick="_msq.push(['trackEvent', '60439036470411e8-0d3af9f068a22879', '//www.mi.com/index.html', 'pcpid', '']);">首页</a><span class="sep">&gt;</span><span>订单详情</span> </div>
		</div>

		<div class="page-main user-main">
			<div class="container">
				<div class="row">
					<div class="span4">
						<div class="uc-box uc-sub-box">
							<div class="uc-nav-box">
								<div class="box-hd">
									<h3 class="title">订单中心</h3>
								</div>
								<div class="box-bd">
									<ul class="uc-nav-list">
										<li>
											<a href="https://static.mi.com/order/" data-stat-id="2c31a21fdd82ed97" onclick="_msq.push(['trackEvent', '60439036470411e8-2c31a21fdd82ed97', '//static.mi.com/order/', 'pcpid', '']);">我的订单</a>
										</li>
										<li>
											<a href="https://service.order.mi.com/insurance/payServiceList?_r=24246.1534595078" data-stat-id="5b161373094a0d92" onclick="_msq.push(['trackEvent', '60439036470411e8-5b161373094a0d92', '//service.order.mi.com/insurance/payServiceList_r=24246.1534595078', 'pcpid', '']);">意外保</a>
										</li>
										<li>
											<a href="https://static.mi.com/order/#type=11" data-stat-id="2e5ab59f47c57f9e" onclick="_msq.push(['trackEvent', '60439036470411e8-2e5ab59f47c57f9e', '//static.mi.com/order/#type=11', 'pcpid', '']);">团购订单</a>
										</li>
										<li>
											<a href="https://order.mi.com/user/comment?filter=1&amp;r=24246.1534595078" data-count="comment" data-count-style="bracket" data-stat-id="0df88a600296dd26" onclick="_msq.push(['trackEvent', '60439036470411e8-0df88a600296dd26', 'https://order.mi.com/user/commentfilter=1&amp;r=24246.1534595078', 'pcpid', '']);">评价晒单</a>
										</li>
										<li>
											<a href="https://recharge.10046.mi.com/list" data-stat-id="46265aff07c31d00" onclick="_msq.push(['trackEvent', '60439036470411e8-46265aff07c31d00', '//recharge.10046.mi.com/list', 'pcpid', '']);">话费充值订单</a>
										</li>
										<li>
											<a href="https://huanxin.mi.com/order/list?r=24246.1534595078" data-stat-id="2ec9d5545682e379" onclick="_msq.push(['trackEvent', '60439036470411e8-2ec9d5545682e379', '//huanxin.mi.com/order/listr=24246.1534595078', 'pcpid', '']);">以旧换新订单</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="uc-nav-box">
								<div class="box-hd">
									<h3 class="title">个人中心</h3>
								</div>
								<div class="box-bd">
									<ul class="uc-nav-list">
										<li>
											<a href="https://order.mi.com/portal?r=24246.1534595078" data-stat-id="04c678762f59670c" onclick="_msq.push(['trackEvent', '60439036470411e8-04c678762f59670c', 'https://order.mi.com/portalr=24246.1534595078', 'pcpid', '']);">我的个人中心</a>
										</li>
										<li>
											<a href="https://order.mi.com/message/list?r=24246.1534595078" data-stat-id="b8960bdd20ca5ba3" onclick="_msq.push(['trackEvent', '60439036470411e8-b8960bdd20ca5ba3', 'https://order.mi.com/message/listr=24246.1534595078', 'pcpid', '']);">消息通知<i class="J_miMessageTotal"></i></a>
										</li>
										<li>
											<a href="https://order.mi.com/invite/list?r=24246.1534595078" data-stat-id="846e883f6562d0f2" onclick="_msq.push(['trackEvent', '60439036470411e8-846e883f6562d0f2', 'https://order.mi.com/invite/listr=24246.1534595078', 'pcpid', '']);">购买资格<i class="J_miInviteTotal"></i></a>
										</li>
										<li>
											<a href="https://order.mi.com/cashAccount?r=24246.1534595078" data-stat-id="54972c1899fbf360" onclick="_msq.push(['trackEvent', '60439036470411e8-54972c1899fbf360', 'https://order.mi.com/cashAccountr=24246.1534595078', 'pcpid', '']);">现金账户</a>
										</li>
										<li>
											<a href="https://order.mi.com/ecard/bind?r=24246.1534595078" data-stat-id="c0eff1c82b8a167a" onclick="_msq.push(['trackEvent', '60439036470411e8-c0eff1c82b8a167a', 'https://order.mi.com/ecard/bindr=24246.1534595078', 'pcpid', '']);">小米礼品卡</a>
										</li>
										<li>
											<a href="https://order.mi.com/huanxin/list?r=24246.1534595078" data-stat-id="9d4ca61581fa8780" onclick="_msq.push(['trackEvent', '60439036470411e8-9d4ca61581fa8780', 'https://order.mi.com/huanxin/listr=24246.1534595078', 'pcpid', '']);">现金券</a>
										</li>
										<li>
											<a href="https://order.mi.com/user/favorite?r=24246.1534595078" data-stat-id="df51d5353dab5be6" onclick="_msq.push(['trackEvent', '60439036470411e8-df51d5353dab5be6', 'https://order.mi.com/user/favoriter=24246.1534595078', 'pcpid', '']);">喜欢的商品</a>
										</li>
										<li>
											<a href="https://order.mi.com/user/coupon?r=24246.1534595078" data-stat-id="82841d30d000d1bd" onclick="_msq.push(['trackEvent', '60439036470411e8-82841d30d000d1bd', 'https://order.mi.com/user/couponr=24246.1534595078', 'pcpid', '']);">优惠券</a>
										</li>
										<li>
											<a href="https://order.mi.com/user/address?r=24246.1534595078" data-stat-id="c728725af37345fb" onclick="_msq.push(['trackEvent', '60439036470411e8-c728725af37345fb', 'https://order.mi.com/user/addressr=24246.1534595078', 'pcpid', '']);">收货地址</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="uc-nav-box">
								<div class="box-hd">
									<h3 class="title">售后服务</h3>
								</div>
								<div class="box-bd">
									<ul class="uc-nav-list">
										<li>
											<a href="https://service.order.mi.com/record/list?_r=24246.1534595078" data-stat-id="5e23a7ef156e64bc" onclick="_msq.push(['trackEvent', '60439036470411e8-5e23a7ef156e64bc', '//service.order.mi.com/record/list_r=24246.1534595078', 'pcpid', '']);">服务记录</a>
										</li>
										<li>
											<a href="https://service.order.mi.com/apply/front?_r=24246.1534595078" data-stat-id="2d069fb6b8b6116b" onclick="_msq.push(['trackEvent', '60439036470411e8-2d069fb6b8b6116b', '//service.order.mi.com/apply/front_r=24246.1534595078', 'pcpid', '']);">申请服务</a>
										</li>
										<li>
											<a href="https://service.order.mi.com/user/compensate?_r=24246.1534595078" data-stat-id="36bea027e618478b" onclick="_msq.push(['trackEvent', '60439036470411e8-36bea027e618478b', '//service.order.mi.com/user/compensate_r=24246.1534595078', 'pcpid', '']);">领取快递报销</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="uc-nav-box">
								<div class="box-hd">
									<h3 class="title">账户管理</h3>
								</div>
								<div class="box-bd">
									<ul class="uc-nav-list">
										<li>
											<a href="https://account.xiaomi.com/" target="_blank" data-stat-id="dc97c9b94f956b8c" onclick="_msq.push(['trackEvent', '60439036470411e8-dc97c9b94f956b8c', 'https://account.xiaomi.com/', 'pcpid', '']);">个人信息</a>
										</li>
										<li>
											<a href="https://account.xiaomi.com/pass/auth/security/home#service=setPassword" target="_blank" data-stat-id="48bcc704f7819774" onclick="_msq.push(['trackEvent', '60439036470411e8-48bcc704f7819774', 'https://account.xiaomi.com/pass/auth/security/home#service=setPassword', 'pcpid', '']);">修改密码</a>
										</li>
										<li>
											<a href="http://uvip.xiaomi.cn/" target="_blank" data-stat-id="ca47b90103a184bb" onclick="_msq.push(['trackEvent', '60439036470411e8-ca47b90103a184bb', 'http://uvip.xiaomi.cn', 'pcpid', '']);">社区VIP认证</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<script type="text/javascript">
						if(top.location != location) {
							top.location.href = location.href;
						}

						// 移动端适配
						var UA = navigator.userAgent;
						if(UA.match(/Android/i) || (UA.indexOf('iPhone') != -1) || (UA.indexOf('iPod') != -1)) {
							window.location = '//m.mi.com/order/view/5180818696103617';
						}

						var hasLuckBag = false;
						var needActiveGiftcard = false;
						var canViewGiftcard = false;
						var needBindMobile = true;
						var bindMobile = "";
						var orderSiteHttps = 'https://order.mi.com';
					</script>
					<div class="span16">
						<div class="uc-box uc-main-box">
							<div class="uc-content-box order-view-box">
								<div class="box-hd">
									<h1 class="title">订单详情<small>请谨防钓鱼链接或诈骗电话，<a href="http://bbs.xiaomi.cn/thread/index/tid/11508301" target="_blank" data-stat-id="4f64ddbb08748af3" onclick="_msq.push(['trackEvent', '60439036470411e8-4f64ddbb08748af3', 'http://bbs.xiaomi.cn/thread/index/tid/11508301', 'pcpid', '']);">了解更多&gt;</a></small></h1>
									<div class="more clearfix">
										<h2 class="subtitle">订单号：5180818696103617                        <span class="tag tag-subsidy"></span>
                    </h2>
										<div class="actions">
											<a id="J_cancelOrder" class="btn btn-small btn-line-gray" title="取消订单" data-order-id="5180818696103617" href="javascript:;" data-confirm="你真的要取消此订单吗?" data-stat-id="13112b103e3ea5c9" onclick="_msq.push(['trackEvent', '60439036470411e8-13112b103e3ea5c9', 'javascript:', 'pcpid', '']);">取消订单</a>
											<a id="J_payOrder" class="btn btn-small btn-primary" title="立即支付" href="https://order.mi.com/buy/confirm?id=5180818696103617" target="_blank" data-stat-id="10ee2f0c9b0f7696" onclick="_msq.push(['trackEvent', '60439036470411e8-10ee2f0c9b0f7696', 'https://order.mi.com/buy/confirmid=5180818696103617', 'pcpid', '']);">立即支付</a>
										</div>
									</div>
								</div>
								<div class="box-bd">
									<div class="uc-order-item uc-order-item-pay">
										<div class="order-detail">

											<div class="order-summary">
												<div class="order-status">
													等待付款 </div>
												<div class="order-desc">14分后订单将被关闭</div>
												<div class="order-progress">
													<ol class="progress-list clearfix progress-list-5">
														<li class="step step-first step-active">
															<div class="progress"><span class="text">下单</span></div>
															<div class="info">08月18日 20:23</div>
														</li>
														<li class="step">
															<div class="progress"><span class="text">付款</span></div>
															<div class="info"></div>
														</li>
														<li class="step">
															<div class="progress"><span class="text">配货</span></div>
															<div class="info"></div>
														</li>
														<li class="step">
															<div class="progress"><span class="text">出库</span></div>
															<div class="info"></div>
														</li>
														<li class="step step-last">
															<div class="progress"><span class="text">交易成功</span></div>
															<div class="info"></div>
														</li>
													</ol>
												</div>
											</div>
											<!-- 首次查看密码 -->
											<div class="order-liwu J_giftcard_active hide">
												<div class="box">
													<h3>激活并获取 小米礼物码 密码</h3>
													<p>点击获取密码后，我们将向账户绑定的手机 发送一条验证码<br>由于密码的特殊性，获取后不再支持7天无理由退货</p>
													<a href="javascript:void(0);" class="btn btn-primary J_getGiftViewcode" data-stat-id="88f55609185d7126" onclick="_msq.push(['trackEvent', '60439036470411e8-88f55609185d7126', 'javascript:void0', 'pcpid', '']);">获取密码</a>
												</div>
											</div>
											<!-- 账号未绑定手机号 -->
											<div class="order-liwu J_giftcard_bind hide">
												<div class="box">
													<h3>您的账号尚未绑定手机号</h3>
													<p>为了密码的安全性，获取密码以及每次查看密码都需要通过小米账号绑定的手机号进行验证<br>您的账号尚未绑定手机号，需要绑定手机号后继续操作</p>
													<a href="https://account.xiaomi.com/" target="_blank" class="btn btn-primary " data-stat-id="48735d1cc680acfe" onclick="_msq.push(['trackEvent', '60439036470411e8-48735d1cc680acfe', '//account.xiaomi.com/', 'pcpid', '']);">前往 账号中心</a>
												</div>
											</div>
											<!-- Token已过期，再次查看密码 -->
											<div class="order-liwu J_giftcard_view hide">
												<div class="box">
													<h3>查看 小米礼物码 密码</h3>
													<p>点击查看密码后，我们将向账户绑定的手机 发送一条验证码</p>
													<a href="javascript:void(0);" class="btn btn-primary J_getGiftcode" data-stat-id="bccf4af530edb1d5" onclick="_msq.push(['trackEvent', '60439036470411e8-bccf4af530edb1d5', 'javascript:void0', 'pcpid', '']);">查看密码</a>
												</div>
											</div>
											<!-- 礼物码领取后 -->
											<div class="order-liwu-list J_liwulist hide">
												<h3>小米礼物码 密码</h3>
												<table>

												</table>
												<p>* 电脑访问
													<a href="https://www.mi.com/giftcode/" target="_blank" data-stat-id="c3f5662b73e7ebbc" onclick="_msq.push(['trackEvent', '60439036470411e8-c3f5662b73e7ebbc', '//www.mi.com/giftcode/', 'pcpid', '']);">http://www.mi.com/giftcode/</a> 根据提示使用礼物码，或在小米商城App中以此点击「服务」-「使用礼物码」</p>
											</div>
											<table class="order-items-table">
												<tbody>
													<tr>
														<td class="col col-thumb">
															<div class="figure figure-thumb">
																<a target="_blank" href="https://item.mi.com/1181500026.html" data-stat-id="3b8376f829cf318d" onclick="_msq.push(['trackEvent', '60439036470411e8-3b8376f829cf318d', '//item.mi.com/1181500026.html', 'pcpid', '']);">
																	<img src="images/pms_1524621084.jpg" alt="" width="80" height="80">
																</a>
															</div>
														</td>
														<td class="col col-name">
															<p class="name">
																<a target="_blank" href="https://item.mi.com/1181500026.html" data-stat-id="edb914e4496edc14" onclick="_msq.push(['trackEvent', '60439036470411e8-edb914e4496edc14', '//item.mi.com/1181500026.html', 'pcpid', '']);">小米6X 全网通版 4GB内存 64GB 流沙金</a>

															</p>
														</td>
														<td class="col col-price">
															<p class="price">1399元 × 1</p>
														</td>
														<td class="col col-actions">

														</td>
													</tr>
													<tr>
														<td class="col col-thumb">
															<div class="figure figure-thumb">
																<a target="_blank" href="https://item.mi.com/1173000036.html" data-stat-id="658f976e097bb26f" onclick="_msq.push(['trackEvent', '60439036470411e8-658f976e097bb26f', '//item.mi.com/1173000036.html', 'pcpid', '']);">
																	<img src="images/pms_1501236937.jpg" alt="" width="80" height="80">
																</a>
															</div>
														</td>
														<td class="col col-name">
															<p class="name">
																<a target="_blank" href="https://item.mi.com/1173000036.html" data-stat-id="ba86cf2d925832bd" onclick="_msq.push(['trackEvent', '60439036470411e8-ba86cf2d925832bd', '//item.mi.com/1173000036.html', 'pcpid', '']);">米粉卡日租卡</a>

															</p>
														</td>
														<td class="col col-price">
															<p class="price">0元 × 1</p>
														</td>
														<td class="col col-actions">

														</td>
													</tr>
													<tr>
														<td class="col col-thumb">
															<div class="figure figure-thumb">
																<a target="_blank" href="https://item.mi.com/1181100030.html" data-stat-id="3355b9e5b02d6334" onclick="_msq.push(['trackEvent', '60439036470411e8-3355b9e5b02d6334', '//item.mi.com/1181100030.html', 'pcpid', '']);">
																	<img src="images/pms_1534130429.jpg" alt="" width="80" height="80">
																</a>
															</div>
														</td>
														<td class="col col-name">
															<p class="name">
																<a target="_blank" href="https://item.mi.com/1181100030.html" data-stat-id="29e773481dbe0df1" onclick="_msq.push(['trackEvent', '60439036470411e8-29e773481dbe0df1', '//item.mi.com/1181100030.html', 'pcpid', '']);">小米移动吃到饱体验卡 三切</a>

															</p>
														</td>
														<td class="col col-price">
															<p class="price">0元 × 1</p>
														</td>
														<td class="col col-actions">

														</td>
													</tr>

												</tbody>
											</table>
										</div>

										<div id="editAddr" class="order-detail-info">

											<h3>收货信息</h3>
											<table class="info-table">
												<tbody>
													<tr>
														<th>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</th>
														<td>曲猛</td>
													</tr>
													<tr>
														<th>联系电话：</th>
														<td>152****2202</td>
													</tr>
													<tr>
														<th>收货地址：</th>
														<td>山东 聊城市 东昌府区 广平乡 广平乡大曲村</td>
													</tr>
												</tbody>
											</table>
											<div class="actions">
												<a class="btn btn-small btn-line-gray J_editAddr" href="#editAddr" data-get="https://order.mi.com/order/updaterender/orderId/5180818696103617/type/address" data-update="https://order.mi.com/order/updatehandler/orderId/5180818696103617/type/address" data-stat-id="3fd7cbd06eccf386" onclick="_msq.push(['trackEvent', '60439036470411e8-3fd7cbd06eccf386', '#editAddr', 'pcpid', '']);">修改</a>
											</div>

										</div>

										<div id="editTime" class="order-detail-info">
											<h3>支付方式及送货时间</h3>
											<table class="info-table">
												<tbody>
													<tr>
														<th>支付方式：</th>
														<td>在线支付</td>
													</tr>
													<tr>
														<th>送货时间：</th>
														<td>不限送货时间</td>
													</tr>

												</tbody>
											</table>
											<div class="actions">
												<a class="btn btn-small btn-line-gray J_editTime" href="#editTime" data-get="https://order.mi.com/order/updaterender/orderId/5180818696103617/type/time" data-update="https://order.mi.com/order/updatehandler/orderId/5180818696103617/type/time" data-stat-id="34b8ee1cf03858e8" onclick="_msq.push(['trackEvent', '60439036470411e8-34b8ee1cf03858e8', '#editTime', 'pcpid', '']);">
													修改
												</a>
											</div>
										</div>
										<div class="order-detail-info">
											<h3>发票信息</h3>
											<table class="info-table">
												<tbody>
													<tr>
														<th>发票类型：</th>
														<td>电子发票</td>
													</tr>
													<tr>
														<th>发票内容：</th>
														<td>购买商品明细</td>
													</tr>
													<tr>
														<th>发票抬头：</th>
														<td>个人</td>
													</tr>
												</tbody>
											</table>
											<div class="actions">
												<a class="btn btn-small btn-line-gray hide" href="javascript:void(0);" id="J_resetInvoice" data-stat-id="8bad5a65ef6d4169" onclick="_msq.push(['trackEvent', '60439036470411e8-8bad5a65ef6d4169', 'javascript:void0', 'pcpid', '']);">发票换开</a>
												<a class="btn btn-small btn-line-gray hide" href="javascript:void(0);" id="J_invoiceExpress" data-stat-id="c8f2ae837dc51df2" onclick="_msq.push(['trackEvent', '60439036470411e8-c8f2ae837dc51df2', 'javascript:void0', 'pcpid', '']);">发票物流</a>
											</div>

											<div class="order-delivery order-delivery-detail" id="J_invoiceExpressDetail">
												<p class="delivery-num hide" id="J_invoiceExpressInfo">
													物流公司：
													<a href="https://order.mi.com/user/orderView/%7B%7Bexpress_web_site%7D%7D" target="_blank" data-stat-id="9db83b9935af84fc" onclick="_msq.push(['trackEvent', '60439036470411e8-9db83b9935af84fc', 'express_web_site', 'pcpid', '']);">{{express_name}} <i class="iconfont"></i></a>
													物流单号：{{express_sn}}
												</p>
												<p class="delivery-num hide" id="J_invoiceExpressInfoEmpty">
													纸质发票物流信息
												</p>
												<div class="delivery-list-wrapper">
													<ul class="delivery-list" id="J_invoiceExpressList">
														<li class="loading">
															<div class="loader"></div>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="order-detail-total">
											<table class="total-table">

												<tbody>
													<tr>
														<th>商品总价：</th>
														<td><span class="num">1399</span>元</td>
													</tr>
													<tr>
														<th>运费：</th>
														<td><span class="num">0</span>元</td>
													</tr>
													<tr>
														<th class="total">应付金额：</th>
														<td class="total"><span class="num">1399</span>元</td>
													</tr>

												</tbody>
											</table>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- 福袋弹层 -->
					<div id="J_modalLuckybag" class="modal modal-luckybag fade modal-hide">
						<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="747c64927419436b" onclick="_msq.push(['trackEvent', '60439036470411e8-747c64927419436b', 'javascript:void0', 'pcpid', '']);"></a>
						<div class="con">

						</div>
						<a class="btn btn-excrete J_openLuckBag" href="javascript:%20void(0);" data-id="5180818696103617" data-stat-id="f0eaff2189b82f87" onclick="_msq.push(['trackEvent', '60439036470411e8-f0eaff2189b82f87', 'javascript:void0', 'pcpid', '']);"></a>
					</div>
					<!-- 福袋弹层 -->
					<div id="J_modalLuckybagPro" class="modal modal-luckybagpro fade modal-hide">
						<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="2c468dd1d71f159e" onclick="_msq.push(['trackEvent', '60439036470411e8-2c468dd1d71f159e', 'javascript:void0', 'pcpid', '']);"></a>
						<div class="con">
						</div>
					</div>
					<script type="text/x-dot-template" id="J_luckbagTmp">
						<h3></h3>
						<ul>
							{{~it:json}}
							<li>
								<img src="{{=json.goods_img}}">
								<span class="name">{{=json.goods_name}}</span>
								<span class="desc">{{=json.goods_desc}}</span>
							</li>
							{{~}}
						</ul>
					</script>

					<div id="J_modalVerify" class="modal modal-verify modal-hide">
						<div class="modal-hd">
							<h3 class="title">验证信息</h3>
							<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="20cbddb9233862d6" onclick="_msq.push(['trackEvent', '60439036470411e8-20cbddb9233862d6', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
						</div>
						<div class="modal-bd">
							<div class="loading">
								<div class="loader"></div>
							</div>
						</div>
						<div class="modal-ft hide">
							<a class="btn  btn-gray" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="ddbff868eed5a374" onclick="_msq.push(['trackEvent', '60439036470411e8-ddbff868eed5a374', 'javascript:void0', 'pcpid', '']);">取消</a>
							<a id="J_submitForm" class="btn  btn-primary" href="javascript:%20void(0);" data-stat-id="2e3a4e26180a5044" onclick="_msq.push(['trackEvent', '60439036470411e8-2e3a4e26180a5044', 'javascript:void0', 'pcpid', '']);">确认</a>
						</div>
					</div>

					<!-- 礼物码发验证码弹层 -->
					<div id="J_modalLiwu" class="modal modal-liwu fade modal-hide">
						<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="d690acbfeae01e77" onclick="_msq.push(['trackEvent', '60439036470411e8-d690acbfeae01e77', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
						<div class="modal-bd">
							<p>已向您绑定的手机（）发送验证码</p>
							<form action="" id="J_liwucodeForm" class="form-liwucode">
								<div class="form-section">
									<label class="input-label" for="liwucode">输入验证码</label>
									<input class="input-text" id="liwucode" name="liwucode" type="text">
									<a id="J_getnewLiwucode" class="sent disabled" href="javascript:%20void(0);" data-stat-id="1b54f526b7bebde9" onclick="_msq.push(['trackEvent', '60439036470411e8-1b54f526b7bebde9', 'javascript:void0', 'pcpid', '']);"><span class="time"><em>60</em>s 后可</span>重新发送</a>
								</div>
							</form>
							<p class="error"></p>
						</div>
						<div class="modal-footer">
							<a class="btn  btn-gray btn-large" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="a34103a69c4848c2" onclick="_msq.push(['trackEvent', '60439036470411e8-a34103a69c4848c2', 'javascript:void0', 'pcpid', '']);">取消</a>
							<a id="J_submitLiwuForm" class="btn btn-primary btn-large" href="javascript:%20void(0);" data-stat-id="996fae440192751f" onclick="_msq.push(['trackEvent', '60439036470411e8-996fae440192751f', 'javascript:void0', 'pcpid', '']);">确认</a>
						</div>
					</div>
					<div id="J_modalEditTime" class="modal modal-edit-time modal-hide">
						<div class="modal-hd">
							<h3 class="title">送货时间</h3>
							<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="0ef00c3f514a55e0" onclick="_msq.push(['trackEvent', '60439036470411e8-0ef00c3f514a55e0', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
						</div>
						<div class="modal-bd">
							<div class="loading">
								<div class="loader"></div>
							</div>
						</div>
						<div class="modal-ft">
							<a class="btn btn-gray" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="307777db04c24821" onclick="_msq.push(['trackEvent', '60439036470411e8-307777db04c24821', 'javascript:void0', 'pcpid', '']);">取消</a>
							<a id="J_submitEditTime" class="btn btn-primary" href="javascript:%20void(0);" data-stat-id="d6c963de692f1805" onclick="_msq.push(['trackEvent', '60439036470411e8-d6c963de692f1805', 'javascript:void0', 'pcpid', '']);">保存</a>
						</div>
					</div>

					<div class="deliver-beta hide" id="J_deliverBeta">
						<p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p>
						<a href="https://static.mi.com/feedback/" target="_blank" data-stat-id="116f72a0035dbeb0" onclick="_msq.push(['trackEvent', '60439036470411e8-116f72a0035dbeb0', '//static.mi.com/feedback/', 'pcpid', '']);">问题反馈 &gt;</a>
						<i class="arrow arrow-a"></i>
						<i class="arrow arrow-b"></i>
					</div>

					<div class="modal modal-invoice modal-hide fade" id="J_modalInvoiceInfo">
						<div class="modal-hd">
							<span class="title">发票信息</span>
							<span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
						</div>
						<div class="modal-body">
							<div class="in-section clearfix">
								<label class="tit">发票类型：</label>
								<ul class="options options-list  clearfix">
									<li data-type="invoice" data-invoice-type="not_invoice" class="hide J_invoiceOption">
										不开发票
									</li>
									<li data-type="invoice" data-invoice-type="personal" class="hide J_invoiceOption">
										纸质发票
									</li>
									<li data-type="invoice" data-invoice-type="electron" class=" J_invoiceOption selected">
										电子发票
									</li>
								</ul>

								<div class="invoice-tip active" id="J_invoiceDefaultTip">
									订单付款后，可支持换开发票一次。<br>
									<span>换开纸质发票需联系客服，并承担运费。</span>
									<a href="https://www.mi.com/service/contact/" target="_blank" class="" data-stat-id="d68fc3c7792efa34" onclick="_msq.push(['trackEvent', '60439036470411e8-d68fc3c7792efa34', '//www.mi.com/service/contact/', 'pcpid', '']);">换开纸质发票 &gt;</a>
								</div>
							</div>

							<div id="J_invoceInfoOpionsContent">
								<div class="in-section clearfix" id="J_invoiceTitleSec">
									<label class="tit">发票抬头：</label>
									<ul class="options options-list clearfix">
										<li data-type="invoice-mode" data-invoice-mode="personal" class="J_invoiceOption">
											个人
										</li>
										<li data-type="invoice-mode" data-invoice-mode="company" class="J_invoiceOption">
											单位
										</li>
									</ul>
									<div class="form-section">
										<label class="input-label" for="invoice_title">请输入发票抬头</label>
										<input class="input-text input-text-big" id="invoice_title" name="invoice_title" value="个人" type="text">
									</div>
								</div>

								<div class="in-section clearfix hide" id="J_invoiceCompanyCode">
									<label class="tit">单位税号：</label>
									<div class="form-section">
										<label class="input-label" for="invoice_company_code">请填写购买方纳税人识别号或统一社会信用代码</label>
										<input class="input-text input-text-big" id="invoice_company_code" name="invoice_company_code" type="text">
										<a href="javascript:void(0);" data-bubble-toggle="invoiceCompanyCodeQa" data-stat-id="936b00a83249db01" onclick="_msq.push(['trackEvent', '60439036470411e8-936b00a83249db01', 'javascript:void0', 'pcpid', '']);"><i class="icon-qa">?</i></a>
										<div class="qa-detail hide" data-bubble="invoiceCompanyCodeQa">
											纳税人识别号为营业执照上的统一社会信用代码或税务登记证上的税号，一般为15、17、18、20位数字或大写字母。
										</div>
									</div>
								</div>

								<div class="in-section in-section-con clearfix">
									<label class="tit">发票内容：</label> 购买商品明细
								</div>

								<div class="more">
									<dl>
										<dt>发票须知：</dt>
										<dd>1.发票金额为实际支付金额，不包含优惠券、礼品卡等；</dd>
										<dd>2.电子发票可以在订单完成后，在订单详情中下载和查看；</dd>
										<dd>3.纸质发票不与商品同时发出，商品妥投完成7日后发出，收到后请妥善保存，如退货需一同寄回。</dd>
										<dd>
											<a href="https://order.mi.com/static/invoice" target="_blank" data-stat-id="5128f9b28d3b3d06" onclick="_msq.push(['trackEvent', '60439036470411e8-5128f9b28d3b3d06', 'https://order.mi.com/static/invoice', 'pcpid', '']);">发票相关问题 &gt;</a>
										</dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal" data-stat-id="c382ffbdf127a22d" onclick="_msq.push(['trackEvent', '60439036470411e8-c382ffbdf127a22d', 'javascript:void0', 'pcpid', '']);">取消</a>
							<a href="javascript:void(0);" class="btn btn-primary" id="J_resetInvoiceSubmit" data-stat-id="aff424e94f9ec791" onclick="_msq.push(['trackEvent', '60439036470411e8-aff424e94f9ec791', 'javascript:void0', 'pcpid', '']);">保存</a>
						</div>
					</div>

					<div id="J_choose" class="modal modal-video fade modal-hide">
						<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="33a89eb50f8d244a" onclick="_msq.push(['trackEvent', '60439036470411e8-33a89eb50f8d244a', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
						<div class="modal-bd">
							<p></p>
						</div>
						<div class="modal-ft">
							<a class="btn btn-primary" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="504e6b98a17366d1" onclick="_msq.push(['trackEvent', '60439036470411e8-504e6b98a17366d1', 'javascript:void0', 'pcpid', '']);">确定</a>
						</div>
					</div>

					<div id="J_orderCheckGlassBuy" class="modal fade modal-order modal-check modal-hide">
						<a class="close" data-dismiss="modal" data-stat-id="21148e02c16c1aff" onclick="_msq.push(['trackEvent', '60439036470411e8-21148e02c16c1aff', '', 'pcpid', '']);"><i class="iconfont"></i></a>
						<div class="modal-body">

						</div>
					</div>
					<!-- 镜片确定页面表单模板-->
					<script id="J_glasscheckOrderTmp" type="text/x-dot-template">
						<div class="choose-eye">
							<div class="subTitle">你的定制度数</div>
							<table>
								<tr>
									<td></td>
									<td>左眼</td>
									<td>右眼</td>
								</tr>
								<tr>
									<td>度数</td>
									<td>{{=Number(it.sph_l).toFixed(2)}}</td>
									<td>{{=Number(it.sph_r).toFixed(2)}}</td>
								</tr>
								<tr>
									<td>瞳距</td>
									<td colspan="2">{{?it.pd === ''}}－{{??}}{{=Number(it.pd).toFixed(2)}} {{?}}</td>
								</tr>
								<tr>
									<td>散光</td>
									<td>{{=Number(it.cyl_l).toFixed(2)}}</td>
									<td>{{=Number(it.cyl_r).toFixed(2)}}</td>
								</tr>
								<tr>
									<td>轴距</td>
									<td>{{?it.axis_l === ''}}－ {{??}}{{=Number(it.axis_l).toFixed(2)}} {{?}}</td>
									<td>{{?it.axis_r === ''}}－ {{??}}{{=Number(it.axis_r).toFixed(2)}} {{?}}</td>
								</tr>
							</table>
						</div>
						<div class="choose-glass">
							<div class="subTitle">你的镜片折射率</div>
							<table>
								<tr>
									<td width="50%">镜片折射率</td>
									<td width="50%">{{=Number(it.refractive_index).toFixed(2)}}</td>
								</tr>
							</table>
						</div>
					</script>
					<script type="text/x-dot-template" id="J_liwucardTmp">
						<tr>
							<th colspan="2">产品名称</th>
							<th colspan="2">密码</th>
							<th>有效期至</th>
							<th>状态</th>
						</tr>
						{{~it:json}} {{?json.status !== 'ok'}}
						<tr class="over">
							{{??}}
							<tr>
								{{?}}
								<td colspan="2">
									<span class="name">{{=json.title}}</span>
									<span class="code">{{=json.id}}</span>
								</td>
								<td colspan="2">{{=json.cardno}}</td>
								{{ function fotmateNum (n , m){ return (n
								< 10 ? '0' + n : n) + m; } function setTime(n){ var date=n ew Date(parseInt(n) * 1000); Y=d ate.getFullYear() + '-'; month=d ate.getMonth(); M=f otmateNum(date.getMonth() + 1 , '-'); D=f otmateNum(date.getDate(), '  '); h=f otmateNum(date.getHours(), ':'); m=f otmateNum(date.getMinutes(), ':'); s=f otmateNum(date.getSeconds(), ''); return Y+M+D+h+m+s; } }} <td>{{=setTime(json.end_time)}}</td>
									<td>
										{{?Number(json.used_time) > 0}}
										<span>{{=json.status_txt}}</span>
										<span>{{=setTime(json.used_time)}}</span> {{??}} {{=json.status_txt}} {{?}}
									</td>
							</tr>
							{{~}}
					</script>
					<script>
						var ORDERID = 5180818696103617;
						var FUDAI_CONFIG = {
							"share_url": "http:\/\/hd.mi.com\/x\/03281m\/index.html",
							"share_image": "\/\/c1.mifile.cn\/f\/i\/15\/fudai\/20170406.jpg",
							"share_content": "#\u7c73\u7c89\u8282# \u5c0f\u7c73\u7535\u89c64A\u53ef1\u5206\u94b1\u52a0\u8d2d\u798f\u888b\uff0c100%\u5f97\u597d\u793c\uff014.6-4.9\u4e0a\u767e\u6b3e\u79d1\u6280\u4ea7\u54c1\u7279\u4ef7\u72c2\u6b22\uff0c\u4e0d\u53ea\u662f5\u6298\u3002\u65b0\u54c1\u7535\u89c6\u6700\u9ad8\u51cf100\u5143\uff0c\u52a0\u8d2d\u798f\u888b100%\u6709\u597d\u793c\u54e6\uff01\u5feb\u4e0a@\u5c0f\u7c73\u5546\u57ce \u4e00\u8d77\u72c2\u6b22\u5427\uff01"
						};
					</script>
					<script>
						window.onload = function() {
							var $model = $('#J_choose');
							$(".J_useservice").on("click", function() {
								var $id = $(this).attr("data_id");
								var $btn = $(this);
								if($btn.hasClass('btn-disabled')) {
									return false;
								}
								$.ajax({
									type: "get",
									async: true,
									url: "//service.order.mi.com/apply/getOrderVisitRepairStatus?order_id=" + $id,
									dataType: "jsonp",
									jsonp: "jsonpcallback",
									success: function(json) {
										$btn.addClass('btn-disabled');
										if(json.code === 0) {
											window.location.href = "//service.order.mi.com" + json.data.redirectURL;
										} else if(json.code === 2001) {
											$btn.text('服务已使用');
											$model.one('show.bs.modal', function() {
												$model.find('.modal-bd').html('<p>' + json.msg + '</p>');
											}).modal('show').one('hidden.bs.modal');
										} else if(json.code === 2002) {
											$btn.text('服务已失效');
											$model.one('show.bs.modal', function() {
												$model.find('.modal-bd').html('<p>' + json.msg + '</p>');
											}).modal('show').one('hidden.bs.modal');
										} else if(json.code === 2003) {
											$btn.text('服务使用中');
											window.location.href = "//service.order.mi.com" + json.data.redirectURL;
										} else {
											$model.one('show.bs.modal', function() {
												$model.find('.modal-bd').html('<p>' + json.msg + '</p>');
											}).modal('show').one('hidden.bs.modal');
										}
									},
									error: function() {
										alert('接口出错，请重试!');
									}
								});

							});

							$(".J_confirmReceive").on("click", function() {
								var $btn = $(this);
								if($btn.hasClass('btn-disabled')) {
									return false;
								}
								$.ajax({
									type: "post",
									url: "/order/confirmReceive",
									data: {
										order_id: ORDERID
									},
									dataType: "json",
									success: function(json) {
										$btn.addClass('btn-disabled');
										if(json.code === 0) {
											$btn.remove();
											$model.one('show.bs.modal', function() {
												$model.find('.modal-bd').html('<p style="text-align:center;font-size:24px;">' + json.msg + '</p>');
											}).modal('show').one('hidden.bs.modal');
										} else {
											$btn.removeClass('btn-disabled');
											$model.one('show.bs.modal', function() {
												$model.find('.modal-bd').html('<p style="text-align:center;font-size:24px;">' + json.msg + '</p>');
											}).modal('show').one('hidden.bs.modal');
										}
									},
									error: function() {
										alert('网络出现错误，请稍后再试!');
									}
								});

							});

						}
					</script>
				</div>
			</div>
		</div>

		<div class="site-footer">
			<div class="container">
				<div class="footer-service">
					<ul class="list-service clearfix">
						<li>
							<a rel="nofollow" href="https://www.mi.com/static/fast/" target="_blank" data-stat-id="49a7a4f911a79156" onclick="_msq.push(['trackEvent', '60439036470411e8-49a7a4f911a79156', '//www.mi.com/static/fast/', 'pcpid', '']);"><i class="iconfont"></i>预约维修服务</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/exchange#back" target="_blank" data-stat-id="8cb3be688da06a68" onclick="_msq.push(['trackEvent', '60439036470411e8-8cb3be688da06a68', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>7天无理由退货</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/exchange#back" target="_blank" data-stat-id="93724778c53efe9f" onclick="_msq.push(['trackEvent', '60439036470411e8-93724778c53efe9f', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>15天免费换货</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/buy/postage/" target="_blank" data-stat-id="3080e4bf4ef8146d" onclick="_msq.push(['trackEvent', '60439036470411e8-3080e4bf4ef8146d', '//www.mi.com/service/buy/postage/', 'pcpid', '']);"><i class="iconfont"></i>满150元包邮</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="163cac276955f6a7" onclick="_msq.push(['trackEvent', '60439036470411e8-163cac276955f6a7', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);"><i class="iconfont"></i>520余家售后网点</a>
						</li>
					</ul>
				</div>
				<div class="footer-links clearfix">

					<dl class="col-links col-links-first">
						<dt>帮助中心</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/account/register/" target="_blank" data-stat-id="f4e20223a20575fd" onclick="_msq.push(['trackEvent', '60439036470411e8-f4e20223a20575fd', '//www.mi.com/service/account/register/', 'pcpid', '']);">账户管理</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/buy/buytime/" target="_blank" data-stat-id="23f33666f6e59efd" onclick="_msq.push(['trackEvent', '60439036470411e8-23f33666f6e59efd', '//www.mi.com/service/buy/buytime/', 'pcpid', '']);">购物指南</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/order/sendprogress/" target="_blank" data-stat-id="ac5e744ce1c645c9" onclick="_msq.push(['trackEvent', '60439036470411e8-ac5e744ce1c645c9', '//www.mi.com/service/order/sendprogress/', 'pcpid', '']);">订单操作</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>服务支持</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/exchange" target="_blank" data-stat-id="a250bb8bb9c8a9e9" onclick="_msq.push(['trackEvent', '60439036470411e8-a250bb8bb9c8a9e9', '//www.mi.com/service/exchange', 'pcpid', '']);">售后政策</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/" target="_blank" data-stat-id="0b8e0e1ef8f8d171" onclick="_msq.push(['trackEvent', '60439036470411e8-0b8e0e1ef8f8d171', '//www.mi.com/service/', 'pcpid', '']);">自助服务</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/c/service/download/" target="_blank" data-stat-id="3fc239050609dc42" onclick="_msq.push(['trackEvent', '60439036470411e8-3fc239050609dc42', '//www.mi.com/c/service/download/', 'pcpid', '']);">相关下载</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>线下门店</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/c/xiaomizhijia/" target="_blank" data-stat-id="414f0170b130f21d" onclick="_msq.push(['trackEvent', '60439036470411e8-414f0170b130f21d', '//www.mi.com/c/xiaomizhijia/', 'pcpid', '']);">小米之家</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="3d91922d548efa9e" onclick="_msq.push(['trackEvent', '60439036470411e8-3d91922d548efa9e', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);">服务网点</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/static/familyLocation/" target="_blank" data-stat-id="d0427140fa20c556" onclick="_msq.push(['trackEvent', '60439036470411e8-d0427140fa20c556', '//www.mi.com/static/familyLocation/', 'pcpid', '']);">授权体验店</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>关于小米</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/about/" target="_blank" data-stat-id="5c0812beae2c4c42" onclick="_msq.push(['trackEvent', '60439036470411e8-5c0812beae2c4c42', '//www.mi.com/about/', 'pcpid', '']);">了解小米</a>
						</dd>

						<dd>
							<a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="9c0b814c4dd5f2b1" onclick="_msq.push(['trackEvent', '60439036470411e8-9c0b814c4dd5f2b1', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/ir/" target="_blank" data-stat-id="b4c4d31a4e0dc7a7" onclick="_msq.push(['trackEvent', '60439036470411e8-b4c4d31a4e0dc7a7', '//www.mi.com/ir/', 'pcpid', '']);">投资者关系</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>关注我们</dt>

						<dd>
							<a rel="nofollow" href="https://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="98a009ca38277600" onclick="_msq.push(['trackEvent', '60439036470411e8-98a009ca38277600', 'https://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a>
						</dd>

						<dd>
							<a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" data-stat-id="fbe5c5ae8ec81005" onclick="_msq.push(['trackEvent', '60439036470411e8-fbe5c5ae8ec81005', '#J_modalWeixin', 'pcpid', '']);">官方微信</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/about/contact/" target="_blank" data-stat-id="8440b9bfafac16fa" onclick="_msq.push(['trackEvent', '60439036470411e8-8440b9bfafac16fa', '//www.mi.com/about/contact/', 'pcpid', '']);">联系我们</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>特色服务</dt>

						<dd>
							<a rel="nofollow" href="https://order.mi.com/queue/f2code" target="_blank" data-stat-id="88f23087eb03a766" onclick="_msq.push(['trackEvent', '60439036470411e8-88f23087eb03a766', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/giftcode/" target="_blank" data-stat-id="1ca643a297401a71" onclick="_msq.push(['trackEvent', '60439036470411e8-1ca643a297401a71', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://order.mi.com/misc/checkitem" target="_blank" data-stat-id="7d10685f1e0ea01b" onclick="_msq.push(['trackEvent', '60439036470411e8-7d10685f1e0ea01b', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a>
						</dd>

					</dl>

					<div class="col-contact">
						<p class="phone">400-100-5678</p>
						<p>
							周一至周日 8:00-18:00<br>（仅收市话费）
						</p>
						<a rel="nofollow" class="btn btn-line-primary btn-small" href="https://www.mi.com/service/contact/" target="_blank" data-stat-id="b6cc94d1a363fd6f" onclick="_msq.push(['trackEvent', '60439036470411e8-b6cc94d1a363fd6f', '//www.mi.com/service/contact/', 'pcpid', '']);"><i class="iconfont"></i> 联系客服</a>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">
				<div class="logo ir">小米官网</div>
				<div class="info-text">
					<p class="sites">
						<a href="https://www.mi.com/index.html" target="_blank" data-stat-id="319398c86aa5f2c2" onclick="_msq.push(['trackEvent', '60439036470411e8-319398c86aa5f2c2', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span>
						<a href="https://www.miui.com/" target="_blank" data-stat-id="10a8fe2efff66fe3" onclick="_msq.push(['trackEvent', '60439036470411e8-10a8fe2efff66fe3', 'https://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span>
						<a href="https://home.mi.com/index.html" target="_blank" data-stat-id="7414ac00688b599c" onclick="_msq.push(['trackEvent', '60439036470411e8-7414ac00688b599c', 'https://home.mi.com/index.html', 'pcpid', '']);">米家</a><span class="sep">|</span>
						<a href="http://www.miliao.com/" target="_blank" data-stat-id="f55b175e8003197e" onclick="_msq.push(['trackEvent', '60439036470411e8-f55b175e8003197e', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span>
						<a href="https://www.duokan.com/" target="_blank" data-stat-id="859a9de6f481462c" onclick="_msq.push(['trackEvent', '60439036470411e8-859a9de6f481462c', 'https://www.duokan.com/', 'pcpid', '']);">多看</a><span class="sep">|</span>
						<a href="http://game.xiaomi.com/" target="_blank" data-stat-id="330635f5ce3a05c6" onclick="_msq.push(['trackEvent', '60439036470411e8-330635f5ce3a05c6', 'http://game.xiaomi.com/', 'pcpid', '']);">游戏</a><span class="sep">|</span>
						<a href="http://www.miwifi.com/" target="_blank" data-stat-id="3a4143905439a176" onclick="_msq.push(['trackEvent', '60439036470411e8-3a4143905439a176', 'http://www.miwifi.com/', 'pcpid', '']);">路由器</a><span class="sep">|</span>
						<a href="https://www.mi.com/micard/" target="_blank" data-stat-id="6901b244f900ba29" onclick="_msq.push(['trackEvent', '60439036470411e8-6901b244f900ba29', '//www.mi.com/micard/', 'pcpid', '']);">米粉卡</a><span class="sep">|</span>
						<a href="https://b.mi.com/?client_id=180100031058&amp;masid=17409.0358" target="_blank" data-stat-id="0df6fb70427cd046" onclick="_msq.push(['trackEvent', '60439036470411e8-0df6fb70427cd046', 'https://b.mi.com/client_id=180100031058&amp;masid=17409.0358', 'pcpid', '']);">政企服务</a><span class="sep">|</span>
						<a href="https://xiaomi.tmall.com/" target="_blank" data-stat-id="93d5153bbac41293" onclick="_msq.push(['trackEvent', '60439036470411e8-93d5153bbac41293', 'https://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span>
						<a href="https://www.mi.com/about/privacy/" target="_blank" data-stat-id="52df57bf583e0b98" onclick="_msq.push(['trackEvent', '60439036470411e8-52df57bf583e0b98', 'https://www.mi.com/about/privacy/', 'pcpid', '']);">隐私政策</a><span class="sep">|</span>
						<a href="https://static.mi.com/feedback/" target="_blank" data-stat-id="b2f006354a5ffd1d" onclick="_msq.push(['trackEvent', '60439036470411e8-b2f006354a5ffd1d', 'https://static.mi.com/feedback/', 'pcpid', '']);">问题反馈</a><span class="sep">|</span>
						<a href="https://www.mi.com/jiancha/" target="_blank" data-stat-id="ce4bdcaa8b698aa9" onclick="_msq.push(['trackEvent', '60439036470411e8-ce4bdcaa8b698aa9', '//www.mi.com/jiancha/', 'pcpid', '']);">廉正举报</a><span class="sep">|</span>
						<a href="#J_modal-globalSites" data-toggle="modal" target="_blank" data-stat-id="1ab167e7d0e0b235" onclick="_msq.push(['trackEvent', '60439036470411e8-1ab167e7d0e0b235', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>
					</p>
					<p>©
						<a href="https://www.mi.com/" target="_blank" title="mi.com" data-stat-id="bf3d96b77e32ce50" onclick="_msq.push(['trackEvent', '60439036470411e8-bf3d96b77e32ce50', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号
						<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="7373246cec627508" onclick="_msq.push(['trackEvent', '60439036470411e8-7373246cec627508', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a>
						<a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="0f79f7122c7b3daf" onclick="_msq.push(['trackEvent', '60439036470411e8-0f79f7122c7b3daf', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a>
						<a rel="nofollow" href="https://i8.mifile.cn/b2c-mimall-media/63cbc1342511938fc1395113f81324c4.jpg" target="_blank" data-stat-id="e5720c15b34919ad" onclick="_msq.push(['trackEvent', '60439036470411e8-e5720c15b34919ad', '//i8.mifile.cn/b2c-mimall-media/63cbc1342511938fc1395113f81324c4.jpg', 'pcpid', '']);">京网文[2017]1530-131号</a>

						<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
				</div>
				<div class="info-links">
					<a href="https://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank" data-stat-id="ef8dd98dd8008fdf" onclick="_msq.push(['trackEvent', '60439036470411e8-ef8dd98dd8008fdf', '//privacy.truste.com/privacy-seal/validationrid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid', '']);"><img src="images/truste.png" alt="TRUSTe Privacy Certification"></a>
					<a href="https://search.szfw.org/cert/l/CX20120926001783002010" target="_blank" data-stat-id="4eafa623a8f52f5e" onclick="_msq.push(['trackEvent', '60439036470411e8-4eafa623a8f52f5e', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid', '']);"><img src="images/v-logo-2.png" alt="诚信网站"></a>
					<a href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank" data-stat-id="e9b5e83588e52c0a" onclick="_msq.push(['trackEvent', '60439036470411e8-e9b5e83588e52c0a', 'https://ss.knet.cn/verifyseal.dllsn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid', '']);"><img src="images/v-logo-1.png" alt="可信网站"></a>
					<a href="http://www.315online.com.cn/member/315140007.html" target="_blank" data-stat-id="291279ccceb8a546" onclick="_msq.push(['trackEvent', '60439036470411e8-291279ccceb8a546', 'http://www.315online.com.cn/member/315140007.html', 'pcpid', '']);"><img src="images/v-logo-3.png" alt="网上交易保障中心"></a>
					<a href="https://www.mi.com/service/buy/commitment/" target="_blank" data-stat-id="506236d03659c86c" onclick="_msq.push(['trackEvent', '60439036470411e8-506236d03659c86c', 'https://www.mi.com/service/buy/commitment/', 'pcpid', '']);"><img src="images/ba10428a4f9495ac310fd0b5e0cf8370.png" alt="诚信经营 放心消费"></a>

				</div>
			</div>
			<div class="slogan ir">探索黑科技，小米为发烧而生</div>
		</div>

		<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
			<div class="modal-hd">
				<a class="close" data-dismiss="modal" data-stat-id="63f4c381b2f8ad17" onclick="_msq.push(['trackEvent', '60439036470411e8-63f4c381b2f8ad17', '', 'pcpid', '']);"><i class="iconfont"></i></a>
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
					<a class="btn btn-primary" id="J_bigtapRetry" data-stat-id="75b8b2e19c53ebbc" onclick="_msq.push(['trackEvent', '60439036470411e8-75b8b2e19c53ebbc', '', 'pcpid', '']);">重试</a>
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
					<a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);" data-stat-id="b0b62d71ee0ec6a3" onclick="_msq.push(['trackEvent', '60439036470411e8-b0b62d71ee0ec6a3', 'javascript:void0', 'pcpid', '']);">网络错误，点击重新获取验证码！</a>
				</div>
				<div class="mode-action hide" id="J_bigtapModeAction">
					<div class="mode-con" id="J_bigtapModeContent"></div>
					<input name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
					<p class="tip" id="J_bigtapModeTip"></p>
					<a class="btn  btn-gray" id="J_bigtapModeSubmit" data-stat-id="4e96c59065f482f5" onclick="_msq.push(['trackEvent', '60439036470411e8-4e96c59065f482f5', '', 'pcpid', '']);">确认</a>
				</div>
			</div>
		</div>
		<!-- .xm-dm-error END -->
		<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
			<div class="modal-hd">
				<a class="close" data-dismiss="modal" data-stat-id="249b33602ac9c53f" onclick="_msq.push(['trackEvent', '60439036470411e8-249b33602ac9c53f', '', 'pcpid', '']);"><i class="iconfont"></i></a>
				<span class="title">Select Region</span>
			</div>
			<div class="modal-bd">
				<h3>Welcome to Mi.com</h3>
				<p class="modal-globalSites-tips">Please select your country or region</p>
				<p class="modal-globalSites-links clearfix">
					<a href="https://www.mi.com/index.html" data-stat-id="9645bb27fff46868" onclick="_msq.push(['trackEvent', '60439036470411e8-9645bb27fff46868', '//www.mi.com/index.html', 'pcpid', '']);">Mainland China</a>
					<a href="https://www.mi.com/hk/" data-stat-id="2b71a692efb8fdd7" onclick="_msq.push(['trackEvent', '60439036470411e8-2b71a692efb8fdd7', '//www.mi.com/hk/', 'pcpid', '']);">Hong Kong</a>
					<a href="https://www.mi.com/tw/" data-stat-id="bbc44c1aa17fc769" onclick="_msq.push(['trackEvent', '60439036470411e8-bbc44c1aa17fc769', '//www.mi.com/tw/', 'pcpid', '']);">Taiwan</a>
					<a href="https://www.mi.com/sg/" data-stat-id="b420368b9a316249" onclick="_msq.push(['trackEvent', '60439036470411e8-b420368b9a316249', '//www.mi.com/sg/', 'pcpid', '']);">Singapore</a>
					<a href="https://www.mi.com/my/" data-stat-id="57e1a25aea88f4d1" onclick="_msq.push(['trackEvent', '60439036470411e8-57e1a25aea88f4d1', '//www.mi.com/my/', 'pcpid', '']);">Malaysia</a>
					<a href="https://www.mi.com/ph/" data-stat-id="c73127d5c4e72ee0" onclick="_msq.push(['trackEvent', '60439036470411e8-c73127d5c4e72ee0', '//www.mi.com/ph/', 'pcpid', '']);">Philippines</a>
					<a href="https://www.mi.com/in/" data-stat-id="3cd51d8ec8efc158" onclick="_msq.push(['trackEvent', '60439036470411e8-3cd51d8ec8efc158', '//www.mi.com/in/', 'pcpid', '']);">India</a>
					<a href="https://www.mi.com/id/" data-stat-id="4f058e3e16aa692c" onclick="_msq.push(['trackEvent', '60439036470411e8-4f058e3e16aa692c', '//www.mi.com/id/', 'pcpid', '']);">Indonesia</a>
					<a href="https://www.mi.com/en/" data-stat-id="922504a4ba74ba55" onclick="_msq.push(['trackEvent', '60439036470411e8-922504a4ba74ba55', '//www.mi.com/en/', 'pcpid', '']);">Global Home</a>
					<a href="https://www.mi.com/mena/" data-stat-id="71a1e709a6be2cfb" onclick="_msq.push(['trackEvent', '60439036470411e8-71a1e709a6be2cfb', '//www.mi.com/mena/', 'pcpid', '']);">MENA</a>
					<a href="https://www.mi.com/pl/" data-stat-id="1d81d46a9c9b418a" onclick="_msq.push(['trackEvent', '60439036470411e8-1d81d46a9c9b418a', '//www.mi.com/pl/', 'pcpid', '']);">Poland</a>
					<a href="https://www.mi.com/ua/" data-stat-id="b3686c30671208f1" onclick="_msq.push(['trackEvent', '60439036470411e8-b3686c30671208f1', '//www.mi.com/ua/', 'pcpid', '']);">Ukraine</a>
					<a href="https://www.mi.com/ru/" data-stat-id="dd19c4c9b0e0dab4" onclick="_msq.push(['trackEvent', '60439036470411e8-dd19c4c9b0e0dab4', '//www.mi.com/ru/', 'pcpid', '']);">Russia</a>
					<a href="https://www.mi.com/vn/" data-stat-id="f75bdf4923469174" onclick="_msq.push(['trackEvent', '60439036470411e8-f75bdf4923469174', '//www.mi.com/vn/', 'pcpid', '']);">Vietnam</a>
					<a href="https://www.mi.com/mx/" data-stat-id="d7f88d2bac30046f" onclick="_msq.push(['trackEvent', '60439036470411e8-d7f88d2bac30046f', '//www.mi.com/mx/', 'pcpid', '']);">Mexico</a>
					<a href="https://www.mi.com/kr/" data-stat-id="0ead5227ea5d7f7c" onclick="_msq.push(['trackEvent', '60439036470411e8-0ead5227ea5d7f7c', '//www.mi.com/kr/', 'pcpid', '']);">Korea</a>
					<a href="https://www.mi.com/eg/" data-stat-id="795e9810af6fffa4" onclick="_msq.push(['trackEvent', '60439036470411e8-795e9810af6fffa4', '//www.mi.com/eg/', 'pcpid', '']);">Egypt</a>
					<a href="https://www.mi.com/th/" data-stat-id="a967923010c784f9" onclick="_msq.push(['trackEvent', '60439036470411e8-a967923010c784f9', '//www.mi.com/th/', 'pcpid', '']);">Thailand</a>
					<a href="https://www.mi.com/es/" data-stat-id="5448aa7b006cbd18" onclick="_msq.push(['trackEvent', '60439036470411e8-5448aa7b006cbd18', '//www.mi.com/es/', 'pcpid', '']);">Spain</a>
					<a href="https://www.mi.com/us/" data-stat-id="1d3cef21932c0d69" onclick="_msq.push(['trackEvent', '60439036470411e8-1d3cef21932c0d69', '//www.mi.com/us/', 'pcpid', '']);">United States</a>
					<a href="https://www.mi.com/it/" data-stat-id="522e8df8a5b7e037" onclick="_msq.push(['trackEvent', '60439036470411e8-522e8df8a5b7e037', '//www.mi.com/it/', 'pcpid', '']);">Italy</a>
					<a href="https://www.mi.com/fr/index.html" data-stat-id="7ee8a4a41151e1c3" onclick="_msq.push(['trackEvent', '60439036470411e8-7ee8a4a41151e1c3', '//www.mi.com/fr/index.html', 'pcpid', '']);">France</a>
					<a href="https://www.mi.com/bd/" data-stat-id="b8aea6f1e8d17aed" onclick="_msq.push(['trackEvent', '60439036470411e8-b8aea6f1e8d17aed', '//www.mi.com/bd/', 'pcpid', '']);">Bangladesh</a>
				</p>
			</div>
		</div>
		<!-- .modal-globalSites END -->

		<script src="home/js/base.js"></script>
		<script>
			(function() {
				MI.namespace('GLOBAL_CONFIG');
				MI.GLOBAL_CONFIG = {
					orderSite: 'https://order.mi.com',
					wwwSite: '//www.mi.com',
					cartSite: '//cart.mi.com',
					itemSite: '//item.mi.com',
					assetsSite: '//s01.mifile.cn',
					listSite: '//list.mi.com',
					searchSite: '//search.mi.com',
					mySite: '//my.mi.com',
					damiaoSite: 'http://tp.hd.mi.com/',
					damiaoGoodsId: [],
					logoutUrl: 'https://order.mi.com/site/logout',
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

		<script type="text/javascript" src="home/js/orderView.js"></script>
		<script type="text/javascript" src="home/js/user.js"></script>

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

	</body>

</html>