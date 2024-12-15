<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageBookingController extends Controller
{
    public function storeBooking(Request $request)
    {
        // Get the data from the request
        $package_id = $request->input('package_id');
        $user_id = $request->input('user_id');
        $payment_amount = $request->input('payment_amount');
        $journey_date = $request->input('journey_date');
        $bkash_account_number = $request->input('bkash_account_number');
        $transaction_id = $request->input('transaction_id');
        $status_id = 1; // Set default status (you can change this as per your requirements)
        $created_date = now();

        // Insert data into the package_booking table
        DB::insert('
            INSERT INTO package_booking (package_id, user_id, payment_amount, journey_date, bkash_account_number, transaction_id, status_id, created_date)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ', [
            $package_id,
            $user_id,
            $payment_amount,
            $journey_date,
            $bkash_account_number,
            $transaction_id,
            $status_id,
            $created_date
        ]);

        // Return a response or redirect (example)
        return redirect()->back()->with('success', 'Package booking successful!');
    }
}
