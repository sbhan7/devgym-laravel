<?php

namespace App\Http\Controllers\pages\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
       $client = Client::query()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
       auth()->guard('client')->login($client);
       return redirect()->route('home');
    }

}
