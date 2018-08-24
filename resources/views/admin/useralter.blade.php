@extends("common.index")
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
            <form class="layui-form" action="/admin/userupdate?uid={$users->uid}" method="post">
            	<table class="layui-table">
            	<tr>
            		<th style="text-align:right;">权限</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                       <select required="" name="auth">
		                       		<option value="0"
		                       			>请选择</option>
		                       		<option value="3"
		                       			{if ($users->auth) == 3}
		                       				selected
		                       			{/if}
		                       			>后台用户</option>
		                       		<option value="2"
		                       			{if ($users->auth) == 2}
		                       				selected
		                       			{/if}
		                       			>前台用户</option>
		                       </select>
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                        		请选择权限
		                    </div>
		                </div>
	                </td>
	            </tr>	
            	<tr>
            		<th style="text-align:right;">用户名</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="uname" required="" lay-verify="user" autocomplete="off" class="layui-input" value="{{$users->name}}" maxlength="11">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		输入6-20个字母、数字、下划线 
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <!--<tr>
	            	<th style="text-align:right;">密码</th>
	            	<td>
		                 <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="password" id="L_pass" name="upwd" required="" lay-verify="pwd" value="{$users->upwd}"
		                        autocomplete="off" class="layui-input">
		                    </div>
                   		 	<div class="layui-form-mid layui-word-aux">
                       		8到16个字符 大写,小写字母,数字(必须包含字母和数字)
                    	</div>
                </div>
	            	</td>
	            </tr>
	            <tr>
	            	<th style="text-align:right;">确认密码</th>
	            	<td>
	                <div class="layui-form-item">
	                    
	                    <div class="layui-input-inline">
	                        <input type="password" id="L_pass" name="repwd" required="" lay-verify="pass" autocomplete="off" class="layui-input">
	                    </div>
	                    <div class="layui-form-mid layui-word-aux">
	                        6到16个字符
	                    </div>
	                </div>
	            	</td>
	            </tr>
	            <tr>-->
	            	<th style="text-align:right;">联系电话</th>
		            <td>    
		            	<div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_repass" name="tel" required="" lay-verify="phone" autocomplete="off" class="layui-input" value="{{$users->age}}"> 
		                    </div>
		                </div>
		            </td>
	           	</tr>
	           	<tr>
	            	<th style="text-align:right;">性别</th>
		            <td>    
		            	<div class="layui-form-item">     
		                    <div class="">
		                        <input type="radio" id="L_repass" name="sex" required="" value="m" autocomplete="off" class="layui-input" {if ($users->sex) == 'm'}
		                       				checked
		                       			{/if}>男
		                        <input type="radio" id="L_repass" name="sex" required="" value="w" autocomplete="off" class="layui-input"{if ($users->sex) == 'w'}
		                       				checked
		                       			{/if}>女
		                        <input type="radio" id="L_repass" name="sex" required="" value="x" autocomplete="off" class="layui-input"{if ($users->sex) == 'x'}
		                       				checked
		                       			{/if}>保密
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
@endsection
