<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'txtTitle'           => 'required|unique:product,title',
            'txtSerial'          => 'unique:product,serial',
            'chkCategory'        => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required'           => 'Vui lòng nhập tên sản phẩm',
            'txtTitle.unique'             => 'Tên sản phẩm này đã tồn tại, vui lòng nhập tên khác',
            'txtSerial.unique'            => 'Mã Serial này đã tồn tại, vui lòng nhập mã khác',
            'chkCategory.required'        => 'Vui lòng chọn ít nhất 1 thể loại'
        ];
    }
}
