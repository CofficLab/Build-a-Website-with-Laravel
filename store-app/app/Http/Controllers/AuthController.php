<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect with success message
            return redirect()->intended('/')->with('success', 'Logged in successfully!');
        }

        // Authentication failed, redirect back with error message
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    // Add registration method if needed
    public function register(Request $request)
{
    // Validation rules
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);

    // Create new user
    $user = User::create([
        'email' => $request->email,
        'password' => bcrypt($request->password), // Hash the password for security
    ]);

    // Automatically log in the newly registered user
    Auth::login($user);

    // Redirect to a new page or intended page
    return redirect()->intended('/');
}
}
