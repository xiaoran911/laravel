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
            <form class="layui-form" action="/admin/goodsave" method="post" enctype="multipart/form-data" >
            	<table class="layui-table" >
            	<tr>
            		<th style="text-align:right;">父类</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                       <select required="" name="cate_id">
		                       	<option value="0">请选择</option>
		                       	{foreach $cate as $k=>$v}
		                       	<?php
		                       		$num = substr_count($v->path,',')-1;
		                       	?>
		                       		<option  value="{$v->cid}">{:str_repeat('&nbsp;',2*$num)}---{$v->cname}</option>
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
            		<th style="text-align:right;">商品名称</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="gname" required="" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th style="text-align:right;">售货单价</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="price" required="" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th style="text-align:right;">库存数量</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="text" id="L_email" name="stock" required="" autocomplete="off" class="layui-input">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th style="text-align:right;">商品图片</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="file" id="L_email" name="gpic" required="" autocomplete="off" class="layui-input" value="">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th style="text-align:right;">商品详情图片</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <input type="file" id="L_email" name="detalis[]" required="" autocomplete="off" class="layui-input" value="">
		                        <input type="file" id="L_email" name="detalis[]" required="" autocomplete="off" class="layui-input" value="">
		                        <input type="file" id="L_email" name="detalis[]" required="" autocomplete="off" class="layui-input" value="">
		                        <input type="file" id="L_email" name="detalis[]" required="" autocomplete="off" class="layui-input" value="">
		                        <input type="file" id="L_email" name="detalis[]" required="" autocomplete="off" class="layui-input" value="">
		                        <input type="file" id="L_email" name="detalis[]" required="" autocomplete="off" class="layui-input" value="">
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		请按照详情图顺序上传
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th style="text-align:right;">商品描述</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <textarea name="gdesc" style="resize:none;color:#000000;background:rgba(255,255,255,0.1);border:0px;"></textarea>
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
            		<th style="text-align:right;">筛选条件</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                        <textarea name="cate" style="resize:none;color:#000000;background:rgba(255,255,255,0.1);border:0px;"></textarea>
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                       		筛选条件直接请用,隔开 列如 64GB,128G,
		                    </div>
		                </div>
	                </td>
	            </tr>
	            <tr>
	            	<th style="text-align:right;">状态</th>
		            <td>    
		            	<div class="layui-form-item">     
		                    <div class="">
		                        <input type="radio" id="L_repass" name="status" required="" value="1" autocomplete="off" class="layui-input" checked>上架
		                        <input type="radio" id="L_repass" name="status" required="" value="2" autocomplete="off" class="layui-input">新品
		                        <input type="radio" id="L_repass" name="status" required="" value="0" autocomplete="off" class="layui-input">下架
		                        <input type="radio" id="L_repass" name="status" required="" value="3" autocomplete="off" class="layui-input">热卖
		                    </div>
		                </div>
		            </td>
	           	</tr>
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
