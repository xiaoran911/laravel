@extends("common.index")
@section('content')
    <!-- 中部开始 -->
    <style type="text/css">
    	th{
    		width:30%;
    	}
    	textarea{
    		resize:none;
    		color:#000000;
    		background:rgba(255,255,255,0.1);
    		border:0px
    	}
    </style>
        <div class="wrapper">
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/admin/ordresupdate?oid={$orders->oid}" method="post" enctype="multipart/form-data" >
            	<table class="layui-table" >
            	<tr>
            		<th style="text-align:right;">父类</th>
            		<td>
		                <div class="layui-form-item">
		                    <div class="layui-input-inline">
		                       <select required="" name="status" >
		                       		<option value="1" {if $orders->status == 1} selected {/if}>待发货</option>
		                       		<option value="2" {if $orders->status == 2} selected {/if}>待买家收货</option>
		                       		<option value="3" {if $orders->status == 3} selected {/if}>交易完成</option>
		                       		<option value="4" {if $orders->status == 4} selected {/if}>订单取消</option>
		                       </select>
		                    </div>
		                    <div class="layui-form-mid layui-word-aux">
		                        		当前状态
		                    </div>
		                </div>
	                </td>
	            </tr>	
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
