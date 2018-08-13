<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMovieRequest extends FormRequest
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
            'img' => 'image',
            'url' => 'required',
            'details' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Không được để trống tên',
            'url.required' => 'Không được để trống url',
            'details.required' => 'Không được để trống thông tin tri tiết', 
            'img.image' => 'Lỗi ảnh upload !',
        ];
    }
}
