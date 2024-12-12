<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        if ($user && $user->password === $request->password) {
            // Check user role and redirect to appropriate dashboard
            if ($user->user_role === 'admin') {
                return redirect()->route('admin.dashboard', ['id' => $user->id])
                                 ->with('success', 'Welcome to the admin dashboard!');
            } elseif ($user->user_role === 'user') {
                return redirect()->route('user.dashboard', ['id' => $user->id])
                                 ->with('success', 'Welcome to your user dashboard!');
            }
        }

        // If credentials are invalid
        return back()->withErrors(['error' => 'Invalid email or password.'])->withInput();
    }
}