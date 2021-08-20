<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required|digits:10',
            'province'=>'required',
            'district'=>'required',
            'ward'=>'required',
            'address'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Vui lòng nhập :attribute',
            'digits' => ':attribute không đúng định dạng',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'họ và tên',
            'phone' => 'số điện thoại',
            'province'=>'tỉnh, thành phố',
            'district'=>'quận, huyện',
            'ward'=>'phường, xã',
            'address'=>'địa chỉ cụ thể',
        ];
    }
}
