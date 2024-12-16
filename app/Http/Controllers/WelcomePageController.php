<?php

namespace App\Http\Controllers;

use App\Models\WelcomePackage;
use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    public function index()
    {
        // Fetch last 4 packages with their first image
        $packages = WelcomePackage::with(['images' => function ($query) {
            $query->limit(1); // Fetch only the first image for each package
        }])
        ->latest('id') // Order by the most recent
        ->take(4) // Limit to 4 packages
        ->get();

        return view('welcome', compact('packages'));
    }
}
