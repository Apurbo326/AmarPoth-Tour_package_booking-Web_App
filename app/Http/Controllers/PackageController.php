<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageImage;

class PackageController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'summary' => 'required|string',
            'price' => 'required|numeric',
            'starting_point' => 'required|string',
            'ending_point' => 'required|string',
            'package_days' => 'required|integer',
            'package_catagory_id' => 'required|integer',
            'package_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image_caption' => 'required|string|max:255',
        ]);

        // Insert data into `package` table
        $packageId = Package::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'summary' => $request->summary,
            'price' => $request->price,
            'starting_point' => $request->starting_point,
            'ending_point' => $request->ending_point,
            'package_days' => $request->package_days,
            'package_catagory_id' => $request->package_catagory_id,
        ]);

        // Handle the uploaded image
        if ($request->hasFile('package_image')) {
            $imagePath = $request->file('package_image')->store('package_images', 'public');

            // Insert data into `package_image` table
            PackageImage::insert([
                'package_id' => $packageId,
                'image' => $imagePath,
                'caption' => $request->image_caption,
            ]);
        }

        return redirect()->back()->with('success', 'Package and image added successfully.');
    }
}
