<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvinceRequest extends FormRequest
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
            'name'=>'required|unique:province|alpha|min:5|max:20',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng không để trống tên khu vực',
            'name.unique'=>'Khu vực bạn nhập đã tồn tại',
            'name.alpha'=>'Vui lòng đặt tên chữ không đặt số',
            'name.min'=>'Vui lòng đặt tên từ 5 đến 20 ký tự',
            'name.max'=>'Vui lòng đặt tên từ 5 đến 20 ký tự',
        ];
    }
}
