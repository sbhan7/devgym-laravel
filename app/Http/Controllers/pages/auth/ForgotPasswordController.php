<?php

namespace App\Http\Controllers\pages\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPassword;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('pages.auth.forgetPassword');
    }

    public function resetPassword(ForgetPassword $request)
    {
        $user = Client::query()->where('email', $request->email)->firstOrFail();
        $byte = random_bytes(8);
        $user->reset_link = $byte;
        $user->save();


        Mail::to(['email' => $user->email])->send(new \App\Mail\ForgetPassword($byte ));
        return view('pages.auth.reset_password');
    }
}
