<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'profile_id' => 'required',
            'payment_method_id' => 'required',
        ];

    }
    public function messages()
    {
        return [
            'required' => 'Vui lòng nhập :attribute',
        ];
    }
    public function attributes()
    {
        return [
            'profile_id' => 'địa chỉ',
            'payment_method_id' => 'phương thức thanh toán',
        ];
    }
}
