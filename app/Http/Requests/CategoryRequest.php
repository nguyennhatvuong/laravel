<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                    'title' => 'required|unique:categories',
                    'slug'=>'required',
                    'parent_id'=>'required',
                    'photo'=>'required',
                    'status'=>'required'
                    
                ];
                break;
            
            default:
                return [
                    'title'=>'required|string|unique:categories,title,' . $this->id,
                    'slug'=>'required',
                    'photo'=>'required',
                    'parent_id'=>'required',
                    'status'=>'required'
                ];
                break;
        }
    }
    public function messages()
    {
        return [
            'required' => 'Vui lòng nhập :attribute',
            'unique' => ':attribute đã tồn tại',

        ];
    }
    public function attributes()
    {
        return [
            'title' => 'tên danh mục',
            'summary'=>'mô tả',
            'status'=>'trạng thái',
            'photo'=>'hình ảnh',
            'parent_id'=>'danh mục cha',
        ];
    }
}
