<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomUpdateRequest extends FormRequest
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
            'name'=>'required|min:5|max:20',
            'price'=>'required',
            'size'=>'required',
            'capacity'=>'required',
            'bed'=>'required',
            'services'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng không để trống tên khu vực',
            'name.unique'=>'Phòng bạn nhập đã tồn tại',
            'name.min'=>'Vui lòng đặt tên từ 5 đến 20 ký tự',
            'name.max'=>'Vui lòng đặt tên từ 5 đến 20 ký tự',
            'price.required'=>'Vui lòng không để trống giá',
            'size.required'=>'Vui lòng không để trống giá',
            'capacity.required'=>'Vui lòng không để trống giá',
            'bed.required'=>'Vui lòng không để trống giá',
            'services.required'=>'Vui lòng không để trống giá',
        ];
    }
}
