<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|unique:branch|alpha|min:5|max:20',
            'email'=>'required',
            'address'=>'required|min:10',
            'phoneNumber'=>'required|min:10|max:12',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng không để trống tên chi nhánh',
            'name.unique'=>'Tên chi nhánh bạn nhập đã tồn tại',
            'name.min'=>'Vui lòng đặt tên từ 5 đến 20 ký tự',
            'name.max'=>'Vui lòng đặt tên từ 5 đến 20 ký tự',
            'email.required'=>'Vui lòng đặt đúng định dạng chữ @ chữ . chữ',
            'address.required' =>'Vui lòng không để trống địa chỉ',
            'address.min' =>'Vui lòng nhập địa chỉ lớn hơn 10 ký tự',
            'phoneNumber.required'=>'Vui lòng không để trống số điện thoại',
            'phoneNumber.min'=>'Vui lòng nhập số điện thoại lớn hơn 9 số',
            'phoneNumber.max'=>'Vui lòng nhập số điện thoại nhỏ hơn 13 số',
        ];
    }
}
