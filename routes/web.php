<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//  return view('home.index');
	
});
Route::get('/a',"Index@index");
Route::resource('/admin/login',"Admin\AdminLogin");
Route::resource('/admin/',"Admin\AdminLogin");
Route::get('/admin/error',function(){
	return view('admin.error');
});
Route::group(['middleware'=>'login'],function(){
	//后台管理添加
	Route::resource('/admin/adminuser',"Admin\Adminuser");
	//后台首页
	Route::get('/admin/index',function(){return view('admin.index');});
	//后台用户列表
	Route::resource('/admin/userlist',"Admin\Userlist");
	//后台用户添加
	Route::resource('/admin/adduser',"Admin\Useradd");
});
