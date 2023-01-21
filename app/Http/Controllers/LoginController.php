<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'user'=>['required', 'string'],
            'password' => ['required', 'string']
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return redirect()->intended()->with('otro', 'You are logged in');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login')->with('otro', 'You are logged out!');
    }
}
