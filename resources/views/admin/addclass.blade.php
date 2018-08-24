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
            <form class="layui-form" action="/admin/classsave" method="post">
            	<table class="layui-table" >
            	<tr>
            		<th style="text-align:right;">父类</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                       <select required="" name="pid">
		                       	<option value="0">请选择</option>
		                       	{foreach $cate as $k=>$v}
		                       	<?php
		                       		$num = substr_count($v->path,',')-1;
		                       		isset($_GET['cid'])?$_GET['cid']:$_GET['cid']='';
		                       	?>
		                       		<option  value="{$v->cid}"
		                       			{if $v->cid == $_GET['cid'] }selected{/if}>{:str_repeat('&nbsp;',2*$num)}---{$v->cname}</option>
                                    {/foreach}
		                       </select>
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                        		请选择父类
		                    </div>
		                </div>
	                </td>
	            </tr>	
            	<tr>
            		<th style="text-align:right;">类名</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="cname" required="" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th><input style="width:100px;float:right" type="text" id="L_email" name="catems" required="" autocomplete="off" class="layui-input" placeholder="筛选条件"></th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="cate" required="" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       	再输入条件时请在条件1后加一个英文状态下的逗号最后也要加比如 条件1,条件2,	
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th><input style="width:100px;float:right" type="text" id="L_email" name="catemss" required="" autocomplete="off" class="layui-input" placeholder="筛选条件2"></th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="cates" required="" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		再输入条件时请在条件1后加一个英文状态下的逗号最后也要加比如 条件1,条件2,
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
