<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login () {
        return view ('login.login');
    }

    public function LoginProses (Request $request) {
            // Validate the input
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            // Check credentials
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                // Login successful
                return response()->json(['message' => 'Selamat Datang!']);
            } else {
                // Login failed
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
        
    }

    // User::where('id', $id)->update([
    //     'name' => $request->nama_lengkap,
    //     'email' => $request->email,
    //     'password' => Hash::make($request->password)
    // ]);
    // User::create([
    //     'name' => $request->nama_lengkap,
    //     'email' => $request->email,
    //     'password' => Hash::make($request->password)
    // ]);

    public function Logout () {
        Auth::logout();
        return redirect()->route('Login');
    }
}
