<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'uname'=>'required|regex:/^[a-zA-Z0-9_-]{4,16}$/|unique:users',
           'upwd'=>'required|regex:/^(\w){6,20}$/',
           'repwd'=>'required|regex:/^(\w){6,20}$/|same:upwd',
           'auth'=>'required',
           'tel'=>'required|regex:/^1[34578]\d{9}$/'
        ];
    }
	public function messages(){
		return [
			'uname.required'=>'用户名不能为空',
			'uname.regex'=>'用户名必须为4到16位(字母,数字,下划线,减号)',
			'uname.unique'=>'用户名已被注册请更换注册用户名',
			'upwd.required'=>'密码不能为空',
			'upwd.regex'=>'密码必须为6-20个字母、数字、下划线 ',
			'repwd.required'=>'重复密码不能为空',
			'repwd.regex'=>'重复密码必须为6-20个字母、数字、下划线 ',
			'repwd.same'=>'两次密码不相同 请重新输入',
			'auth.required'=>'请选择权限',
			'tel.required'=>'联系电话不能为空',
			'tel.regex'=>'联系电话格式错误',
		];
	}
}
