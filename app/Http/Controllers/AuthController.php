<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('main');
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Неправильный email или пароль']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
