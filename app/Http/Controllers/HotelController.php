<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function create()
    {
        return view('admin.add_hotel'); // Make sure the path matches the location of your form
    }
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'branch' => 'nullable|string|max:255',
            'address' => 'required|string',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        // Insert the data into the hotel table
        Hotel::create([
            'name' => $validated['name'],
            'country' => $validated['country'],
            'branch' => $validated['branch'],
            'address' => $validated['address'],
            'mobile' => $validated['mobile'],
            'email' => $validated['email'],
        ]);

        // Redirect with success message
        return redirect('/admin/hotels')->with('success', 'Hotel added successfully!');
    }
}
