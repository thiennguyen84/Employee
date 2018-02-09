<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
            //
            'email'=>'required|email|unique:employees',
            'avata'=>'image|required'
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Email đã có người sử dụng',
            'email.required'=>'Chưa nhập email',
            'email.email'=>'Không đúng định dạng email',
            'avata.image' => 'Avata không phải ảnh',
            'avata.required'=> 'Chưa chọn avata'
        ];
    }
}
