<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'phone' => [],
            'email' => ['required', 'email'],
            'password' => ['min:8'],
            'password_confirm' => ['same:password'],
        ];
    }

    public function messages()
    {
        return [
            'password_confirm.required' => 'رمز عبور خود را مجددا وارد نمایید.',
            'email.required' => 'ایمیل خود را وارد کنید.',
            'name.required' => 'نام خود را وارد کنید.',
            'email.email' => 'فرمت ایمیل صحیح نمی باشد.',
            'password.min' => 'رمزعبور باید حداقل ۸ کاراکتر باشد.',
            'password_confirm.same' => 'تکرار رمزعبور با رمزعبور مطابقت ندارد.',
        ];
    }
}
