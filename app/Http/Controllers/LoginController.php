<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }

    public function actionLogin(Request $request)
    {
        $tempUser = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($tempUser)) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        $user = Auth::user();

        if (!$user->active) {
            Auth::logout();
            toastr()->warning('Aktifkan akun Anda di email');
        }

        if ($user->email == 'admin@gmail.com') {
            return redirect('adminPage');
        } else {
            return redirect('home');
        }



    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
