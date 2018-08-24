@extends('common/index')
@section('content')
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
            <form class="layui-form" action="/admin/usersave" method="post">
            	<table class="layui-table" >
            	<tr>
            		<th style="text-align:right;">管理员名称</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="username" required="" lay-verify="username" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		输入6-20个字母、数字、下划线 
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
	            	<th style="text-align:right;">权限</th>
	            	<td id="admin">
		               <div class="layui-form-item">
		                    <div class="layui-input-inline" >
		                       <select required=""  name="auth"  >
		                       		<option value="0">请选择</option>
		                       		<option value="1">普通管理员</option>
		                       		<option value="2">一级管理员</option>
		                       		<!--<option value="3">用户模块</option>
		                       		<option value="2">订单模块</option>
		                       		<option value="2">广告模块</option>
		                       		<option value="2">商品模块</option>
		                       		<option value="2">分类模块</option>
		                       		<option value="2">广告模块</option>
		                       		<option value="2">网站配置</option>
									<option value="2">优惠券模块</option>-->
		                       </select>
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                        		请选择管理员的权限
		                    </div>
		                </div>
	                </td>
	            </tr>
				<tr style="display:none" id="admins">
	            	<th style="text-align:right;">普通管理模块</th>
	            	<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                       <select required="" name="auths">
		                       		<option value="0">请选择</option>		                       		
		                       		<option value="1">用户模块</option>
		                       		<option value="2">订单模块</option>
		                       		<option value="3">广告模块</option>
		                       		<option value="4">商品模块</option>
		                       		<option value="5">分类模块</option>
		                       		<option value="6">广告模块</option>
		                       		<option value="7">网站配置</option>
									<option value="8">优惠券模块</option>
		                       </select>
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                        		请选择管理员的权限
		                    </div>
		                </div>
	                </td>
	            </tr>
				<tr style="display:none" id="adminsd">
	            	<th style="text-align:right;">一级管理模块</th>
	            	<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                       <select required="" name="authss">
		                       		<option value="0">请选择</option>		                       		
		                       		<option value="1">用户模块</option>
		                       		<option value="2">订单模块</option>
		                       		<option value="3">广告模块</option>
		                       		<option value="4">商品模块</option>
		                       		<option value="5">分类模块</option>
		                       		<option value="6">广告模块</option>
		                       		<option value="7">网站配置</option>
									<option value="8">优惠券模块</option>
		                       </select>
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                        		请选择管理员的权限
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
		                        添加
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
	<script>
	$("#admin").mouseleave(function(){
		dd=$(this).find('select').val();
		// $("#admins").css('display','table-row');
		// alert(dd);
		switch(dd){
			case '0':
			$("#admins").css('display','none');
			$("#adminsd").css('display','none');
			break;
			case '1':
			$("#admins").css('display','table-row');
			$("#adminsd").css('display','none');
			break;
			case '2':
			$("#adminsd").css('display','table-row');
			$("#admins").css('display','none');
			break;
		}
	})
	</script>
@endsection