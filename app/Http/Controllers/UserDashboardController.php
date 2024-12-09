<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDashboardController extends Controller
{
    public function index($id)
    {
        $user = User::where('id', $id)->where('user_role', 'user')->first();

        if (!$user) {
            abort(404, 'User not found.');
        }

        return view('user.dashboard', compact('user'));
    }
}
