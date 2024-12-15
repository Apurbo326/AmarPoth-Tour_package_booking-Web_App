<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    // AdminDashboardController.php

    public function index($id)
    {
        // Fetch the admin by ID
        $user = User::where('id', $id)->where('user_role', 'admin')->first();

        if (!$user) {
            abort(404, 'Admin not found.');
        }

        // Fetch bookings data
        $bookings = DB::table('package_booking')
            ->join('package', 'package_booking.package_id', '=', 'package.id')
            ->join('user', 'package_booking.user_id', '=', 'user.id')
            ->join('status', 'package_booking.status_id', '=', 'status.id')
            ->select(
                'package_booking.*',
                'package.name as package_name',
                'user.name as client_name',
                'status.name as booking_status',
                'package_booking.journey_date',
                'package_booking.bkash_account_number',
                'package_booking.transaction_id'
            )
            ->get();

        // Fetch all statuses
        $statuses = DB::table('status')->get();

        // Pass the user, bookings, and statuses data to the view
        return view('admin.dashboard', compact('user', 'bookings', 'statuses'));
    }

    public function updateStatus(Request $request, $bookingId, $userId)
    {
        // Validate the request
        $request->validate([
            'status_id' => 'required|exists:status,id', // Ensure the status_id exists in the status table
        ]);
    
        // Update the status in the package_booking table
        DB::table('package_booking')
            ->where('id', $bookingId)
            ->update([
                'status_id' => $request->status_id,
            ]);
    
        // Redirect back to the admin dashboard with the success message
        return redirect()->route('admin.dashboard', ['id' => $userId])
                         ->with('success', 'Booking status updated successfully!');
    }
    

}
