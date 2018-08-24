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
            <form class="layui-form" action="/admin/updatepwd" method="post">
            	<table class="layui-table" >	
            	<tr>
            		<th style="text-align:right;">原密码</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="oldpwd" required="" lay-verify="pwd" autocomplete="off" class="layui-input" >
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		输入6-20个字母、数字、下划线 
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
	            	<th style="text-align:right;">密码</th>
	            	<td>
		                 <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_pass" name="upwd" required="" lay-verify="pwd"
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
	                        <input type="text" id="L_pass" name="repwd" required="" lay-verify="pass" autocomplete="off" class="layui-input">
	                    </div>
	                    <div class="layui-form-mid layui-word-aux">
	                        8到16个字符
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
@endsection
