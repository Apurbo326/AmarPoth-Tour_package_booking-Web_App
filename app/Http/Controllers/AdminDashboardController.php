<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index($id)
    {
        // Fetch the admin by ID
        $user = User::where('id', $id)->where('user_role', 'admin')->first();

        if (!$user) {
            abort(404, 'Admin not found.');
        }

        // Pass the $user data to the view
        return view('admin.dashboard', compact('user'));
    }
}
