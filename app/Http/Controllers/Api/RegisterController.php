<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\MailSend;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mail;
use Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'no_telepon' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $str = Str::random(100);

        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'no_telepon' => $request->no_telepon,
            'password' => bcrypt($request->password),
            'verify_key' => $str,
        ]);

        $details = [
            'username' => 'Verifikasi Email',
            'website' => 'Klik link berikut untuk verifikasi email anda: ' . url('verify', $str),
            'datetime' => now()->toDateTimeString(),
            'url' => request()->getHttpHost() . '/register/verify/' . $str,
        ];

        Mail::to($request->email)->send(new MailSend($details));

        return response()->json(['message' => 'Registration successful. Check your email for verification.'], 201);
    }

    public function verify($verify_key)
    {
        $user = User::where('verify_key', $verify_key)->first();

        if (!$user) {
            return response()->json(['error' => 'Invalid verification key.'], 404);
        }

        $user->update([
            'active' => 1,
            'email_verified_at' => now(),
        ]);

        return response()->json(['message' => 'Email verification successful. Your account is now active.'], 200);
    }
}
