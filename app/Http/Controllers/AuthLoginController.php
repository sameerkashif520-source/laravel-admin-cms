<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthLoginController extends Controller
{
    function showLogin()
    {
        return view('admin.auth.login');
    }

    function showRegister()
    {
        return view('admin.auth.register');
    }

    function login(Request $req)
    {
        $req->validate([
            'email' => ['required', 'email', 'max:50'],
            'password' => ['required', 'min:3', 'max:6']
        ], [
            // Email messages
            'email.required' => 'Email field must be filled',
            'email.email' => 'Email must be correct (e.g., john12@example.com)',
            'email.max' => 'Email must not exceed 50 characters',
            // Password messages
            'password.required' => 'Password field must be filled',
            'password.min' => 'Password must be atleast 3 characters long',
            'password.max' => 'Password must not exceed 6 characters'
        ]);

        $email = Admin::where('email', $req['email'])->first();
        $pass = Admin::where('password', $req['password'])->first();

        if ($email && $pass) {
            session([
                'admin_id' => $email->id,
                'admin_logged_in' => true
            ]);

            if ($req->has('remember')) {
                $token = bin2hex(random_bytes(32));
                $email->remember_token = $token;
                $email->save();

                setcookie('admin_remember', $token, time() + (86400 * 30), '/');
                setcookie('admin_email', $email->email, time() + (86400 * 30), '/');
            }

            $req->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('sweet_success', 'Account logged in successfully!');
        } else {
            return redirect()->route('admin.login')->with('sweet_error', 'Your credentials are wrong!');
        }
    }

    function register(Request $req)
    {
        $req->validate([
            'email' => ['required', 'email', 'max:50', 'unique:admins,email'],
            'password' => ['required', 'min:3', 'max:6', 'confirmed'],
            'password_confirmation' => ['required']
        ], [
            // Email messages
            'email.required' => 'Email field must be filled',
            'email.email' => 'Email must be correct (e.g., john12@example.com)',
            'email.max' => 'Email must not exceed 50 characters',
            'email.unique' => 'This email exists, try some other',
            // Password messages
            'password.required' => 'Password field must be filled',
            'password.min' => 'Password must be atleast 3 characters long',
            'password.max' => 'Password must not exceed 6 characters',
            'password.confirmed' => "Password doesn't match",
            'password_confirmation.required' => 'Password confirmation must be filled'
        ]);

        $admin = Admin::create([
            'email' => $req['email'],
            'password' => $req['password']
        ]);

        if ($admin) {
            session([
                'admin_id' => $admin->id,
                'admin_logged_in' => true
            ]);

            $req->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('sweet_success', 'Account created successfully!');
        }
    }

    function logout(Request $req)
    {
        session()->forget(['admin_id', 'admin_logged_in']);
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect()->route('admin.login')->with('sweet_logout', 'You have been logged out');
    }
}
