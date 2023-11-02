<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPassword extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'exists:clients,email'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'ایمیل خود را وارد کنید.',
            'email.exists' => 'کاربری با این ایمیل ثبت نام نشده است.',
            'email.email' => 'فرمت ایمیل صحیح نمی باشد.',
        ];
    }
}
