<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCartRequest extends FormRequest
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
            'quantity'=>'required|numeric|min:1|max:5',
            'slug'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'vui lòng nhập :attribute',
            'unique' => ':attribute đã tồn tại',
            'min'=>':attribute không nhỏ hơn 1',
            'max'=>':attribute không lớn hơn 5',
            'numeric'=>':attribute phải là dạng số',

        ];
    }
    public function attributes()
    {
        return [
            'size' => 'kích thước',
            'quantity' => 'số lượng',
        ];
    }
}
