<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Member; // ใช้ Model User หรือ Model ที่คุณใช้

class LoginController
{
    public function showLoginForm()
    {
        return view('auth.signin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:5|max:20',
        ]);
    
        $credentials = $request->only('username', 'password');
    
        $user = Member::where('username', $credentials['username'])->first();
    
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // การเข้าสู่ระบบสำเร็จ
            Auth::login($user);
    
            if ($user->urole == 'admin') {
                return redirect()->intended('adminhome');
            } else {
                return redirect()->intended('userhome.php');
            }
        } else {
            // การเข้าสู่ระบบล้มเหลว
            return redirect()->back()->withErrors(['error' => 'Username หรือรหัสผ่านไม่ถูกต้อง']);
        }
    }
}
