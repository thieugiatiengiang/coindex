<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'txtName' => 'required',
            'chkRole' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'txtName.required' => 'Vui lòng nhập tên vai trò',
            'chkRole.required' => 'Vui lòng chọn ít nhất 1 vai trò',
        ];
    }
}
