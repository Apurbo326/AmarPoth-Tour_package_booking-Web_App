<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use App\Models\PackageBooking;
use App\Models\Hotel; 
use Illuminate\Http\Request;

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

    public function userDashboard($userId)
    {
        $user = User::findOrFail($userId);
        $packages = Package::all();
        $purchasedPackages = PackageBooking::where('user_id', $userId)
            ->with(['package', 'status']) 
            ->get();

        // Fetch all hotels from the database
        $hotels = Hotel::all();  // Assuming you have a Hotel model

        return view('user.dashboard', [
            'user' => $user,
            'packages' => $packages,
            'purchased_packages' => $purchasedPackages,
            'hotels' => $hotels,  // Pass the hotels data to the view
        ]);
    }
}
