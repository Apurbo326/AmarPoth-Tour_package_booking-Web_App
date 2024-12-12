<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageImage;

class PackageControllerView extends Controller
{
    // Display a listing of all packages along with their images
    public function showPackages()
    {
        // Get all packages with their related images
        $packages = Package::with('packageImages')->get();  // Fetch packages and related images

        // Return the view with the packages data
        return view('packages', compact('packages'));  // Ensure you're passing 'packages'
    }

}
