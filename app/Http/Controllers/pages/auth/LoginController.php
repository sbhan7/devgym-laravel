<?php

namespace App\Http\Controllers\pages\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $client = Client::query()->where('email', $request->email)->firstOrFail();
        if (\Hash::check($request->password, $client->password))
        {
            auth()->guard('client')->login($client);
        }
        else
        {
            throw ValidationException::withMessages(['password' => 'رمزعبور صحیح نمی باشد. ']);
        }
        return redirect()->route('home');

    }

    public function logout()
    {
        auth()->guard('client')->logout();
        return redirect()->route('home');
    }
}
