<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:1',
            'last_name' => 'required|min:1',
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ], [
            'first_name.required' => 'Nama depan wajib di isi',
            'last_name.required' => 'Nama belakang wajib di isi',
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Email wajib di isi dengan valid',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password Minimal 8 karakter',
        ]);

        $createData = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($createData) {
            return redirect()->route('login')->with('success', 'Berhasil melakukan registrasi, silahkan login!');
        } else {
            return redirect()->back()->with('error', 'Gagal melakukan registrasi, silahkan coba lagi!');
        }
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Email wajib di isi dengan valid',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password Minimal 8 karakter',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login Berhasil!');
        }

        return back()->with('error', 'Login gagal, pastikan email atau password benar')
                     ->onlyInput('email');
    }
}
