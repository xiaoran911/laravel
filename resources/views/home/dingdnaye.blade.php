<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<script type="text/javascript" async="" src="home/home/js/mstr.js"></script>
		<!-- <script type="text/javascript" async="" src="home/images/js.js"></script> -->
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="UTF-8">
		<title>填写订单信息</title>
		<meta name="viewport" content="width=1226">
		<link rel="shortcut icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
		<link rel="icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="home/home/css/base.css">
		<link rel="stylesheet" type="text/css" href="home/home/css/checkout.css">
	</head>

	<body>
		<div class="site-header site-mini-header">
			<div class="container">
				<div class="header-logo">
					<a class="logo " href="https://www.mi.com/index.html" title="小米官网" data-stat-id="a1c914e4971dfa6b" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-a1c914e4971dfa6b', '//www.mi.com/index.html', 'pcpid', '']);"></a>
				</div>
				<div class="header-title" id="J_miniHeaderTitle">
					<h2>确认订单</h2></div>
				<div class="topbar-info" id="J_userInfo"><span class="user"><a rel="nofollow" class="user-name" href="https://my.mi.com/portal" target="_blank" data-stat-id="1e7ae009bce3ee79" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-1e7ae009bce3ee79', '//my.mi.com/portal', 'pcpid', '']);"><span class="name">筱然</span><i class="iconfont"></i></a>
					<ul class="user-menu">
						<li>
							<a rel="nofollow" href="https://my.mi.com/portal" target="_blank" data-stat-id="cab1a894ab9cb13e" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-cab1a894ab9cb13e', '//my.mi.com/portal', 'pcpid', '']);">个人中心</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/user/comment" target="_blank" data-stat-id="dae2f5cf9c441408" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-dae2f5cf9c441408', 'https://order.mi.com/user/comment', 'pcpid', '']);">评价晒单</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/user/favorite" target="_blank" data-stat-id="854a309b1bfb5a54" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-854a309b1bfb5a54', 'https://order.mi.com/user/favorite', 'pcpid', '']);">我的喜欢</a>
						</li>
						<li>
							<a rel="nofollow" href="https://account.xiaomi.com/" target="_blank" data-stat-id="12e5f1ab0d01f74e" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-12e5f1ab0d01f74e', '//account.xiaomi.com/', 'pcpid', '']);">小米账户</a>
						</li>
						<li>
							<a rel="nofollow" href="https://order.mi.com/site/logout" data-stat-id="7770874fadc00999" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-7770874fadc00999', 'https://order.mi.com/site/logout', 'pcpid', '']);">退出登录</a>
						</li>
					</ul>
					</span><span class="sep">|</span>
					<a rel="nofollow" class="link link-order" href="https://static.mi.com/order/" target="_blank" data-stat-id="a73fdd391b36295a" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-a73fdd391b36295a', '//static.mi.com/order/', 'pcpid', '']);">我的订单</a>
				</div>
			</div>
		</div>
		<!-- .site-mini-header END -->
		<script type="text/javascript" async="" src="home/home/js/xmst.js"></script>
		<script type="text/javascript">
			var checkoutConfig = {
				addressMatch: 'common',
				addressMatchVarName: new Function('return ' + 'data'),
				hasPresales: false,
				hasBigTv: false,
				hasAir: false,
				hasScales: false,
				hasWater: false,
				hasWater2: false,
				hasMobile: false,
				hasEboiler: false,
				hasEvent: false,
				hasGiftcard: false,
				totalPrice: 1399,
				needPayAmount: 1399,
				postage: 0,
				postFree: true,
				bcPrice: '150',
				activityDiscountMoney: 0.00, //活动优惠
				showCouponBox: 0,
				showCaptcha: '0',
				invoice: [{
					"type": "electron",
					"value": 4,
					"desc": "\u7535\u5b50\u53d1\u7968",
					"checked": true
				}, {
					"type": "personal",
					"value": 1,
					"desc": "\u7eb8\u8d28\u53d1\u7968",
					"checked": false
				}],
				quickOrder: '',
				hasBigPro: false,
				onlinePayTips: '支持微信支付、支付宝、银联、财付通、小米钱包等',
				subsidyPrice: 0
			};
		</script>

		<div class="page-main">
			<!-- 春节发货公告 -->
			<!-- 春节发货公告 END-->
			<div class="container">
				<div class="checkout-box">
					<div class="section section-address">
						<div class="section-header clearfix">
							<h3 class="title">收货地址</h3>

							<div class="more">
							</div>

							<div class="mitv-tips hide" style="margin-left: 0;border: none;" id="J_bigproPostTip"></div>

						</div>
						<div class="section-body clearfix" id="J_addressList">
							<!-- addresslist begin -->
							<div class="address-item J_addressItem" data-address_id="10170915831804597" data-consignee="曲猛" data-tel="152****2202" data-province_id="16" data-province_name="山东" data-city_id="184" data-city_name="聊城市" data-district_id="1782" data-district_name="东昌府区" data-area="1782005" data-area_name="东城街道" data-address="光岳路199号聊城市高级财经职业学校" data-tag_name="" data-zipcode="252000" data-editable="Y" data-neededit="N">
								<dl>
									<dt>
                                <span class="tag"></span>
                                <em class="uname">曲猛</em>
                            </dt>
									<dd class="utel">
										152****2202 </dd>
									<dd class="uaddress">
										山东 聊城市 东昌府区 东城街道<br> 光岳路199号聊城市高级财经职业学校 </dd>
								</dl>
								<div class="actions">
									<a href="javascript:void(0);" class="modify J_addressModify" data-stat-id="8a158e0ee8f2f343" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-8a158e0ee8f2f343', 'javascript:void0', 'pcpid', '']);">修改</a>
								</div>
							</div>
							<div class="address-item J_addressItem  selected" data-address_id="10170427304601438" data-consignee="曲猛" data-tel="152****2202" data-province_id="16" data-province_name="山东" data-city_id="184" data-city_name="聊城市" data-district_id="1782" data-district_name="东昌府区" data-area="1782011" data-area_name="广平乡" data-address="广平乡大曲村" data-tag_name="" data-zipcode="252000" data-editable="Y" data-neededit="N">
								<dl>
									<dt>
                                <span class="tag"></span>
                                <em class="uname">曲猛</em>
                            </dt>
									<dd class="utel">
										152****2202 </dd>
									<dd class="uaddress">
										山东 聊城市 东昌府区 广平乡<br> 广平乡大曲村 </dd>
								</dl>
								<div class="actions">
									<a href="javascript:void(0);" class="modify J_addressModify" data-stat-id="56e48742c2477f6b" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-56e48742c2477f6b', 'javascript:void0', 'pcpid', '']);">修改</a>
								</div>
							</div>
							<!-- addresslist end -->
							<div class="address-item address-item-new" id="J_newAddress">
								<i class="iconfont"></i> 添加新地址
							</div>
						</div>
					</div>

					<div class="section section-options section-payment clearfix hide">
						<div class="section-header">
							<h3 class="title">支付方式</h3>
						</div>
						<div class="section-body clearfix">
							<ul class="J_optionList options ">
								<li data-type="pay" class="J_option selected" data-value="1">在线支付</li>
							</ul>
						</div>
					</div>

					<div class="section section-options section-shipment clearfix">
						<div class="section-header">
							<h3 class="title">配送方式</h3>
						</div>
						<div class="section-body clearfix">
							<ul class="clearfix J_optionList options ">
								<li data-type="shipment" class="J_option selected" data-amount="0" data-value="2">包邮</li>
							</ul>

							<div class="service-self-tip" id="J_serviceSelfTip" style="display: none;"></div>
						</div>
					</div>

					<div class="section section-options section-time clearfix">
						<div class="section-header">
							<h3 class="title">配送时间</h3>
						</div>
						<div class="section-body clearfix">
							<ul class="J_optionList options options-list clearfix">
								<!-- besttime start -->
								<li data-type="time" class="J_option selected" data-value="1">
									不限送货时间：<span>周一至周日</span> </li>
								<li data-type="time" class="J_option " data-value="2">
									工作日送货：<span>周一至周五</span> </li>
								<li data-type="time" class="J_option " data-value="3">
									双休日、假日送货：<span>周六至周日</span> </li>
								<!-- besttime end -->
							</ul>
						</div>
					</div>

					<div class="section section-options section-invoice clearfix">
						<div class="section-header">
							<h3 class="title">发票</h3>
						</div>
						<div class="section-body clearfix">
							<div class="invoice-result">
								<span id="J_invoiceDesc">电子发票</span>
								<span id="J_invoiceTitle">个人</span>
								<span>商品明细</span>
								<a href="#J_modalInvoiceInfo" data-toggle="modal" id="J_invoiceModify" data-stat-id="2301820fc39a72c6" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-2301820fc39a72c6', '#J_modalInvoiceInfo', 'pcpid', '']);">修改 &gt;</a>
							</div>
						</div>
					</div>

					<div class="section section-goods">
						<div class="section-header clearfix">
							<h3 class="title">商品及优惠券</h3>
							<div class="more">
								<a href="https://static.mi.com/cart/" data-stat-id="94fe184c5b525318" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-94fe184c5b525318', '//static.mi.com/cart/', 'pcpid', '']);">返回购物车<i class="iconfont"></i></a>
							</div>
						</div>
						<div class="section-body">
							<ul class="goods-list" id="J_goodsList">
								<li class="clearfix">
									<div class="col col-img"> <img src="images/pms_1524621084.jpg" width="30" height="30"> </div>
									<div class="col col-name">
										<a href="https://item.mi.com/1181500026.html" target="_blank"> 小米6X 全网通版 4GB内存 64GB 流沙金 </a>
									</div>
									<div class="col col-price"> 1399元 x 1 </div>
									<div class="col col-status"> &nbsp; </div>
									<div class="col col-total"> 1399元 </div>
								</li>
								<li class="clearfix">
									<div class="col col-img"> <img src="images/pms_1501236937.jpg" width="30" height="30"> </div>
									<div class="col col-name">
										<a href="https://item.mi.com/1173000036.html" target="_blank"> 米粉卡日租卡 </a> <em class="label">赠品</em> </div>
									<div class="col col-price"> 0元 x 1 </div>
									<div class="col col-status"> &nbsp; </div>
									<div class="col col-total"> 0元 </div>
								</li>
								<li class="clearfix">
									<div class="col col-img"> <img src="images/pms_1534130429.jpg" width="30" height="30"> </div>
									<div class="col col-name">
										<a href="https://item.mi.com/1181100030.html" target="_blank"> 小米移动吃到饱体验卡 三切 </a> <em class="label">赠品</em> </div>
									<div class="col col-price"> 0元 x 1 </div>
									<div class="col col-status"> &nbsp; </div>
									<div class="col col-total"> 0元 </div>
								</li>
							</ul>
						</div>
					</div>

					<div class="section section-count clearfix">
						<div class="count-actions">
							<!-- 优惠券 -->
							<div class="coupon-trigger" id="J_useCoupon">
								<i class="iconfont icon-plus"></i>使用优惠券
							</div>
							<div class="coupon-result hide" id="J_couponResult">
								<i class="iconfont icon-selected"></i> 正在使用：
								<span class="coupon-title" id="J_couponTitle"></span>
								<a href="javascript:void(0)" id="J_changeConpon" data-stat-id="346324f808761ba3" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-346324f808761ba3', 'javascript:void0', 'pcpid', '']);">［修改］</a>
							</div>
							<div class="coupon-box hide" id="J_couponBox">
								<ul class="clearfix tab-switch J_tabSwitch">
									<li>选择优惠券</li>
									<li>输入优惠券码</li>
								</ul>
								<div class="tab-container">
									<div class="tab-content list-content">
										<p class="coupon-empty">您暂时没有可用的优惠券</p>
									</div>
									<div class="tab-content code-content hide">
										<div class="form-section">
											<label class="input-label" for="coupon_code">请输入优惠券码</label>
											<input class="input-text" id="coupon_code" name="coupon_code" type="text">
										</div>
										<div class="coupon-confirm">
											<a href="javascript:void(0);" class="btn btn-primary" id="J_useCouponCode" data-stat-id="748c686c5b1b8d1d" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-748c686c5b1b8d1d', 'javascript:void0', 'pcpid', '']);">立即使用</a>
											<a href="javascript:void(0);" class="btn btn-gray J_couponCancel" data-stat-id="f023d10e7702df86" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-f023d10e7702df86', 'javascript:void0', 'pcpid', '']);">不使用优惠券</a>
										</div>
									</div>
								</div>
							</div>

							<!-- 购物卡 -->
							<div class="ecard-trigger" id="J_useEcard" data-type="normal"><i class="iconfont icon-plus"></i>使用小米礼品卡</div>
							<div class="ecard-result hide" id="J_ecardResult">
								<i class="iconfont icon-selected"></i> 已使用礼品卡 <span id="J_ecardVal"></span>
								<a href="javascript:void(0);" id="J_ecardModify" data-stat-id="50a1b9bacbcb5078" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-50a1b9bacbcb5078', 'javascript:void0', 'pcpid', '']);">［修改］</a>
							</div>
							<!-- 现金券 -->
							<div class="ecard-trigger hide" id="J_useRecycle" data-type="recycle"><i class="iconfont icon-plus"></i>使用现金券</div>
							<div class="ecard-result hide" id="J_recycleResult">
								<i class="iconfont icon-selected"></i> 已使用现金券 <span id="J_recycleVal"></span>
								<a href="javascript:void(0);" id="J_recycleModify" data-stat-id="f64d3a017f5f4356" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-f64d3a017f5f4356', 'javascript:void0', 'pcpid', '']);">［修改］</a>
							</div>

							<div class="ecard-box hide" id="J_ecardBox">
								<ul class="clearfix tab-switch J_tabSwitch">
									<li>已绑定的礼品卡</li>
									<li>输入礼品卡以绑定</li>
								</ul>
								<div class="tab-container">
									<!-- 选卡 -->
									<div class="tab-content ecard-list">
										<div class="empty hide" id="J_ecardEmpty">
											<p>没有发现可用的礼品卡！</p>
											<a href="javascript:void(0);" class="btn btn-gray J_ecardCancel" data-stat-id="138fe81ead4f1946" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-138fe81ead4f1946', 'javascript:void0', 'pcpid', '']);">取消</a>
										</div>
										<div class="hide">
											<div id="J_ecardList">
											</div>
											<div class="ecard-info" id="J_ecardInfo"></div>
											<div class="btns">
												<a href="javascript:void(0);" class="btn btn-primary" id="J_useSelEcard" data-stat-id="8ec903cbc50e18fe" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-8ec903cbc50e18fe', 'javascript:void0', 'pcpid', '']);">确认以上选择</a>
												<a href="javascript:void(0);" class="btn btn-gray J_ecardCancel" data-stat-id="8d5847ab51e17b06" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-8d5847ab51e17b06', 'javascript:void0', 'pcpid', '']);">取消 不使用礼品卡</a>
											</div>
										</div>
									</div>

									<!-- 绑卡 -->
									<div class="tab-content ecard-input hide">
										<div class="form-section">
											<span class="input-title">密码：</span>
											<!-- <label class="input-label" for="ecard_password">请输入礼品卡密码</label> -->
											<input class="input-text input-card" id="ecard_password" name="ecard_password" placeholder="请输入礼品卡密码" type="text">
										</div>
										<div class="form-section clearfix">
											<span class="input-title">验证码：</span>
											<!-- <label class="input-label" for="ecard_captcha">请输入验证码</label> -->
											<input class="input-text input-captcha" id="ecard_captcha" placeholder="请输入验证码" name="ecard_captcha" data-authurl="//captcha.hd.mi.com/captcha/auth?answer={answer}&amp;service=order.mi.com&amp;_ov=0" type="text">
											<div class="captcha-img">
												<img alt="验证码" title="点击更换验证码" id="J_ecardCaptchaImg">
											</div>
										</div>
										<div class="form-section form-btns">
											<button class="btn btn-primary" id="J_bindEcard">绑定礼品卡</button>
											<button class="btn btn-gray J_ecardCancel">取消</button>
										</div>
									</div>
								</div>

								<div class="recycle-box hide" id="J_recycleBox">
									<div class="ecard-list recycle-list">
										<div id="J_recycleList">
											<div class="table-wrapper">
												<ul class="clearfix">
													<li class="col-1">选择</li>
													<li class="col-2">券号</li>
													<li class="col-3">本次使用（元）</li>
													<li class="col-4">余额（元）</li>
												</ul>
												<div>
													<table>
														<tbody> </tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="ecard-info" id="J_recycleInfo">未选择现金券，还需支付 <span>1399.00元</span><span class="tip">（暂不支持抵扣运费、意外保、电话卡等）</span></div>
										<div class="btns">
											<a href="javascript:void(0);" class="btn btn-primary" id="J_useSelRecycle" data-stat-id="5fce177b01759862" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-5fce177b01759862', 'javascript:void0', 'pcpid', '']);">确认以上选择</a>
											<a href="javascript:void(0);" class="btn btn-gray J_recycleCancel" data-stat-id="6722e62e800a0539" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-6722e62e800a0539', 'javascript:void0', 'pcpid', '']);">取消 不使用现金券</a>
										</div>
									</div>
								</div>

								<div class="sms-box hide" id="J_ecardSmsBox">
									<div class="title">已向您绑定的手机<span id="J_ecardMobile">（135****6910）</span>发送验证码 <i class="icon-qa" id="J_ecardQa">?</i></div>
									<div class="form-section clearfix">
										<label class="input-label" for="ecard_sms">请输入验证码</label>
										<input class="input-text input-ecard" id="ecard_sms" name="ecard_sms" type="text">
										<span id="J_smsCountdown" class="countdown hide"><i></i>秒后重新发送</span>
										<a href="javascript:void(0);" class="repeat hide" id="J_repeatSms" data-stat-id="bda9c3a53dde8c64" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-bda9c3a53dde8c64', 'javascript:void0', 'pcpid', '']);">重新发送</a>
									</div>
									<div class="form-section form-btns">
										<button class="btn btn-primary" id="J_checkEcardSms">确定</button>
										<button class="btn btn-gray" id="J_cancelEcardSms">取消</button>
									</div>
									<div class="qa-detail hide" id="J_ecardQaDetail">
										为保证您的资金安全，消费时需通过绑定手机的认证。若您绑定的手机号已变更，可前往小米账号中心修改绑定的手机号，如果原来的手机号已无法使用，可通过申诉的方式更换手机号。
										<a href="https://account.xiaomi.com/pass/auth/security/home" target="_blank" data-stat-id="e71cd148398100cd" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-e71cd148398100cd', 'https://account.xiaomi.com/pass/auth/security/home', 'pcpid', '']);">前往小米账号中心&gt;</a>
									</div>
								</div>

								<div class="loading hide">
									<div class="loader"></div>
								</div>
							</div>

							<!-- 加价购 -->
							<div class="raise-buy-box">
								<ul id="J_raiseBuyList">

									<!--S 保障计划 产品选择弹框 -->
									<!--E 保障计划 产品选择弹框 -->
								</ul>
							</div>
						</div>

						<div class="money-box" id="J_moneyBox">
							<ul>
								<li class="clearfix"> <label>商品件数：</label> <span class="val">3件</span> </li>
								<li class="clearfix"> <label>商品总价：</label> <span class="val">1399元</span> </li>
								<li class="clearfix"> <label>活动优惠：</label> <span class="val">-0元</span> </li>
								<li class="clearfix"> <label>优惠券抵扣：</label> <span class="val"><i id="J_couponVal">-0</i>元</span> </li>
								<li class="clearfix"> <label>运费：</label> <span class="val"><i data-id="J_postageVal">0</i>元</span> </li>
								<li class="clearfix total-price"> <label>应付总额：</label> <span class="val"><em data-id="J_totalPrice">1399</em>元</span> </li>
							</ul>
						</div>
					</div>

					<div class="section-bar clearfix">
						<div class="fl">
							<div class="seleced-address" id="J_confirmAddress">曲猛 152****2202<br>山东 聊城市 东昌府区 广平乡大曲村
								<a href="javascript:void(0);" class="modify J_modify">修改</a>
							</div>
							<div class="big-pro-tip hide J_confirmBigProTip"></div>
						</div>
						<div class="fr">
							<a href="javascript:void(0);" class="btn btn-primary" id="J_checkoutToPay" data-stat-id="a1dee8a2c4982f79" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-a1dee8a2c4982f79', 'javascript:void0', 'pcpid', '']);">立即下单</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 大家点缺货提示 -->
		<div class="big-pro-tip-pop hide" id="J_popBigProTip" style="top: 0px; left: 0px;"></div>

		<!-- 禮品卡提示 S-->
		<div class="modal fade modal-hide modal-lipin" id="J_lipinTip">
			<div class="modal-header">
				<h3 class="title">温馨提示</h3>
			</div>
			<div class="modal-body">
				<p>
					为保障您的利益与安全，下单后礼品卡将会被使用，<br> 且订单信息将不可修改。请确认收货信息：
				</p>
				<ul>
					<li class="clearfix">
						<strong>收&nbsp;&nbsp;货&nbsp;&nbsp;人：</strong>
						<span id="J_lipinUserName"></span>
					</li>
					<li class="clearfix">
						<strong>联系电话：</strong>
						<span id="J_lipinUserPhone"></span>
					</li>
					<li class="clearfix">
						<strong>收货地址：</strong>
						<span id="J_lipinUserAddress"></span>
					</li>
				</ul>
			</div>
			<div class="modal-footer">
				<a href="javascript:void(0);" class="btn btn-primary" id="J_lipinSubmit" data-stat-id="f697c423d0b19035" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-f697c423d0b19035', 'javascript:void0', 'pcpid', '']);">确认下单</a>
				<a href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal" data-stat-id="8c72f66a97ad6fc2" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-8c72f66a97ad6fc2', 'javascript:void0', 'pcpid', '']);">返回修改</a>
			</div>
		</div>
		<!--  禮品卡提示 E-->

		<!-- <div class="modal fade modal-hide modal-edit-address" id="J_modalEditAddress">
    <div class="modal-body">
        <iframe height="100%" width="100%"  frameborder="0" allowfullscreen=""></iframe>
    </div>
</div> -->

		<div class="modal fade modal-hide fade modal-alert" id="J_modalAlert">
			<div class="modal-bd">
				<div class="text">
					<h3 id="J_alertMsg"></h3>
				</div>
				<div class="actions">
					<button class="btn btn-primary" data-dismiss="modal">确定</button>
				</div>
				<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="e7b8a8863a8e3027" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-e7b8a8863a8e3027', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
			</div>
		</div>

		<div class="address-top-bar" id="J_addressTopBar">
			<div class="container">
				<a href="javascript:void(0);" class="btn btn-primary" id="J_addressTopBarBtn" data-stat-id="adbf5b7393f175ca" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-adbf5b7393f175ca', 'javascript:void0', 'pcpid', '']);">选择该收货地址</a>
				<div class="content" id="J_addressTopCon">
					<span class="uname">名字</span><span class="utel">名字</span>
				</div>
			</div>
		</div>

		<div class="modal modal-warning modal-hide" id="warning-bargain-1463">
			<div class="modal-hd">
				<h2 class="title">温馨提示</h2>
				<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="9ec728cf5d04b48f" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-9ec728cf5d04b48f', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
			</div>
			<div class="modal-bd">
				<p>
					<b>换卡说明：</b>
					<br><br>移动2G / 3G卡升级为移动4G卡
					<br>传统SIM大卡换小米手机适配的micro卡
				</p>
			</div>
		</div>

		<div class="modal modal-warning modal-hide" id="warning-bargain-1464">
			<div class="modal-hd">
				<h2 class="title">温馨提示</h2>
				<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="09b608f650d0418c" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-09b608f650d0418c', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
			</div>
			<div class="modal-bd">
				<p>
					<b>换卡说明：</b>
					<br><br>移动2G / 3G卡升级为移动4G卡
					<br>传统SIM大卡换小米手机适配的nano卡
				</p>
			</div>
		</div>

		<div class="modal modal-invoice modal-hide fade" id="J_modalInvoiceInfo">
			<div class="modal-hd">
				<span class="title">发票信息</span>
				<span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
			</div>
			<div class="modal-body">
				<div class="in-section clearfix">
					<label class="tit">发票类型：</label>
					<ul class="J_optionList options options-list  clearfix">
						<li data-type="invoice" data-invoice-type="not_invoice" class="hide J_option">
							不开发票
						</li>
						<li data-type="invoice" data-invoice-type="personal" class="J_option hide" data-value="1">
							纸质发票
						</li>
						<li data-type="invoice" data-invoice-type="electron" class="J_option selected" data-value="4">
							电子发票
						</li>
					</ul>
					<div class="invoice-tip hide invoice-paper-tip" id="J_invoicePaperTip">
						1. 发票不与商品随箱寄出； <br> 2. 发票将于商品妥投完成7日后单独寄出； <br> 3. 发票收到后请妥善保存，退货需一同寄回。
					</div>
					<div class="invoice-tip" id="J_invoiceDefaultTip">
						电子发票与纸质发票具有相同法律效力，可作为报销、售后、维权凭证。<br>
						<span>推荐使用电子发票，不怕丢失、更方便、更环保。</span> <br>
						<a href="javascript:void(0);" id="J_showPaperOption" data-stat-id="8f13f9e005abe22c" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-8f13f9e005abe22c', 'javascript:void0', 'pcpid', '']);">选择纸质发票 &gt;</a>
					</div>

					<div class="invoice-tip hide" id="J_onlyEleTip">
						电子发票是税务局认可的有效凭证，其法律效力、基本用途及使用规定同纸质发票。
					</div>
				</div>

				<div id="J_invoceInfoOpionsContent">
					<div class="in-section clearfix" id="J_invoiceTitleSec">
						<label class="tit">发票抬头：</label>
						<ul class="J_optionList options options-list clearfix">
							<li data-type="invoice-mode" data-invoice-mode="personal" class="J_option selected">
								个人
							</li>
							<li data-type="invoice-mode" data-invoice-mode="company" class="J_option">
								单位
							</li>
						</ul>
						<div class="form-section form-section-active form-section-valid">
							<label class="input-label" for="invoice_title">请输入发票抬头</label>
							<input class="input-text input-text-big" id="invoice_title" name="invoice_title" value="个人" type="text">
						</div>
					</div>

					<div class="in-section clearfix hide" id="J_invoiceCompanyCode">
						<label class="tit">单位税号：</label>
						<div class="form-section form-section-valid">
							<label class="input-label" for="invoice_company_code">请填写购买方纳税人识别号或统一社会信用代码</label>
							<input class="input-text input-text-big" id="invoice_company_code" name="invoice_company_code" type="text">
							<a href="javascript:void(0);" data-bubble-toggle="invoiceCompanyCodeQa" data-stat-id="022f95dc86a2786d" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-022f95dc86a2786d', 'javascript:void0', 'pcpid', '']);"><i class="icon-qa">?</i></a>
							<div class="qa-detail hide" data-bubble="invoiceCompanyCodeQa">
								纳税人识别号为营业执照上的统一社会信用代码或税务登记证上的税号，一般为15、17、18、20位数字或大写字母。
							</div>
						</div>
					</div>

					<div class="in-section clearfix J_eInvoiceMore">
						<label class="tit">收票手机：</label>
						<div class="form-section form-section-active form-section-valid">
							<label class="input-label" for="einvoice_phone">收票人手机</label>
							<input class="input-text input-text-big" id="einvoice_phone" name="einvoice_phone" data-tel="152****2202" value="152****2202" placeholder="电子发票开具后短信告知你（选填）" type="text">
						</div>
					</div>

					<div class="in-section clearfix J_eInvoiceMore">
						<label class="tit">收票邮箱：</label>
						<div class="form-section form-section-active form-section-valid">
							<label class="input-label" for="einvoice_mail">收票人邮箱</label>
							<input class="input-text input-text-big" id="einvoice_mail" name="einvoice_mail" data-email="1281440728@qq.com" value="1281440728@qq.com" placeholder="用于接收电子发票（选填）" type="text">
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
							<dd>4.第三方商品的发票由相关企业单独开具。</dd>
							<dd>
								<a href="https://order.mi.com/static/invoice" target="_blank" data-stat-id="21bfe04bf69a8185" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-21bfe04bf69a8185', 'https://order.mi.com/static/invoice', 'pcpid', '']);">发票相关问题 &gt;</a>
							</dd>
						</dl>
					</div>
				</div>

				<div class="tip" id="J_invoiceInfoSubmitTip"></div>
			</div>
			<div class="modal-footer">
				<a href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal" data-stat-id="f4d35f4fcf45400b" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-f4d35f4fcf45400b', 'javascript:void0', 'pcpid', '']);">取消</a>
				<a href="javascript:void(0);" class="btn btn-primary" id="J_invoiceInfoSubmit" data-stat-id="545ec4067bc564b1" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-545ec4067bc564b1', 'javascript:void0', 'pcpid', '']);">保存</a>
			</div>
		</div>

		<!-- 保险弹窗 -->
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
                    {{=parseInt(it.act_price)}}元 
                        {{?parseInt(it.act_diff) > 0}}
                        <span class="price-diff"> ( 省 {{=parseInt(it.act_diff)}}元 )</span> {{?}} {{??}} {{=parseInt(it.service_price)}}元 {{?}}
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
		<script id="J_newAddressTemplate" type="text/x-dot-template">
			<div class="address-item J_addressItem " data-address_id="{{=it.address_id}}" data-consignee="{{=it.uname}}" data-tel="{{=it.phone}}" data-province_id="{{=it.province}}" data-province_name="{{=it.provinceName}}" data-city_id="{{=it.city}}" data-city_name="{{=it.cityName}}" data-district_id="{{=it.county}}" data-district_name="{{=it.countyName}}" data-area="{{=it.area}}" data-area-name="{{=it.areaName}}" data-address="{{=it.address}}" data-tag_name="{{=it.tag}}">

				<dl>
					<dt>
                <span class="tag">{{=it.tag}}</span>
                <em class="uname">{{=it.uname}}</em>
            </dt>
					<dd class="utel">{{=it.phone}}</dd>
					<dd class="uaddress">
						{{=it.provinceName}} {{=it.cityName}} {{=it.countyName}} {{=it.areaName}}
						<br> {{=it.address}}
					</dd>
				</dl>
				<div class="actions">
					<a href="javascript:void(0);" class="modify J_addressModify">修改</a>
				</div>
			</div>
		</script>

		<script id="J_checkoutMoneyTemplate" type="text/x-dot-template">
			<ul>
				<li class="clearfix">
					<label>商品件数：</label>
					<span class="val">{{=it.total_count}}件</span>
				</li>
				<li class="clearfix">
					<label>商品总价：</label>
					<span class="val">{{=it.productMoney}}元</span>
				</li>
				{{? it.ecards.ecard_amount && it.ecards.ecard_amount>0}}
				<li class="clearfix">
					<label>券卡支付：</label>
					<span class="val">-{{=it.ecards.ecard_amount}}元</span>
				</li>
				{{? }}
				<li class="clearfix">
					<label>活动优惠：</label>
					<span class="val">-{{=it.activityDiscountMoney}}元</span>
				</li>
				<li class="clearfix">
					<label>优惠券抵扣：</label>
					<span class="val"><i id="J_couponVal">-0</i>元</span>
				</li>

				{{? it.subsidy.sub_amount && it.subsidy.sub_amount>0}}
				<li class="clearfix">
					<label>节能补贴：</label>
					<span class="val">-{{=it.subsidy.sub_amount}}元</span>
				</li>
				{{? }}

				<li class="clearfix">
					<label>运费：</label>
					<span class="val"><i data-id="J_postageVal">{{=it.shipment}}</i>元</span>
				</li>
				<li class="clearfix total-price">
					<label>应付总额：</label>
					<span class="val"><em data-id="J_totalPrice">{{=it.need_pay_amount}}</em>元</span>
				</li>
			</ul>
		</script>

		<script id="J_checkoutGoodsTemplate" type="text/x-dot-template">
			{{~it :value:index}}
			<li class="clearfix">
				<div class="col col-img">
					<img src="{{=value.image_url}}" width="30" height="30">
				</div>
				<div class="col col-name">

					{{? $.inArray("FLOWPACKET",value.tags) >= 0}} {{=value.product_name}} {{?? }}
					<a href="{{=MI.GLOBAL_CONFIG.itemSite}}/{{=value.commodity_id}}.html" target="_blank">
						{{=value.product_name}}
					</a>
					{{? }} {{? value.showTypeName}}
					<em class="label">{{=value.showTypeName}}</em> {{? }}
				</div>
				<div class="col col-price">
					{{=value.salePrice}}元 x {{=value.num}}
				</div>
				<div class="col col-status">
					&nbsp;
				</div>
				<div class="col col-total">
					{{=value.subtotal}}元
				</div>
			</li>
			{{~}}
		</script>

		<!--结算提示 -->
		<script id="J_tipGoodsTemplate" type="text/x-dot-template">
			<div class="modal fade modal-hide  modal-tip-goods modal-tip-goods-{{=it.data.items.length}}" id="J_modalTipGoods">
				<div class="modal-hd">
					<h3 class="title">{{=it.msg}}</h3>
					<a class="close" data-dismiss="modal" href="javascript: void(0);"><i class="iconfont">&#xe602;</i></a>
				</div>
				<div class="modal-bd">
					{{? it.data.items && it.data.items.length}}
					<ul class="list clearfix" id="J_tipGoodskList">
						{{~it.data.items :itemValue:itemIndex}}
						<li>
							{{? itemValue.image_url}}
							<img src="{{=itemValue.image_url}}" width="160" height="160" alt="{{=itemValue.product_name}}"> {{? }}
							<h3>{{=itemValue.product_name}}</h3>
							<p class="price">{{=itemValue.salePrice}}元</p>
						</li>
						{{~}}
					</ul>
					{{? }}
				</div>
				<div class="modal-ft">
					<a href="//static.mi.com/cart/" class="btn btn-primary">返回购物车</a>
				</div>
			</div>
		</script>

		<!-- 购物卡列表 -->
		<script id="J_ecardTemplate" type="text/x-dot-template">
			<div class="table-wrapper">
				<ul class="clearfix">
					<li class="col-1">选择</li>
					{{? it.type === 'recycle'}}
					<li class="col-2">券号</li>
					{{?? }}
					<li class="col-2">卡号</li>
					{{? }}
					<li class="col-3">本次使用（元）</li>
					<li class="col-4">余额（元）</li>

					{{? it.type === 'normal'}}
					<li class="col-5">有效期至</li>
					{{? }}
				</ul>
				{{? it.data.length > 5 }}
				<div class="table-scroll">
					{{?? }}
					<div>
						{{? }}
						<table>
							<tbody>
								{{~it.data :itemValue:itemIndex}} {{? itemValue.isSel}}
								<tr class="J_ecardItem selected" data-id="{{=itemValue.card_id}}" data-balance="{{=itemValue.balance}}">
									{{?? }}
									<tr class="J_ecardItem" data-id="{{=itemValue.card_id}}" data-balance="{{=itemValue.balance}}">
										{{? }}
										<td class="col-1"><i class="iconfont icon-checkbox J_ecardCheckbox">&#x221a;</i></td>
										<td class="col-2">
											{{=itemValue.card_id}} {{? itemValue.type === 'phone_ecard' || itemValue.type === 'cash_ecard'}} （{{=itemValue.name}}） {{? }}
										</td>
										<td class="col-3 use J_income">0</td>
										<td class="col-4 J_balance">{{=itemValue.balance}}</td>

										{{? it.type === 'normal'}}
										<td class="col-5">{{=itemValue.end_time_format}}</td>
										{{? }}
									</tr>
									{{~}}
							</tbody>
						</table>
					</div>
				</div>
		</script>
		<div class="site-footer">
			<div class="container">
				<div class="footer-service">
					<ul class="list-service clearfix">
						<li>
							<a rel="nofollow" href="https://www.mi.com/static/fast/" target="_blank" data-stat-id="b6623efa32380a54" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-b6623efa32380a54', '//www.mi.com/static/fast/', 'pcpid', '']);"><i class="iconfont"></i>预约维修服务</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/exchange#back" target="_blank" data-stat-id="2f897478b423da75" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-2f897478b423da75', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>7天无理由退货</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/exchange#back" target="_blank" data-stat-id="fc1e5df6af734d8a" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-fc1e5df6af734d8a', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>15天免费换货</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/service/buy/postage/" target="_blank" data-stat-id="e295d1489f3b11c9" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-e295d1489f3b11c9', '//www.mi.com/service/buy/postage/', 'pcpid', '']);"><i class="iconfont"></i>满150元包邮</a>
						</li>
						<li>
							<a rel="nofollow" href="https://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="efbc8c15abeec854" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-efbc8c15abeec854', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);"><i class="iconfont"></i>520余家售后网点</a>
						</li>
					</ul>
				</div>
				<div class="footer-links clearfix">

					<dl class="col-links col-links-first">
						<dt>帮助中心</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/account/register/" target="_blank" data-stat-id="22766b335a55d40d" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-22766b335a55d40d', '//www.mi.com/service/account/register/', 'pcpid', '']);">账户管理</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/buy/buytime/" target="_blank" data-stat-id="df850681bd110f2a" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-df850681bd110f2a', '//www.mi.com/service/buy/buytime/', 'pcpid', '']);">购物指南</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/order/sendprogress/" target="_blank" data-stat-id="c4bdbbc547140cbc" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-c4bdbbc547140cbc', '//www.mi.com/service/order/sendprogress/', 'pcpid', '']);">订单操作</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>服务支持</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/exchange" target="_blank" data-stat-id="4caff39598e37705" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-4caff39598e37705', '//www.mi.com/service/exchange', 'pcpid', '']);">售后政策</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/service/" target="_blank" data-stat-id="40f62e51b522d180" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-40f62e51b522d180', '//www.mi.com/service/', 'pcpid', '']);">自助服务</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/c/service/download/" target="_blank" data-stat-id="d6023c3200a7dedf" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-d6023c3200a7dedf', '//www.mi.com/c/service/download/', 'pcpid', '']);">相关下载</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>线下门店</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/c/xiaomizhijia/" target="_blank" data-stat-id="067c0374437e9c22" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-067c0374437e9c22', '//www.mi.com/c/xiaomizhijia/', 'pcpid', '']);">小米之家</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="e8ce99d5109d4393" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-e8ce99d5109d4393', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);">服务网点</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/static/familyLocation/" target="_blank" data-stat-id="d25f9c3d9770b3e2" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-d25f9c3d9770b3e2', '//www.mi.com/static/familyLocation/', 'pcpid', '']);">授权体验店</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>关于小米</dt>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/about/" target="_blank" data-stat-id="561a4f4dd1955a45" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-561a4f4dd1955a45', '//www.mi.com/about/', 'pcpid', '']);">了解小米</a>
						</dd>

						<dd>
							<a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="9b9ea371a496d2e0" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-9b9ea371a496d2e0', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/ir/" target="_blank" data-stat-id="84c417f71b03a6ae" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-84c417f71b03a6ae', '//www.mi.com/ir/', 'pcpid', '']);">投资者关系</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>关注我们</dt>

						<dd>
							<a rel="nofollow" href="https://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="555efd70101b9a29" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-555efd70101b9a29', 'https://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a>
						</dd>

						<dd>
							<a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" data-stat-id="46cee0941dbb1a9b" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-46cee0941dbb1a9b', '#J_modalWeixin', 'pcpid', '']);">官方微信</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/about/contact/" target="_blank" data-stat-id="92ca6b5f0848ad9b" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-92ca6b5f0848ad9b', '//www.mi.com/about/contact/', 'pcpid', '']);">联系我们</a>
						</dd>

					</dl>

					<dl class="col-links ">
						<dt>特色服务</dt>

						<dd>
							<a rel="nofollow" href="https://order.mi.com/queue/f2code" target="_blank" data-stat-id="643b63e2d1e38314" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-643b63e2d1e38314', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://www.mi.com/giftcode/" target="_blank" data-stat-id="610fd3c4af2ea51f" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-610fd3c4af2ea51f', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a>
						</dd>

						<dd>
							<a rel="nofollow" href="https://order.mi.com/misc/checkitem" target="_blank" data-stat-id="65373ce2234f30b3" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-65373ce2234f30b3', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a>
						</dd>

					</dl>

					<div class="col-contact">
						<p class="phone">400-100-5678</p>
						<p>
							周一至周日 8:00-18:00<br>（仅收市话费）
						</p>
						<a rel="nofollow" class="btn btn-line-primary btn-small" href="https://www.mi.com/service/contact/" target="_blank" data-stat-id="31d34d580624fa82" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-31d34d580624fa82', '//www.mi.com/service/contact/', 'pcpid', '']);"><i class="iconfont"></i> 联系客服</a>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">
				<span class="logo ir">小米官网</span>
				<div class="info-text">
					<p>小米旗下网站：
						<a href="https://www.mi.com/index.html" target="_blank" data-stat-id="cbeefdcbbcd0d627" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-cbeefdcbbcd0d627', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span>
						<a href="https://www.miui.com/" target="_blank" data-stat-id="fc284aa1ceb31fd9" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-fc284aa1ceb31fd9', 'https://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span>
						<a href="https://home.mi.com/index.html" target="_blank" data-stat-id="de7c51e641aa2e53" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-de7c51e641aa2e53', 'https://home.mi.com/index.html', 'pcpid', '']);">米家</a><span class="sep">|</span>
						<a href="http://www.miliao.com/" target="_blank" data-stat-id="7524c4834b002ad4" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-7524c4834b002ad4', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span>
						<a href="https://www.duokan.com/" target="_blank" data-stat-id="80b3501886e02fe9" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-80b3501886e02fe9', 'https://www.duokan.com/', 'pcpid', '']);">多看</a><span class="sep">|</span>
						<a href="http://game.xiaomi.com/" target="_blank" data-stat-id="930aed514cbc6003" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-930aed514cbc6003', 'http://game.xiaomi.com/', 'pcpid', '']);">游戏</a><span class="sep">|</span>
						<a href="http://www.miwifi.com/" target="_blank" data-stat-id="75bb1b8481b176e0" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-75bb1b8481b176e0', 'http://www.miwifi.com/', 'pcpid', '']);">路由器</a><span class="sep">|</span>
						<a href="https://www.mi.com/micard/" target="_blank" data-stat-id="c3ec43ebedd4add2" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-c3ec43ebedd4add2', '//www.mi.com/micard/', 'pcpid', '']);">米粉卡</a><span class="sep">|</span>
						<a href="https://b.mi.com/?client_id=180100031058&amp;masid=17409.0358" target="_blank" data-stat-id="63b3674ef46ce59d" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-63b3674ef46ce59d', 'https://b.mi.com/client_id=180100031058&amp;masid=17409.0358', 'pcpid', '']);">政企服务</a><span class="sep">|</span>
						<a href="https://xiaomi.tmall.com/" target="_blank" data-stat-id="4cf29be367c59dfb" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-4cf29be367c59dfb', 'https://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span>
						<a href="https://www.mi.com/about/privacy/" target="_blank" data-stat-id="a72ef3f7a81eb951" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-a72ef3f7a81eb951', 'https://www.mi.com/about/privacy/', 'pcpid', '']);">隐私政策</a><span class="sep">|</span>
						<a href="https://static.mi.com/feedback/" target="_blank" data-stat-id="769a9101e8720f06" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-769a9101e8720f06', 'https://static.mi.com/feedback/', 'pcpid', '']);">问题反馈</a><span class="sep">|</span>
						<a href="https://www.mi.com/jiancha/" target="_blank" data-stat-id="518429be97e89010" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-518429be97e89010', '//www.mi.com/jiancha/', 'pcpid', '']);">廉正举报</a><span class="sep">|</span>
						<a href="#J_modal-globalSites" data-toggle="modal" target="_blank" data-stat-id="c10c16b63438caff" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-c10c16b63438caff', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>
					</p>
					<p>©
						<a href="https://www.mi.com/" target="_blank" title="mi.com" data-stat-id="97b9bd65f135617d" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-97b9bd65f135617d', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号
						<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="b7ed5e93760eca67" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-b7ed5e93760eca67', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a>
						<a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="d26f4f2c6f68e58d" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-d26f4f2c6f68e58d', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a>
						<a rel="nofollow" href="https://i8.mifile.cn/b2c-mimall-media/63cbc1342511938fc1395113f81324c4.jpg" target="_blank" data-stat-id="3e101b0c1882ad8f" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-3e101b0c1882ad8f', '//i8.mifile.cn/b2c-mimall-media/63cbc1342511938fc1395113f81324c4.jpg', 'pcpid', '']);">京网文[2017]1530-131号</a>

						<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
				</div>
				<div class="info-links">
					<a href="https://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank" data-stat-id="c0b1687f05f3f08f" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-c0b1687f05f3f08f', '//privacy.truste.com/privacy-seal/validationrid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid', '']);"><img src="images/truste.png" alt="TRUSTe Privacy Certification"></a>
					<a href="https://search.szfw.org/cert/l/CX20120926001783002010" target="_blank" data-stat-id="869ce1f0cca9e6ea" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-869ce1f0cca9e6ea', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid', '']);"><img src="images/v-logo-2.png" alt="诚信网站"></a>
					<a href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank" data-stat-id="1241e67df29d0575" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-1241e67df29d0575', 'https://ss.knet.cn/verifyseal.dllsn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid', '']);"><img src="images/v-logo-1.png" alt="可信网站"></a>
					<a href="http://www.315online.com.cn/member/315140007.html" target="_blank" data-stat-id="5b95759974a59cb7" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-5b95759974a59cb7', 'http://www.315online.com.cn/member/315140007.html', 'pcpid', '']);"><img src="images/v-logo-3.png" alt="网上交易保障中心"></a>
					<a href="https://www.mi.com/service/buy/commitment/" target="_blank" data-stat-id="edcfd7569e802521" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-edcfd7569e802521', 'https://www.mi.com/service/buy/commitment/', 'pcpid', '']);"><img src="images/ba10428a4f9495ac310fd0b5e0cf8370.png" alt="诚信经营 放心消费"></a>

				</div>
			</div>
			<div class="slogan ir">探索黑科技，小米为发烧而生</div>
		</div>

		<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
			<div class="modal-hd">
				<a class="close" data-dismiss="modal" data-stat-id="d45f23a893b7d50a" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-d45f23a893b7d50a', '', 'pcpid', '']);"><i class="iconfont"></i></a>
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
					<a class="btn btn-primary" id="J_bigtapRetry" data-stat-id="13b51add57f99999" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-13b51add57f99999', '', 'pcpid', '']);">重试</a>
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
					<a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);" data-stat-id="7330a3f2fd3d97a2" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-7330a3f2fd3d97a2', 'javascript:void0', 'pcpid', '']);">网络错误，点击重新获取验证码！</a>
				</div>
				<div class="mode-action hide" id="J_bigtapModeAction">
					<div class="mode-con" id="J_bigtapModeContent"></div>
					<input name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
					<p class="tip" id="J_bigtapModeTip"></p>
					<a class="btn  btn-gray" id="J_bigtapModeSubmit" data-stat-id="37b5316cf41c0fe4" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-37b5316cf41c0fe4', '', 'pcpid', '']);">确认</a>
				</div>
			</div>
		</div>
		<!-- .xm-dm-error END -->
		<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
			<div class="modal-hd">
				<a class="close" data-dismiss="modal" data-stat-id="61542797574b46c8" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-61542797574b46c8', '', 'pcpid', '']);"><i class="iconfont"></i></a>
				<span class="title">Select Region</span>
			</div>
			<div class="modal-bd">
				<h3>Welcome to Mi.com</h3>
				<p class="modal-globalSites-tips">Please select your country or region</p>
				<p class="modal-globalSites-links clearfix">
					<a href="https://www.mi.com/index.html" data-stat-id="dc542ef203c6e2f0" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-dc542ef203c6e2f0', '//www.mi.com/index.html', 'pcpid', '']);">Mainland China</a>
					<a href="https://www.mi.com/hk/" data-stat-id="42a17510f6a1e6e9" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-42a17510f6a1e6e9', '//www.mi.com/hk/', 'pcpid', '']);">Hong Kong</a>
					<a href="https://www.mi.com/tw/" data-stat-id="77563685a358d8a7" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-77563685a358d8a7', '//www.mi.com/tw/', 'pcpid', '']);">Taiwan</a>
					<a href="https://www.mi.com/sg/" data-stat-id="4ce63829a7952f26" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-4ce63829a7952f26', '//www.mi.com/sg/', 'pcpid', '']);">Singapore</a>
					<a href="https://www.mi.com/my/" data-stat-id="e955c72e8f028e6c" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-e955c72e8f028e6c', '//www.mi.com/my/', 'pcpid', '']);">Malaysia</a>
					<a href="https://www.mi.com/ph/" data-stat-id="ec3216ea6372834c" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-ec3216ea6372834c', '//www.mi.com/ph/', 'pcpid', '']);">Philippines</a>
					<a href="https://www.mi.com/in/" data-stat-id="b5594dffb63ffc9d" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-b5594dffb63ffc9d', '//www.mi.com/in/', 'pcpid', '']);">India</a>
					<a href="https://www.mi.com/id/" data-stat-id="11364cec25cef49e" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-11364cec25cef49e', '//www.mi.com/id/', 'pcpid', '']);">Indonesia</a>
					<a href="https://www.mi.com/en/" data-stat-id="a27160e6dc16f8a0" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-a27160e6dc16f8a0', '//www.mi.com/en/', 'pcpid', '']);">Global Home</a>
					<a href="https://www.mi.com/mena/" data-stat-id="5ff48cd730c5be4c" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-5ff48cd730c5be4c', '//www.mi.com/mena/', 'pcpid', '']);">MENA</a>
					<a href="https://www.mi.com/pl/" data-stat-id="ab40e7d4d0b47476" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-ab40e7d4d0b47476', '//www.mi.com/pl/', 'pcpid', '']);">Poland</a>
					<a href="https://www.mi.com/ua/" data-stat-id="8f9e718d8a0f0831" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-8f9e718d8a0f0831', '//www.mi.com/ua/', 'pcpid', '']);">Ukraine</a>
					<a href="https://www.mi.com/ru/" data-stat-id="fcf9e9f358732559" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-fcf9e9f358732559', '//www.mi.com/ru/', 'pcpid', '']);">Russia</a>
					<a href="https://www.mi.com/vn/" data-stat-id="9c84c24c7830ff5a" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-9c84c24c7830ff5a', '//www.mi.com/vn/', 'pcpid', '']);">Vietnam</a>
					<a href="https://www.mi.com/mx/" data-stat-id="21d72fd39114890d" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-21d72fd39114890d', '//www.mi.com/mx/', 'pcpid', '']);">Mexico</a>
					<a href="https://www.mi.com/kr/" data-stat-id="55d41a6b501b6049" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-55d41a6b501b6049', '//www.mi.com/kr/', 'pcpid', '']);">Korea</a>
					<a href="https://www.mi.com/eg/" data-stat-id="adeb21c03c7e807e" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-adeb21c03c7e807e', '//www.mi.com/eg/', 'pcpid', '']);">Egypt</a>
					<a href="https://www.mi.com/th/" data-stat-id="22f6d344073e0689" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-22f6d344073e0689', '//www.mi.com/th/', 'pcpid', '']);">Thailand</a>
					<a href="https://www.mi.com/es/" data-stat-id="42b0b77ede96ed55" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-42b0b77ede96ed55', '//www.mi.com/es/', 'pcpid', '']);">Spain</a>
					<a href="https://www.mi.com/us/" data-stat-id="77c4f3bc749b0908" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-77c4f3bc749b0908', '//www.mi.com/us/', 'pcpid', '']);">United States</a>
					<a href="https://www.mi.com/it/" data-stat-id="2c90bba4d3535464" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-2c90bba4d3535464', '//www.mi.com/it/', 'pcpid', '']);">Italy</a>
					<a href="https://www.mi.com/fr/index.html" data-stat-id="6f9e5c9d6e0ddda5" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-6f9e5c9d6e0ddda5', '//www.mi.com/fr/index.html', 'pcpid', '']);">France</a>
					<a href="https://www.mi.com/bd/" data-stat-id="3fa58f68eaabbbf2" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-3fa58f68eaabbbf2', '//www.mi.com/bd/', 'pcpid', '']);">Bangladesh</a>
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

		<script type="text/javascript" src="home/js/checkout.js"></script>

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

		<div class="modal modal-hide fade modal-edit-address" id="J_modalEditAddress">
			<div class="modal-header">
				<span class="title">添加收货地址</span>
				<a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="0560c00546698a52" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-0560c00546698a52', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
			</div>
			<div class="modal-body">
				<div class="form-box clearfix">
					<div class="form-section form-name">
						<label class="input-label" for="user_name">姓名</label>
						<input class="input-text J_addressInput" id="J_addressNameInput" name="user_name" placeholder="收货人姓名" type="text">
					</div>
					<div class="form-section form-phone">
						<label class="input-label" for="user_phone">手机号</label>
						<input class="input-text J_addressInput" id="J_addressPhoneInput" name="user_phone" placeholder="11位手机号" type="text">
					</div>
					<div class="form-section form-four-address form-section-active">
						<input id="J_selectAddressTrigger" class="input-text J_addressInput" name="four_address" readonly="readonly" value="选择省 / 市 / 区 / 街道" placeholder="选择省 / 市 / 区 / 街道" type="text">
						<i class="iconfont"></i>
					</div>
					<div class="form-section form-address-detail">
						<label class="input-label" for="user_adress">详细地址</label>
						<textarea class="input-text J_addressInput" type="text" id="J_addressDetailInput" name="user_adress" placeholder="详细地址，路名或街道名称，门牌号"></textarea>
					</div>
					<div class="form-section form-zipcode">
						<label class="input-label" for="user_zipcode">邮政编码</label>
						<input class="input-text J_addressInput" id="J_addressZipcodeInput" name="user_zipcode" type="text">
					</div>
					<div class="form-section form-tag">
						<label class="input-label" for="user_tag">地址标签</label>
						<input class="input-text J_addressInput" id="J_addressTagInput" name="user_tag" placeholder="如&quot;家&quot;、&quot;公司&quot;。限5个字内" type="text">
					</div>

					<div class="form-section form-tip-msg clearfix" id="J_formTipMsg"></div>
				</div>

				<div class="select-address-wrapper hide" id="J_selectAddressWrapper">
					<span class="select-address-close">x</span>
					<div class="search-address-wrapper J_selectAddressItem" data-type="search" id="J_searchAddressWrapper">
						<div class="search-section">
							<i class="icon icon-search iconfont"></i>
							<input class="search-input" id="J_searchAddressInput" placeholder="输入街道、乡镇、小区或商圈名称" autocomplete="off" type="text">
							<span class="icon icon-del iconfont hide" id="J_searchAddressInputClear">×</span>
						</div>

						<div class="search-example">例如：北京 华润五彩城</div>

						<div class="loading hide">
							<div class="loader"></div>
						</div>

						<!-- 附近商圈 -->
						<div class="nearby-address hide" id="J_nearbyAddress">
							<div class="title">附近商圈</div>
							<ul class="list clearfix"></ul>
						</div>

						<!-- 搜索列表 -->
						<div class="search-address hide" id="J_searchAdress">
							<ul class="list clearfix"></ul>
						</div>

						<div class="no-result hide" id="J_noSearchResult">
							没有找到这个地方，
							<a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="select" data-stat-id="52f0eab0ed37b6cb" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-52f0eab0ed37b6cb', 'javascript:void0', 'pcpid', '']);">手动选择&gt;</a>
						</div>
						<div class="switch-type J_switchType">
							<a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="select" data-stat-id="5455f7005f97ce72" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-5455f7005f97ce72', 'javascript:void0', 'pcpid', '']);">手动选择地址&gt;</a>
						</div>
					</div>
					<div class="four-address-wrapper hide J_selectAddressItem" data-type="select">
						<div id="J_fourAddressWrapper">
							<div class="select-box clearfix" id="J_selectWrapper">
								<div class="select-first select-item J_select" data-init-txt="选择省份/自治区">选择省份/自治区</div>
								<div class="select-item J_select hide" data-init-txt="选择城市/地区"></div>
								<div class="select-item J_select hide" data-init-txt="选择区县"></div>
								<div class="select-last select-item J_select hide" data-init-txt="选择配送区域"></div>
							</div>
							<div class="options-box">
								<ul class="options-list J_optionsWrapper clearfix">
									<li class="option J_option" data-value="2" data-txt="北京">北京 </li>
									<li class="option J_option" data-value="3" data-txt="天津">天津 </li>
									<li class="option J_option" data-value="4" data-txt="河北">河北 </li>
									<li class="option J_option" data-value="5" data-txt="山西">山西 </li>
									<li class="option J_option" data-value="6" data-txt="内蒙古">内蒙古 </li>
									<li class="option J_option" data-value="7" data-txt="辽宁">辽宁 </li>
									<li class="option J_option" data-value="8" data-txt="吉林">吉林 </li>
									<li class="option J_option" data-value="9" data-txt="黑龙江">黑龙江 </li>
									<li class="option J_option" data-value="10" data-txt="上海">上海 </li>
									<li class="option J_option" data-value="11" data-txt="江苏">江苏 </li>
									<li class="option J_option" data-value="12" data-txt="浙江">浙江 </li>
									<li class="option J_option" data-value="13" data-txt="安徽">安徽 </li>
									<li class="option J_option" data-value="14" data-txt="福建">福建 </li>
									<li class="option J_option" data-value="15" data-txt="江西">江西 </li>
									<li class="option J_option" data-value="16" data-txt="山东">山东 </li>
									<li class="option J_option" data-value="17" data-txt="河南">河南 </li>
									<li class="option J_option" data-value="18" data-txt="湖北">湖北 </li>
									<li class="option J_option" data-value="19" data-txt="湖南">湖南 </li>
									<li class="option J_option" data-value="20" data-txt="广东">广东 </li>
									<li class="option J_option" data-value="21" data-txt="广西">广西 </li>
									<li class="option J_option" data-value="22" data-txt="海南">海南 </li>
									<li class="option J_option" data-value="23" data-txt="重庆">重庆 </li>
									<li class="option J_option" data-value="24" data-txt="四川">四川 </li>
									<li class="option J_option" data-value="25" data-txt="贵州">贵州 </li>
									<li class="option J_option" data-value="26" data-txt="云南">云南 </li>
									<li class="option J_option" data-value="27" data-txt="西藏">西藏 </li>
									<li class="option J_option" data-value="28" data-txt="陕西">陕西 </li>
									<li class="option J_option" data-value="29" data-txt="甘肃">甘肃 </li>
									<li class="option J_option" data-value="30" data-txt="青海">青海 </li>
									<li class="option J_option" data-value="31" data-txt="宁夏">宁夏 </li>
									<li class="option J_option" data-value="32" data-txt="新疆">新疆 </li>
								</ul>
								<ul class="options-list J_optionsWrapper clearfix hide"></ul>
								<ul class="options-list J_optionsWrapper clearfix hide"></ul>
								<ul class="options-list J_optionsWrapper clearfix hide"></ul>
							</div>
						</div>
						<div class="switch-type">
							<a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="search" data-stat-id="c619dea4aef9303e" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-c619dea4aef9303e', 'javascript:void0', 'pcpid', '']);"> 搜索地址快速定位&gt;</a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="javascript:void(0);" class="btn btn-primary" id="J_editAddressSave" data-stat-id="c45d9694ae1da920" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-c45d9694ae1da920', 'javascript:void0', 'pcpid', '']);">保存</a>
				<a href="#J_modalEditAddress" class="btn btn-gray" data-toggle="modal" data-stat-id="4e6498c55fcf3b67" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-4e6498c55fcf3b67', '#J_modalEditAddress', 'pcpid', '']);">取消</a>
			</div>
		</div>
	</body>

</html>