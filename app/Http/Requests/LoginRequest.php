<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'exists:clients,email'],
            'password' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'ایمیل خود را وارد کنید.',
            'email.exists' => 'کاربری با این ایمیل ثبت نام نشده است.',
            'email.email' => 'فرمت ایمیل صحیح نمی باشد.',
            'password.required' => 'رمزعبور خود را وارد کنید.',
        ];
    }
}
