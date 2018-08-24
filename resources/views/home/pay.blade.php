<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="UTF-8">
		<title>选择在线支付方式</title>
		<meta name="viewport" content="width=1226">
		<link rel="shortcut icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
		<link rel="icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="home/css/base.css">
		<link rel="stylesheet" type="text/css" href="home/home/css/pay-confirm.css">
		<script type="text/javascript" async="" src="home/home/js/mstr.js"></script>
		<script type="text/javascript" async="" src="home/home/js/jquery.js"></script>
		<script type="text/javascript" async="" src="home/home/js/xmst.js"></script>
		<script type="text/javascript">
			/*<![CDATA[*/
			var _STAT_HASHNAME = "http://my.mi.com/buy/confirm";
			/*]]>*/
		</script>
	</head>

	<body>
		<div class="site-header site-mini-header">
			<div class="container">
				<div class="header-logo">
					<a class="logo " href="https://www.mi.com/index.html" title="小米官网"></a>
				</div>
				<div class="header-title" id="J_miniHeaderTitle">
					<h2>支付订单</h2></div>
				<div class="topbar-info" id="J_userInfo"><span class="user"><a rel="nofollow" class="user-name" href="https://my.mi.com/portal" target="_blank"><span class="name">筱然</span><i class="iconfont"></i></a>
					<ul class="user-menu">
						<li>
							<a rel="nofollow" href="https://my.mi.com/portal" target="_blank">个人中心</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/user/comment" target="_blank">评价晒单</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/user/favorite" target="_blank">我的喜欢</a>
						</li>
						<li>
							<a rel="nofollow" href="https://account.xiaomi.com/" target="_blank">小米账户</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/site/logout">退出登录</a>
						</li>
					</ul>
					</span><span class="sep">|</span>
					<a rel="nofollow" class="link link-order" href="https://static.mi.com/order/" target="_blank">我的订单</a>
				</div>
			</div>
		</div>
		<!-- .site-mini-header END -->
		<script type="text/javascript">
			var _confirmConfig = {
				order_id: '5180818696103617',
				safe_tel: '',
				goods_amount: '1399',
			};
		</script>

		<div class="page-main">
			<div class="container confirm-box">
				<form target="_blank" action="#" id="J_payForm" method="post">
					<div class="section section-order">
						<div class="order-info clearfix">
							<div class="fl">
								<h2 class="title">订单提交成功！去付款咯～</h2>
								<p class="order-time" id="J_deliverDesc"></p>
								<p class="order-time">请在<span class="pay-time-tip">0小时15分</span>内完成支付, 超时后将取消订单</p>
								<p class="post-info" id="J_postInfo">
									收货信息：曲猛 152****2202 &nbsp;&nbsp; 山东&nbsp;&nbsp;聊城市&nbsp;&nbsp;东昌府区&nbsp;&nbsp;广平乡&nbsp;&nbsp;广平乡大曲村 </p>
							</div>
							<div class="fr">
								<p class="total">
									应付总额：<span class="money"><em>1399</em>元</span>
								</p>
								<a href="javascript:void(0);" class="show-detail" id="J_showDetail">订单详情<i class="iconfont"></i></a>
							</div>
						</div>
						<i class="iconfont icon-right">√</i>
						<div class="order-detail">
							<ul>
								<li class="clearfix">
									<div class="label">订单号：</div>
									<div class="content">
										<span class="order-num">
                                    5180818696103617                                </span>
									</div>
								</li>
								<li class="clearfix">
									<div class="label">收货信息：</div>
									<div class="content">
										曲猛 152****2202&nbsp;&nbsp; 山东&nbsp;&nbsp;聊城市&nbsp;&nbsp;东昌府区&nbsp;&nbsp;广平乡&nbsp;&nbsp;广平乡大曲村 </div>
								</li>
								<li class="clearfix">
									<div class="label">商品名称：</div>
									<div class="content">
										小米6X 全网通版 4GB内存 64GB 流沙金<br>米粉卡日租卡<br>小米移动吃到饱体验卡 三切 </div>
								</li>
								<li class="clearfix">
									<div class="label">配送时间：</div>
									<div class="content">
										不限送货时间 </div>
								</li>
								<li class="clearfix">
									<div class="label">发票信息：</div>
									<div class="content">
										电子发票 个人 </div>
								</li>
							</ul>
						</div>
					</div>

					<div class="section section-payment">
						<div class="cash-title" id="J_cashTitle">
							选择以下支付方式付款
						</div>

						<div class="payment-box ">
							<div class="payment-header clearfix">
								<h3 class="title">支付平台</h3>
								<span class="desc"></span>
							</div>
							<div class="payment-body">
								<ul class="clearfix payment-list J_paymentList J_linksign-customize">
									<li id="J_weixin" data-stat-id="98393f0afea1dcec" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-98393f0afea1dcec', '', 'pcpid', '']);"><img src="images/weixinpay.png" alt="微信支付" style="margin-left: 0;"></li>
									<li class="J_bank" data-stat-id="def8a01ce9f6c2ab" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-def8a01ce9f6c2ab', '', 'pcpid', '']);"><input name="payOnlineBank" id="alipay" value="alipay" type="radio"> <img src="images/event-alipay20160718.jpg" alt="支付宝" style="margin-left: 0;"></li>
									<li class="J_bank" data-stat-id="5683a71b06762883" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-5683a71b06762883', '', 'pcpid', '']);"><input name="payOnlineBank" id="unionpay" value="unionpay" type="radio"> <img src="images/unionpay.png" alt="银联" style="margin-left: 0;"></li>
									<li class="J_bank" data-stat-id="5df326495fb7ae18" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-5df326495fb7ae18', '', 'pcpid', '']);"><input name="payOnlineBank" id="micash" value="micash" type="radio"> <img src="images/event-mipay20170427.jpg" alt="小米钱包" style="margin-left: 0;"></li>
								</ul>
								<div class="event-desc">
									<p>支 付 宝：支付宝扫码支付，赢1999元红包</p>
									<p>小米分期：下单支付满30元立减20元，限1单</p>
									<p>小米钱包：绑定新卡支付，享最高立减99元</p>
									<a href="https://www.mi.com/c/payrule/" class="more" target="_blank">了解更多&gt;</a>
								</div>
							</div>
						</div>

						<div class="payment-box ">
							<div class="payment-header clearfix">
								<h3 class="title">银行借记卡及信用卡</h3>
							</div>
							<div class="payment-body">
								<ul class="clearfix payment-list payment-list-much J_paymentList J_linksign-customize">
									<li class="J_bank" data-stat-id="dd6165edfe4d01d8" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-dd6165edfe4d01d8', '', 'pcpid', '']);"><input name="payOnlineBank" id="CMB" value="CMB" type="radio"> <img src="images/payOnline_zsyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="7621bbb25c18dd69" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-7621bbb25c18dd69', '', 'pcpid', '']);"><input name="payOnlineBank" id="ICBCB2C" value="ICBCB2C" type="radio"> <img src="images/payOnline_gsyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="7008dccc0dbd92c7" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-7008dccc0dbd92c7', '', 'pcpid', '']);"><input name="payOnlineBank" id="CCB" value="CCB" type="radio"> <img src="images/payOnline_jsyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="aa1fe0885ff5562a" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-aa1fe0885ff5562a', '', 'pcpid', '']);"><input name="payOnlineBank" id="COMM" value="COMM" type="radio"> <img src="images/payOnline_jtyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="e3951a7e8be530a1" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e3951a7e8be530a1', '', 'pcpid', '']);"><input name="payOnlineBank" id="ABC" value="ABC" type="radio"> <img src="images/payOnline_nyyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="ea83a8da0c7d95c0" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-ea83a8da0c7d95c0', '', 'pcpid', '']);"><input name="payOnlineBank" id="BOCB2C" value="BOCB2C" type="radio"> <img src="images/payOnline_zgyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="778d12a3beffbb04" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-778d12a3beffbb04', '', 'pcpid', '']);"><input name="payOnlineBank" id="PSBC-DEBIT" value="PSBC-DEBIT" type="radio"> <img src="images/payOnline_youzheng.png" alt=""></li>
									<li class="J_bank" data-stat-id="823582d5e70befbc" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-823582d5e70befbc', '', 'pcpid', '']);"><input name="payOnlineBank" id="GDB" value="GDB" type="radio"> <img src="images/payOnline_gfyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="fb3d8b9cbf14bc4d" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-fb3d8b9cbf14bc4d', '', 'pcpid', '']);"><input name="payOnlineBank" id="SPDB" value="SPDB" type="radio"> <img src="images/payOnline_pufa.png" alt=""></li>
									<li class="J_bank" data-stat-id="873ed0591eeea999" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-873ed0591eeea999', '', 'pcpid', '']);"><input name="payOnlineBank" id="CEBBANK" value="CEBBANK" type="radio"> <img src="images/payOnline_gdyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="38dcdaacaafbd225" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-38dcdaacaafbd225', '', 'pcpid', '']);"><input name="payOnlineBank" id="CIB" value="CIB" type="radio"> <img src="images/payOnline_xyyh.png" alt=""></li>
									<li class="J_bank hide" data-stat-id="7564010fdcb1024e" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-7564010fdcb1024e', '', 'pcpid', '']);"><input name="payOnlineBank" id="CMBC" value="CMBC" type="radio"> <img src="images/payOnline_msyh.png" alt=""></li>
									<li class="J_bank hide" data-stat-id="e3034e699c409045" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e3034e699c409045', '', 'pcpid', '']);"><input name="payOnlineBank" id="CITIC" value="CITIC" type="radio"> <img src="images/payOnline_zxyh.png" alt=""></li>
									<li class="J_bank hide" data-stat-id="bc363d87334c7a40" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-bc363d87334c7a40', '', 'pcpid', '']);"><input name="payOnlineBank" id="SHBANK" value="SHBANK" type="radio"> <img src="images/payOnline_shyh.png" alt=""></li>
									<li class="J_bank hide" data-stat-id="4cffb7171224b03d" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-4cffb7171224b03d', '', 'pcpid', '']);"><input name="payOnlineBank" id="BJRCB" value="BJRCB" type="radio"> <img src="images/payOnline_bjnsyh.png" alt=""></li>
									<li class="J_bank hide" data-stat-id="1e1e0c448d05ff2d" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-1e1e0c448d05ff2d', '', 'pcpid', '']);"><input name="payOnlineBank" id="NBBANK" value="NBBANK" type="radio"> <img src="images/payOnline_nbyh.png" alt=""></li>
									<li class="J_bank hide" data-stat-id="f9e85d7bd756a404" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-f9e85d7bd756a404', '', 'pcpid', '']);"><input name="payOnlineBank" id="HZCBB2C" value="HZCBB2C" type="radio"> <img src="images/payOnline_hzyh.png" alt=""></li>
									<li class="J_bank hide" data-stat-id="550aabb5bbbae27e" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-550aabb5bbbae27e', '', 'pcpid', '']);"><input name="payOnlineBank" id="SHRCB" value="SHRCB" type="radio"> <img src="images/payOnline_shnsyh.png" alt=""></li>
									<li class="J_bank hide" data-stat-id="f623437f9822e779" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-f623437f9822e779', '', 'pcpid', '']);"><input name="payOnlineBank" id="FDB" value="FDB" type="radio"> <img src="images/payOnline_fcyh.png" alt=""></li>
									<li class="J_showMore" data-stat-id="5d0744cb161dac7a" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-5d0744cb161dac7a', '', 'pcpid', '']);">
										<span class="text">查看更多</span>
										<span class="text  hide">收起更多</span>
									</li>
								</ul>
							</div>
						</div>

						<div class="payment-box payment-box-last ">
							<div class="payment-header clearfix">
								<h3 class="title">快捷支付</h3>
								<span class="desc">（支持以下各银行信用卡以及部分银行借记卡）</span>
							</div>
							<div class="payment-body">
								<ul class="clearfix payment-list  J_paymentList J_linksign-customize">
									<li class="J_bank" data-stat-id="9e673f1f9e025d2f" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-9e673f1f9e025d2f', '', 'pcpid', '']);"><input name="payOnlineBank" id="CMB-KQ" value="CMB-KQ" type="radio"> <img src="images/payOnline_zsyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="dc0f8ac5a3672e8e" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-dc0f8ac5a3672e8e', '', 'pcpid', '']);"><input name="payOnlineBank" id="COMM-KQ" value="COMM-KQ" type="radio"> <img src="images/payOnline_jtyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="1c8c100a264fb4b2" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-1c8c100a264fb4b2', '', 'pcpid', '']);"><input name="payOnlineBank" id="CCB-KQ" value="CCB-KQ" type="radio"> <img src="images/payOnline_jsyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="4ba4461ad493d6ff" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-4ba4461ad493d6ff', '', 'pcpid', '']);"><input name="payOnlineBank" id="ICBCB2C-KQ" value="ICBCB2C-KQ" type="radio"> <img src="images/payOnline_gsyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="cbf5ed5f6fe4be98" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-cbf5ed5f6fe4be98', '', 'pcpid', '']);"><input name="payOnlineBank" id="CITIC-KQ" value="CITIC-KQ" type="radio"> <img src="images/payOnline_zxyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="7ed2bc8e6f90387c" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-7ed2bc8e6f90387c', '', 'pcpid', '']);"><input name="payOnlineBank" id="CEBBANK-KQ" value="CEBBANK-KQ" type="radio"> <img src="images/payOnline_gdyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="e64a0f9df03214bc" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e64a0f9df03214bc', '', 'pcpid', '']);"><input name="payOnlineBank" id="BOCB2C-KQ" value="BOCB2C-KQ" type="radio"> <img src="images/payOnline_zgyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="df915d86b5139f1a" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-df915d86b5139f1a', '', 'pcpid', '']);"><input name="payOnlineBank" id="SRCB-KQ" value="SRCB-KQ" type="radio"> <img src="images/payOnline_shncsyyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="7a41a0feb2a9d18d" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-7a41a0feb2a9d18d', '', 'pcpid', '']);"><input name="payOnlineBank" id="JSB-KQ" value="JSB-KQ" type="radio"> <img src="images/payOnline_jiangsshuyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="b435addf52a47fb5" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-b435addf52a47fb5', '', 'pcpid', '']);"><input name="payOnlineBank" id="CIB-KQ" value="CIB-KQ" type="radio"> <img src="images/payOnline_xyyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="1341649d2f5c26f3" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-1341649d2f5c26f3', '', 'pcpid', '']);"><input name="payOnlineBank" id="ABC-KQ" value="ABC-KQ" type="radio"> <img src="images/payOnline_nyyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="cf4fb3c53369980c" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-cf4fb3c53369980c', '', 'pcpid', '']);"><input name="payOnlineBank" id="SPABANK-KQ" value="SPABANK-KQ" type="radio"> <img src="images/payOnline_payh.png" alt=""></li>
									<li class="J_bank" data-stat-id="dc7ea28460f51fa5" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-dc7ea28460f51fa5', '', 'pcpid', '']);"><input name="payOnlineBank" id="HXB-KQ" value="HXB-KQ" type="radio"> <img src="images/payOnline_hyyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="4c928d00dd803c30" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-4c928d00dd803c30', '', 'pcpid', '']);"><input name="payOnlineBank" id="GDB-KQ" value="GDB-KQ" type="radio"> <img src="images/payOnline_gfyh.png" alt=""></li>
									<li class="J_bank" data-stat-id="e00b0c777513ff76" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e00b0c777513ff76', '', 'pcpid', '']);"><input name="payOnlineBank" id="BOB-KQ" value="BOB-KQ" type="radio"> <img src="images/payOnline_bjyh.png" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="section section-installment" id="J_paymentFenqi">
						<div class="payment-box">
							<div class="payment-header clearfix">
								<h3 class="title">分期付款</h3>
								<span class="desc"></span>
							</div>
							<div class="payment-body">
								<ul class="clearfix payment-list J_paymentList J_linksign-customize J_tabSwitch">
									<li class="J_bank fenqi" id="J_huabeifenqi" data-isinstalment="true" data-stat-id="4688de8cef8e9bb2" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-4688de8cef8e9bb2', '', 'pcpid', '']);"><input autocomplete="off" name="payOnlineBank" id="antinstal" value="antinstal" type="radio"> <img src="images/payOnline_ant_huabei.png" alt="蚂蚁花呗分期付款	"></li>
									<li class="J_bank fenqi" data-isinstalment="true" data-stat-id="6fd6ce345e2fdeba" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-6fd6ce345e2fdeba', '', 'pcpid', '']);"><input autocomplete="off" name="payOnlineBank" id="mifinanceinstal" value="mifinanceinstal" type="radio"> <img src="images/mifinanceinstal.png" alt="分期-小米金融	"></li>
									<li class="J_bank fenqi" data-isinstalment="true" data-stat-id="5566fdd4c9de9916" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-5566fdd4c9de9916', '', 'pcpid', '']);"><input autocomplete="off" name="payOnlineBank" id="cmbinstal" value="cmbinstal" type="radio"> <img src="images/payOnline_zsyh_002.png" alt="分期-招商银行	"></li>
								</ul>
								<div class="tab-container clearfix isinstalment-box">
									<div class="tab-content  clearfix">
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>477.05元 × 3期</h3>
												<p>

													手续费 10.72元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_3" value="3" type="radio">
												<a href="javascript:void(0);" data-installid="antinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>243.65元 × 6期</h3>
												<p>

													手续费 10.49元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_6" value="6" type="radio">
												<a href="javascript:void(0);" data-installid="antinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>125.32元 × 12期</h3>
												<p>

													手续费 8.74元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_12" value="12" type="radio">
												<a href="javascript:void(0);" data-installid="antinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>

										<div class="isinstalment-desc">
											分期付款说明：<br> 1、选择蚂蚁花呗分期后，如更改分期数或切换其他支付方式遇到问题，推荐您使用小米钱包进行支付。
											<br> 2、每期还款金额是根据你的订单估算得出的金额，实际支付数额请以支付宝账单为准，支付宝有权决定是否接受您的分期付款申请。
										</div>
									</div>
									<div class="tab-content  clearfix">
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>476.68元 × 3期</h3>
												<p>

													手续费 10.35元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_3" value="3" type="radio">
												<a href="javascript:void(0);" data-installid="mifinanceinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>242.26元 × 6期</h3>
												<p>

													手续费 9.09元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_6" value="6" type="radio">
												<a href="javascript:void(0);" data-installid="mifinanceinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>124.97元 × 12期</h3>
												<p>

													手续费 8.39元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_12" value="12" type="radio">
												<a href="javascript:void(0);" data-installid="mifinanceinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>

										<div class="isinstalment-desc">
											分期付款说明：<br> 每期还款金额是根据你的订单估算得出的金额，实际支付数额请以小米分期账单为准，小米分期有权决定是否接受您的分期付款申请。
										</div>
									</div>
									<div class="tab-content  clearfix">
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>483.12元 × 3期</h3>
												<p>

													手续费 16.79元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_3" value="3" type="radio">
												<a href="javascript:void(0);" data-installid="cmbinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>244.36元 × 6期</h3>
												<p>

													手续费 11.19元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_6" value="6" type="radio">
												<a href="javascript:void(0);" data-installid="cmbinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>
										<div class="isinstalment-item  clearfix" style="height:150px;">
											<div class="item-header">
												<h3>124.98元 × 12期</h3>
												<p>

													手续费 8.39元/期
												</p>
											</div>
											<br>
											<div class="item-footer">
												<input name="installments" id="installments_cmbinstal_12" value="12" type="radio">
												<a href="javascript:void(0);" data-installid="cmbinstal" class="btn J_installmentConfirmBtn">选择该分期方式</a>
											</div>
										</div>

										<div class="isinstalment-desc">
											分期付款说明：<br> 每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
										</div>
									</div>
								</div>
								<div class="isinstalment-desc" id="J_isinstalmentPublicDesc">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!--现金账户 提示框-->
		<div class="modal  modal-hide modal-balance-pay" id="J_balancePay">
			<div class="modal-header">
				<h3>现金账户安全验证</h3>
				<span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
			</div>
			<div class="modal-body">
				<p>
					为了确保您的购物安全<br> 已向您当前的联系电话 <span class="num" id="J_cashPayPhone"></span> 发送验证码
				</p>
				<div class="form-section">
					<label class="input-label" for="verifycode">请输入验证码</label>
					<input class="input-text" id="verifycode" name="verifycode" type="text">
					<span class="btn btn-block hide" id="J_sendAgain"></span>
				</div>
				<div class="tip" id="J_checkCodeTip"></div>
			</div>
			<div class="modal-footer">
				<a class="btn btn-gray" data-dismiss="modal" href="javascript:void(0);">取消</a>
				<a class="btn btn-primary" id="J_checkCodeBtn" href="javascript:void(0);">确认</a>
			</div>
		</div>

		<!-- 支付提示框 -->
		<div class="modal fade modal-hide modal-pay-tip" id="J_payTip" aria-hidden="false">
			<div class="modal-header">
				<h3>正在支付...</h3>
				<a class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
			</div>
			<div class="modal-body clearfix">
				<div class="success">
					<h4>支付成功了</h4>
					<p>
						<a href="https://order.mi.com/user/orderView/5180818696103617">立即查看订单详情 &gt;</a>
					</p>
				</div>
				<div class="fail">
					<h4>如果支付失败</h4>
					<p>
						<a href="http://bbs.xiaomi.cn/thread/index/tid/11544653" target="_blank">查看支付常见问题 &gt;</a>
					</p>
				</div>
			</div>
		</div>

		<div class="modal modal-hide fade modal-alert" id="J_modalAlert">
			<div class="modal-bd">
				<div class="text">
					<h3 id="J_alertMsg"></h3>
				</div>
				<div class="actions">
					<button class="btn btn-primary" data-dismiss="modal">确定</button>
				</div>
				<a class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
			</div>
		</div>

		<div class="modal modal-hide fade modal-alipay" id="J_modalAlipay">
			<div class="modal-bd">
				<div class="loading">
					<div class="loader"></div>
				</div>
				<iframe name="alipayQrcodeIframe" scrolling="no" width="100%" height="100%" frameborder="0"></iframe>
			</div>
			<a class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
		</div>

		<div class="modal modal-hide fade modal-weixin-pay" id="J_modalWeixinPay">
			<div class="modal-hd">
				<span class="title">微信支付</span>
				<a class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
			</div>
			<div class="modal-bd" id="J_showWeixinPayExample">
				<div class="code" id="J_weixinPayCode">
					<div class="loading">
						<div class="loader"></div>
					</div>
				</div>
				<div class="msg">
					请使用 <span>微信</span> 扫一扫<br>二维码完成支付
				</div>
			</div>
			<div class="example" id="J_weixinPayExample"></div>
		</div>

		<div class="deliver-beta hide" id="J_deliverBeta">
			<p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p>
			<a href="https://static.mi.com/feedback/" target="_blank">问题反馈 &gt;</a>

			<i class="arrow arrow-a"></i>
			<i class="arrow arrow-b"></i>
		</div>
		<div class="site-footer">
			<div class="container">
				<div class="footer-service">
					<ul class="list-service clearfix">
						<li>
							<a rel="nofollow" href="https://www.mi.com/static/fast/" target="_blank"><i class="iconfont"></i>预约维修服务</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/exchange#back" target="_blank"><i class="iconfont"></i>7天无理由退货</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/exchange#back" target="_blank"><i class="iconfont"></i>15天免费换货</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/buy/postage/" target="_blank"><i class="iconfont"></i>满150元包邮</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/static/maintainlocation/" target="_blank"><i class="iconfont"></i>520余家售后网点</a>
						</li>
					</ul>
				</div>
				<div class="footer-links clearfix">

					<dl class="col-links col-links-first">
						<dt>帮助中心</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/account/register/" target="_blank">账户管理</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/buy/buytime/" target="_blank">购物指南</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/order/sendprogress/" target="_blank">订单操作</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>服务支持</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/exchange" target="_blank">售后政策</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/" target="_blank">自助服务</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/c/service/download/" target="_blank">相关下载</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>线下门店</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/c/xiaomizhijia/" target="_blank">小米之家</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/static/maintainlocation/" target="_blank">服务网点</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/static/familyLocation/" target="_blank">授权体验店</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>关于小米</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/about/" target="_blank" data-stat-id="c37431b30ed7d080" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-c37431b30ed7d080', '//www.mi.com/about/', 'pcpid', '']);">了解小米</a>
						</dd>

						<dd>
							<a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="7c45fbdd9a37c44e" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-7c45fbdd9a37c44e', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/ir/" target="_blank" data-stat-id="407b8ee757b486b9" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-407b8ee757b486b9', '//www.mi.com/ir/', 'pcpid', '']);">投资者关系</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>关注我们</dt>

						<dd>
							<a rel="nofollow" href="https://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="657e6b43e6dadf5c" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-657e6b43e6dadf5c', 'https://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a>
						</dd>

						<dd>
							<a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" data-stat-id="69938d6368da7b35" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-69938d6368da7b35', '#J_modalWeixin', 'pcpid', '']);">官方微信</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/about/contact/" target="_blank" data-stat-id="c663c2ee5601b89d" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-c663c2ee5601b89d', '//www.mi.com/about/contact/', 'pcpid', '']);">联系我们</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>特色服务</dt>

						<dd>
							<a rel="nofollow" href="https://order.mi.com/queue/f2code" target="_blank" data-stat-id="03b2c9bc87de429e" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-03b2c9bc87de429e', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/giftcode/" target="_blank" data-stat-id="e6af845dc49d7ca6" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e6af845dc49d7ca6', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://order.mi.com/misc/checkitem" target="_blank" data-stat-id="44d113a00fb99897" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-44d113a00fb99897', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a>
						</dd>

					</dl>

					<div class="col-contact">
						<p class="phone">400-100-5678</p>
						<p>
							周一至周日 8:00-18:00<br>（仅收市话费）
						</p>
						<a rel="nofollow" class="btn btn-line-primary btn-small" href="https://www.mi.com/service/contact/" target="_blank" data-stat-id="bb3b17cff8491395" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-bb3b17cff8491395', '//www.mi.com/service/contact/', 'pcpid', '']);"><i class="iconfont"></i> 联系客服</a>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">
				<span class="logo ir">小米官网</span>
				<div class="info-text">
					<p>小米旗下网站：
						<a href="https://www.mi.com/index.html" target="_blank" data-stat-id="86cff9682f9326fd" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-86cff9682f9326fd', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span>
						<a href="https://www.miui.com/" target="_blank" data-stat-id="2d8dfbfbff395052" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-2d8dfbfbff395052', 'https://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span>
						<a href="https://home.mi.com/index.html" target="_blank" data-stat-id="1c00f10aa7d7ba67" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-1c00f10aa7d7ba67', 'https://home.mi.com/index.html', 'pcpid', '']);">米家</a><span class="sep">|</span>
						<a href="http://www.miliao.com/" target="_blank" data-stat-id="796946efbdb977bf" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-796946efbdb977bf', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span>
						<a href="https://www.duokan.com/" target="_blank" data-stat-id="f3d7fe7a77902035" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-f3d7fe7a77902035', 'https://www.duokan.com/', 'pcpid', '']);">多看</a><span class="sep">|</span>
						<a href="http://game.xiaomi.com/" target="_blank" data-stat-id="4bd20c2b561fc067" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-4bd20c2b561fc067', 'http://game.xiaomi.com/', 'pcpid', '']);">游戏</a><span class="sep">|</span>
						<a href="http://www.miwifi.com/" target="_blank" data-stat-id="a68ed8bd575c60e8" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-a68ed8bd575c60e8', 'http://www.miwifi.com/', 'pcpid', '']);">路由器</a><span class="sep">|</span>
						<a href="https://www.mi.com/micard/" target="_blank" data-stat-id="bee3f31646c49c64" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-bee3f31646c49c64', '//www.mi.com/micard/', 'pcpid', '']);">米粉卡</a><span class="sep">|</span>
						<a href="https://b.mi.com/?client_id=180100031058&amp;masid=17409.0358" target="_blank" data-stat-id="632f1099a8922415" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-632f1099a8922415', 'https://b.mi.com/client_id=180100031058&amp;masid=17409.0358', 'pcpid', '']);">政企服务</a><span class="sep">|</span>
						<a href="https://xiaomi.tmall.com/" target="_blank" data-stat-id="dcc6b05f3ee8d9e0" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-dcc6b05f3ee8d9e0', 'https://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span>
						<a href="https://www.mi.com/about/privacy/" target="_blank" data-stat-id="d6fb3498e619b95b" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-d6fb3498e619b95b', 'https://www.mi.com/about/privacy/', 'pcpid', '']);">隐私政策</a><span class="sep">|</span>
						<a href="https://static.mi.com/feedback/" target="_blank" data-stat-id="175219adbdccbcf3" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-175219adbdccbcf3', 'https://static.mi.com/feedback/', 'pcpid', '']);">问题反馈</a><span class="sep">|</span>
						<a href="https://www.mi.com/jiancha/" target="_blank" data-stat-id="423ea5d77cb20680" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-423ea5d77cb20680', '//www.mi.com/jiancha/', 'pcpid', '']);">廉正举报</a><span class="sep">|</span>
						<a href="#J_modal-globalSites" data-toggle="modal" target="_blank" data-stat-id="b2946b902108e63f" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-b2946b902108e63f', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>
					</p>
					<p>©
						<a href="https://www.mi.com/" target="_blank" title="mi.com" data-stat-id="c2282407688a19ec" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-c2282407688a19ec', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号
						<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="e5c918ee6b394b8e" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e5c918ee6b394b8e', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a>
						<a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="44fe16679dc829d2" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-44fe16679dc829d2', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a>
						<a rel="nofollow" href="https://i8.mifile.cn/b2c-mimall-media/63cbc1342511938fc1395113f81324c4.jpg" target="_blank" data-stat-id="d5e9e342700a1ddd" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-d5e9e342700a1ddd', '//i8.mifile.cn/b2c-mimall-media/63cbc1342511938fc1395113f81324c4.jpg', 'pcpid', '']);">京网文[2017]1530-131号</a>

						<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
				</div>
				<div class="info-links">
					<a href="https://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank" data-stat-id="5036000662c82bb2" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-5036000662c82bb2', '//privacy.truste.com/privacy-seal/validationrid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid', '']);"><img src="images/truste.png" alt="TRUSTe Privacy Certification"></a>
					<a href="https://search.szfw.org/cert/l/CX20120926001783002010" target="_blank" data-stat-id="d882a07ad475be72" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-d882a07ad475be72', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid', '']);"><img src="images/v-logo-2.png" alt="诚信网站"></a>
					<a href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank" data-stat-id="3d3ba6b0abce6a3d" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-3d3ba6b0abce6a3d', 'https://ss.knet.cn/verifyseal.dllsn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid', '']);"><img src="images/v-logo-1.png" alt="可信网站"></a>
					<a href="http://www.315online.com.cn/member/315140007.html" target="_blank" data-stat-id="de855fcaa644e6f8" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-de855fcaa644e6f8', 'http://www.315online.com.cn/member/315140007.html', 'pcpid', '']);"><img src="images/v-logo-3.png" alt="网上交易保障中心"></a>
					<a href="https://www.mi.com/service/buy/commitment/" target="_blank" data-stat-id="efdb6886e752c7fe" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-efdb6886e752c7fe', 'https://www.mi.com/service/buy/commitment/', 'pcpid', '']);"><img src="images/ba10428a4f9495ac310fd0b5e0cf8370.png" alt="诚信经营 放心消费"></a>

				</div>
			</div>
			<div class="slogan ir">探索黑科技，小米为发烧而生</div>
		</div>

		<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
			<div class="modal-hd">
				<a class="close" data-dismiss="modal" data-stat-id="c3750b4c60f20719" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-c3750b4c60f20719', '', 'pcpid', '']);"><i class="iconfont"></i></a>
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
					<a class="btn btn-primary" id="J_bigtapRetry" data-stat-id="f3d915c02cc49478" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-f3d915c02cc49478', '', 'pcpid', '']);">重试</a>
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
					<a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);" data-stat-id="e433440314667e49" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e433440314667e49', 'javascript:void0', 'pcpid', '']);">网络错误，点击重新获取验证码！</a>
				</div>
				<div class="mode-action hide" id="J_bigtapModeAction">
					<div class="mode-con" id="J_bigtapModeContent"></div>
					<input name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
					<p class="tip" id="J_bigtapModeTip"></p>
					<a class="btn  btn-gray" id="J_bigtapModeSubmit" data-stat-id="02c2d2f4fbec20ec" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-02c2d2f4fbec20ec', '', 'pcpid', '']);">确认</a>
				</div>
			</div>
		</div>
		<!-- .xm-dm-error END -->
		<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
			<div class="modal-hd">
				<a class="close" data-dismiss="modal" data-stat-id="81636dcbc6b0a63c" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-81636dcbc6b0a63c', '', 'pcpid', '']);"><i class="iconfont"></i></a>
				<span class="title">Select Region</span>
			</div>
			<div class="modal-bd">
				<h3>Welcome to Mi.com</h3>
				<p class="modal-globalSites-tips">Please select your country or region</p>
				<p class="modal-globalSites-links clearfix">
					<a href="https://www.mi.com/index.html" data-stat-id="8931ff76cb413aa5" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-8931ff76cb413aa5', '//www.mi.com/index.html', 'pcpid', '']);">Mainland China</a>
					<a href="https://www.mi.com/hk/" data-stat-id="4bb8ae4fcf4f7e20" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-4bb8ae4fcf4f7e20', '//www.mi.com/hk/', 'pcpid', '']);">Hong Kong</a>
					<a href="https://www.mi.com/tw/" data-stat-id="908df5040b4d5cb6" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-908df5040b4d5cb6', '//www.mi.com/tw/', 'pcpid', '']);">Taiwan</a>
					<a href="https://www.mi.com/sg/" data-stat-id="3e4c964f17263e84" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-3e4c964f17263e84', '//www.mi.com/sg/', 'pcpid', '']);">Singapore</a>
					<a href="https://www.mi.com/my/" data-stat-id="0fd77a9363183730" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-0fd77a9363183730', '//www.mi.com/my/', 'pcpid', '']);">Malaysia</a>
					<a href="https://www.mi.com/ph/" data-stat-id="1cad1a20e3c87c18" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-1cad1a20e3c87c18', '//www.mi.com/ph/', 'pcpid', '']);">Philippines</a>
					<a href="https://www.mi.com/in/" data-stat-id="15176a7f08d6ecbc" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-15176a7f08d6ecbc', '//www.mi.com/in/', 'pcpid', '']);">India</a>
					<a href="https://www.mi.com/id/" data-stat-id="c26432f4315db7be" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-c26432f4315db7be', '//www.mi.com/id/', 'pcpid', '']);">Indonesia</a>
					<a href="https://www.mi.com/en/" data-stat-id="fc29d8fb3c455474" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-fc29d8fb3c455474', '//www.mi.com/en/', 'pcpid', '']);">Global Home</a>
					<a href="https://www.mi.com/mena/" data-stat-id="e13f216584275ad1" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e13f216584275ad1', '//www.mi.com/mena/', 'pcpid', '']);">MENA</a>
					<a href="https://www.mi.com/pl/" data-stat-id="025c554d929bc9b9" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-025c554d929bc9b9', '//www.mi.com/pl/', 'pcpid', '']);">Poland</a>
					<a href="https://www.mi.com/ua/" data-stat-id="97d21d064c794d93" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-97d21d064c794d93', '//www.mi.com/ua/', 'pcpid', '']);">Ukraine</a>
					<a href="https://www.mi.com/ru/" data-stat-id="e5af67025b70f254" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e5af67025b70f254', '//www.mi.com/ru/', 'pcpid', '']);">Russia</a>
					<a href="https://www.mi.com/vn/" data-stat-id="0a27fd12291f12ee" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-0a27fd12291f12ee', '//www.mi.com/vn/', 'pcpid', '']);">Vietnam</a>
					<a href="https://www.mi.com/mx/" data-stat-id="7b96477694a835f0" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-7b96477694a835f0', '//www.mi.com/mx/', 'pcpid', '']);">Mexico</a>
					<a href="https://www.mi.com/kr/" data-stat-id="0c50bd57a1bce339" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-0c50bd57a1bce339', '//www.mi.com/kr/', 'pcpid', '']);">Korea</a>
					<a href="https://www.mi.com/eg/" data-stat-id="6f9bc607f4260e7d" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-6f9bc607f4260e7d', '//www.mi.com/eg/', 'pcpid', '']);">Egypt</a>
					<a href="https://www.mi.com/th/" data-stat-id="538d19f1cddb5984" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-538d19f1cddb5984', '//www.mi.com/th/', 'pcpid', '']);">Thailand</a>
					<a href="https://www.mi.com/es/" data-stat-id="d19202aa886a4107" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-d19202aa886a4107', '//www.mi.com/es/', 'pcpid', '']);">Spain</a>
					<a href="https://www.mi.com/us/" data-stat-id="a7c7f5c846e19c86" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-a7c7f5c846e19c86', '//www.mi.com/us/', 'pcpid', '']);">United States</a>
					<a href="https://www.mi.com/it/" data-stat-id="5ac5051db625f1de" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-5ac5051db625f1de', '//www.mi.com/it/', 'pcpid', '']);">Italy</a>
					<a href="https://www.mi.com/fr/index.html" data-stat-id="155e483e5e7e32e7" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-155e483e5e7e32e7', '//www.mi.com/fr/index.html', 'pcpid', '']);">France</a>
					<a href="https://www.mi.com/bd/" data-stat-id="4b9ed386930d3e91" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-4b9ed386930d3e91', '//www.mi.com/bd/', 'pcpid', '']);">Bangladesh</a>
				</p>
			</div>
		</div>
		<!-- .modal-globalSites END -->

		<script src="home/home/js/base.js"></script>
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
					damiaoSite: 'https://tp.hd.mi.com/',
					damiaoGoodsId: [],
					logoutUrl: 'https://order.mi.com/site/logout',
					staticSite: '//static.mi.com',
					quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
				};
				MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
				MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
				MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
				MI.miniCart.init();
				//MI.updateMiniCart();
			})();
		</script>

		<script type="text/javascript" src="home/home/js/payConfirm.js"></script>

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