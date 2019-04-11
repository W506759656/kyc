<?php

namespace Leonis\Kyc\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KycRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'passport_id' => 'required',
            'passport_front' => 'required',
            'passport_back' => 'required',
            'passport_handheld' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名必填',
            'passport_id.required' => '身份证号必填',
            'passport_front.required' => '身份证正面必填',
            'passport_back.required' => '身份证背面必填',
            'passport_handheld.required' => '手持身份证照片',
        ];
    }
}
