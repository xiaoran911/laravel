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
            <form class="layui-form" action="/admin/adduser" method="post">
            	@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <!--<li>{{ $error }}</li>-->
							<script>
								layer.msg('{{$error}}'); 
							</script>
			            @endforeach
			        </ul>
			    </div>
				@endif
            	<table class="layui-table" >
            	<tr>
            		<th style="text-align:right;">权限</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                       <select required="" name="auth">
		                       		<option value="0">请选择</option>
		                       		<option value="3">后台用户</option>
		                       		<option value="2">前台用户</option>
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
		                        <input type="text" id="L_email" name="uname" value="{{old('uname')}}"  autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		用户名必须为4到16位(字母,数字,下划线,减号)
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
	            	<th style="text-align:right;">密码</th>
	            	<td>
		                 <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="password" id="L_pass" name="upwd" value="{{old('upwd')}}"
		                        autocomplete="off" class="layui-input">
		                    </div>
                   		 	<div class="layui-form-mid layui-word-aux">
                       		密码必须为6-20个字母、数字、下划线 
                    	</div>
                </div>
	            	</td>
	            </tr>
	            <tr>
	            	<th style="text-align:right;">确认密码</th>
	            	<td>
	                <div class="layui-form-item">
	                    
	                    <div class="layui-input-inline">
	                        <input type="password" id="L_pass" name="repwd" value="{{old('repwd')}}" autocomplete="off" class="layui-input">
	                    </div>
	                    <div class="layui-form-mid layui-word-aux">
	                       密码必须为6-20个字母、数字、下划线 
	                    </div>
	                </div>
	            	</td>
	            </tr>
	            <tr>
	            	<th style="text-align:right;">联系电话</th>
		            <td>    
		            	<div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_repass" name="tel" value="{{old('tel')}}"  autocomplete="off" class="layui-input" maxlength="11">
		                    </div>
		                </div>
		            </td>
	           	</tr>
	           	<tr>
	            	<th style="text-align:right;">性别</th>
		            <td>    
		            	<div class="layui-form-item">     
		                    <div class="">
		                        <input type="radio" id="L_repass" name="sex"  value="m" autocomplete="off" class="layui-input" checked>男
		                        <input type="radio" id="L_repass" name="sex"  value="w" autocomplete="off" class="layui-input">女
		                        <input type="radio" id="L_repass" name="sex"  value="x" autocomplete="off" class="layui-input">保密
		                    </div>
		                </div>
		            </td>
	           	</tr>
		        <tr>
		            <td colspan="2" >
		                <div class="layui-form-item" style="margin-left:30%">
		                    <label for="L_repass" class="layui-form-label">
		                    </label>
		                    {{csrf_field()}}
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
