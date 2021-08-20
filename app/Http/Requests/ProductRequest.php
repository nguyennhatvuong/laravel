<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'title' => 'required|unique:products',
                    'slug'=>'required',
                    'cost_price'=>'required',
                    'on_price'=>'required',
                    'off_price'=>'required',
                    'type'=>'required',
                    'color'=>'required',
                    'size'=>'required',
                    'brand'=>'required',
                    'condition'=>'required',
                    'category'=>'required',
                    'photo'=>'required',
                    'detail'=>'required',
                    'description'=>'required',
                    'min'=>'required',
                    'max'=>'required',
                    
                ];
                break;
            
            default:
                return [
                    'title'=>'required|string|unique:products,title,' . $this->id,
                    'slug'=>'required',
                    'cost_price'=>'required',
                    'on_price'=>'required',
                    'off_price'=>'required',
                    'type'=>'required',
                    'size'=>'required',
                    'brand'=>'required',
                    'color'=>'required',
                    'condition'=>'required',
                    'category'=>'required',
                    'photo'=>'required',
                    'detail'=>'required',
                    'description'=>'required',
                    'min'=>'required',
                    'max'=>'required',
                    
                ];
                break;
        }
    }
    public function messages()
    {
        return [
            'required' => 'Vui lòng nhập :attribute',
            'unique' => ':attribute đã tồn tại',
            'after'=>'Ngày kết thúc phải sau ngày bắt đầu',

        ];
    }
    public function attributes()
    {
        return [
            'title' => 'tên sản phẩm',
            'cost_price'=>'giá vốn',
            'off_price'=>'giá website',
            'on_price'=>'giá cửa hàng',
            'min'=>'định mức tồn kho nhỏ nhất',
            'max'=>'định mức tồn kho lớn nhất',
            'brand'=>'thương hiệu',
            'condition'=>'tình trạng',
            'detail'=>'chi tiết',
            'type'=>'loại sản phẩm',
            'size'=>'kích cỡ',
            'color'=>'màu sắc',
            'description'=>'mô tả',
            'photo'=>'hình ảnh',
            'category'=>'danh mục',
        ];
    }
}
