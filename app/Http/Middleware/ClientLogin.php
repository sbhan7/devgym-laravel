<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ClientLogin
{

    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('client')->check()) {
            return $next($request);
        }
        else {
            return redirect()->route('login')->withErrors(['user_auth' => 'برای مشاهده ویدئو های دوره ابتدا وارد شوید یا ثبت نام کنید.']);
        }

    }
}
