<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required|unique:users|min:8|max:20',
            'email'=>'required',
            'address'=>'required|max:50',
            'phoneNumber'=>'required|min:10|max:12',
            'password'=>'required|min:8|max:20',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng không để trống tên',
            'name.unique'=>'Tên bạn nhập đã tồn tại',
            'name.min'=>'Vui lòng đặt tên từ 8 đến 20 ký tự',
            'name.max'=>'Vui lòng đặt tên từ 8 đến 20 ký tự',
            'email.required'=>'Vui lòng không để trống email',
            'address.required'=>'Vui lòng không để trống diện tích phòng',
            'address.max'=>'Vui lòng nhập địa chỉ nhỏ hơn 50 ký tự',
            'phoneNumber.required'=>'Vui lòng không để trống số điện thoại',
            'phoneNumber.min'=>'Vui lòng nhập số điện thoại từ 10 đến 12 số',
            'phoneNumber.max'=>'Vui lòng nhập số điện thoại từ 10 đến 12 số',
            'password.required'=>'Vui lòng không để trống mật khẩu',
            'password.min'=>'Vui lòng nhập mật khẩu từ 8 đến 20 ký tự',
            'password.max'=>'Vui lòng nhập mật khẩu từ 8 đến 20 ký tự',
        ];
    }
}
