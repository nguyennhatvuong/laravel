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
            'required' => 'Vui l??ng nh???p :attribute',
            'unique' => ':attribute ???? t???n t???i',
            'after'=>'Ng??y k???t th??c ph???i sau ng??y b???t ?????u',

        ];
    }
    public function attributes()
    {
        return [
            'title' => 't??n s???n ph???m',
            'cost_price'=>'gi?? v???n',
            'off_price'=>'gi?? website',
            'on_price'=>'gi?? c???a h??ng',
            'min'=>'?????nh m???c t???n kho nh??? nh???t',
            'max'=>'?????nh m???c t???n kho l???n nh???t',
            'brand'=>'th????ng hi???u',
            'condition'=>'t??nh tr???ng',
            'detail'=>'chi ti???t',
            'type'=>'lo???i s???n ph???m',
            'size'=>'k??ch c???',
            'color'=>'m??u s???c',
            'description'=>'m?? t???',
            'photo'=>'h??nh ???nh',
            'category'=>'danh m???c',
        ];
    }
}
