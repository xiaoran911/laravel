@extends("common.index")
@section('content')
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <style>
        	.pagination{
        		margin-left:40%;
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
            <form class="layui-form xbs" action="/admin/userlist" metchod="get" >
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <label class="layui-form-label xbs768">性别</label>
                    <div class="layui-input-inline xbs768">
                     <select name="sex">
		                	<option value="0">全部</option>
		                	<option value="m"
		                		
		                		selected
		                		
		                		>男</option>
		                	<option value="w"
		                		
                                    						selected
                                    			
		                		>女</option>
		                	<option value="x"
		                		 
                                    						selected
                                    				>保密</option>
              	  		</select>
                    </div>
                    <!--<div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>-->
                    <div class="layui-input-inline">
                      <input type="text" name="uname"  placeholder="请输入用户名" autocomplete="off" class="layui-input" value= >
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn" onclick="member_add('添加用户','/admin/adduser','600','500')"><i class="layui-icon">&#xe608;</i>添加</button><span class="x-right" style="line-height:40px">共有数据:条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th> ID</th>
                        <th> 用户名 </th>
                        <th>性别 </th>
                        <th> 权限</th>
                        <th>联系电话</th>
                        <th> 地址 </th>
                        <th>加入时间 </th>
                        <!--<th> 状态 </th>-->
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $v)
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>{{$v->id}}</td>
                        <td>{{$v->uname}}</td>
                        <td >{{$v->tel}}</td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td></td>
                        <!--<td class="td-status">
                        <span class="layui-btn layui-btn-normal layui-btn-mini">
                                		已启用
                        </span>-->
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="/admin/userlist/create?uid={{$v->id}}" 
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" onclick="return confirm('你确定要删除吗?');" href="/admin/userdel?uid=">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                @endforeach   
                </tbody>
            </table> 
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
       {{$user->render()}}
        <!-- 右侧主体结束 -->
    </div>
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
@endsection
</body>
</html>
