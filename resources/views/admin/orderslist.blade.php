@extends("common.index")
@section('content')
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <style>
        	.pagination{
        		margin-left:50%;
        	}
        	.pagination>li{
        		margin:20px 5px;
        		font-size: 20px;
        		text-align: center;
        		float:left;
        	}
        	.pagination>li>a:onclick{
        		color: red;
        	}
        </style>
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="/admin/orders" metchod="get" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <label class="layui-form-label xbs768">订单状态</label>
                    <div class="layui-input-inline xbs768">
                     <select name="status">
		                	<option value="0" {if empty($_GET['status']) || $_GET['status'] == '0'}
		                		selected
		                		{/if} >全部</option>
		                	<option value="1" {if !empty($_GET['status']) and $_GET['status'] == '1'}
		                		selected
		                		{/if}>待发货</option>
		                	<option value="2" {if !empty($_GET['status']) and $_GET['status'] == '2'}
		                		selected
		                		{/if}>已发货</option>
		                	<option value="3" {if !empty($_GET['status']) and $_GET['status'] == '3'}
		                		selected
		                		{/if}>交易完成</option>
		                	<option value="4" {if !empty($_GET['status']) and $_GET['status'] == '4'}
		                		selected
		                		{/if}>交易取消</option>
              	  		</select>
                    </div>
                    <!--<div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>-->
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <span class="x-right" style="line-height:40px">共有数据:{$num}条</span>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>订单ID</th>
                        <th>商品名称 </th>
                        <!--<th>类别 </th>-->
                        <th>单价 </th>
                        <th>数量</th>
                        <th>总价 </th>
                        <th>商品图片 </th>
                        <th>状态</th>
                        <th>购买账号</th>
                        <th>收货人</th>
                        <th>收货地址</th>
                        <th>联系电话</th>
                        <th>下单时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                {foreach $orders as $k=>$v}
                    <tr>
                    	{foreach $v->detail as $kk=>$vv}{/foreach}
                        <td>{$v->oid}</td>
                        <td>{$vv->good->gname}</td>
                        <!--<td >{}</td>-->
                        <td >{$vv->good->price}</td>
                        <td >{$v->num}</td>
                        <td >{$v->price}</td>
                        <td ><img height="100px" width="100px"src="/static/uploads/{$vv->good->gpic}"/></td> 
                        <td >{if $v->status == 1 }
                        		待发货
                        	{elseif $v->status == 2 }
                        		待收货
                        	{elseif $v->status == 3 }
                        		交易成功
                        	{elseif $v->status == 4 }
                        	交易取消
                        	{/if}</td>
 						<td >{$v->user->uname}</td>
 						<td >{$v->rec}</td>
 						<td >{$v->addr}</td>
 						<td >{$v->tel}</td>
 						<td >{:date('Y-m-d H:s:i',$v->create_at)}</td>
                        <!--<td class="td-status">
                        <span class="layui-btn layui-btn-normal layui-btn-mini">
                                		已启用
                        </span>-->
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="/admin/ordersalter?oid={$v->oid}" 
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" onclick="return confirm('你确定要删除吗?');" href="/admin/ordresdel?oid={$v->oid}">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>  
                {/foreach}
                </tbody>
            </table> 
           
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
       
        <!-- 右侧主体结束 -->
    </div> {$orders:render()|raw}
    <!-- 中部结束 -->
    
    <!-- 页面动态效果 -->
    <script>

        layui.use(['laydate'], function(){
          laydate = layui.laydate;//日期插件

          //以上模块根据需要引入
          //

          var start = {
            min: laydate.now()
            ,max: '2099-06-16 23:59:59'
            ,istoday: false
            ,choose: function(datas){
              end.min = datas; //开始日选好后，重置结束日的最小日期
              end.start = datas //将结束日的初始值设定为开始日
            }
          };
          
          var end = {
            min: laydate.now()
            ,max: '2099-06-16 23:59:59'
            ,istoday: false
            ,choose: function(datas){
              start.max = datas; //结束日选好后，重置开始日的最大日期
            }
          };
          
          document.getElementById('LAY_demorange_s').onclick = function(){
            start.elem = this;
            laydate(start);
          }
          document.getElementById('LAY_demorange_e').onclick = function(){
            end.elem = this
            laydate(end);
          }
          
        });

        //批量删除提交
         function delAll () {
            layer.confirm('确认要删除吗？',function(index){
                //捉到所有被选中的，发异步进行删除
                layer.msg('删除成功', {icon: 1});
            });
         }
         /*用户-添加*/
        function member_add(title,url,w,h){
            x_admin_show(title,url,w,h);
        }
        /*用户-查看*/
        function member_show(title,url,id,w,h){
            x_admin_show(title,url,w,h);
        }

         /*用户-停用*/
        function member_stop(obj,id){
            layer.confirm('确认要停用吗？',function(index){
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                $(obj).remove();
                layer.msg('已停用!',{icon: 5,time:1000});
            });
        }

        /*用户-启用*/
        function member_start(obj,id){
            layer.confirm('确认要启用吗？',function(index){
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
                $(obj).remove();
                layer.msg('已启用!',{icon: 6,time:1000});
            });
        }
        // 用户-编辑
        function member_edit (title,url,id,w,h) {
            x_admin_show(title,url,w,h); 
        }
        /*密码-修改*/
        function member_password(title,url,id,w,h){
            x_admin_show(title,url,w,h);  
        }
        /*用户-删除*/
        function member_del(obj,id){
            layer.confirm('确认要删除吗？',function(index){
                //发异步删除数据
                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
            });
        }
        </script>
        <script>
        //百度统计可去掉
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
</body>
</html>
@endsection
