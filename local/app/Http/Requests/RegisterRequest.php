<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
           'name' => 'required',
           'email' => 'required|email|unique:vp_users,email',
           'password1' => 'required|min:6|max: 15',
           'password2' => 'required|min:6|max: 15',
        ];
    }
    public function messages(){
        return [
             'name.required' => 'Không được để trống Tên đăng nhập',   
             'email.required' => 'Không được để trống email',
             'email.email' => 'Không đúng định dạng email', 
             'email.unique' => 'Email đăng ký đã tồn tại',
             'password1.required' => 'Không được để trống password', 
             'password1.min' => 'Mật khẩu tối thiểu 6 ký tự', 
             'password1.max' => 'Mật khẩu tối đa 15 ký tự',  
             'password2.required' => 'Không được để trống password', 
             'password2.min' => 'Mật khẩu tối thiểu 6 ký tự', 
             'password2.max' => 'Mật khẩu tối đa 15 ký tự',  
        ];
    }
}
