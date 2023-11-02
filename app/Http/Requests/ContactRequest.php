<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'description' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام خود را وارد کنید.',
            'email.required' => 'ایمیل خود را وارد کنید.',
            'email.email' => 'فرمت ایمیل صحیح نمی باشد.',
            'description.required' => 'متن درخواست خود را وارد کنید.',
        ];
    }
}
