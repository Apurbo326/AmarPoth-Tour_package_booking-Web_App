<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Dashboard for AmarPoth">
    <title>AmarPoth | Admin Dashboard</title>
    <link rel="icon" href="{{ asset('images/AmarPoth-Favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/admindashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/AmarPoth_-_Main_Logo-removebg-preview.png') }}" alt="AmarPoth Logo">
            </div>
            <nav>
                <a href="/admin/dashboard/{{ $user->id }}">Dashboard</a>
                <a href="#add_packages">Add Package</a>
                <a href="/admin/add_hotel/">Add Hotel</a>
                <a href="#viewbooking">View Bookings</a>
                <a href="/">Logout</a>
            </nav>
            <footer>
                <p>&copy; 2024 AmarPoth. All Rights Reserved.</p>
            </footer>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Dashboard Heading -->
            <h1>Admin Dashboard</h1>

            @if (session('success'))
                <div class="alert alert-success" style="padding-bottom: 20px">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Example: Add Package Form -->
            <h2 id="add_packages">Add New Package</h2>

            <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="package_name">Package Name</label>
                    <input type="text" id="package_name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="package_description">Package Description</label>
                    <textarea id="package_description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="package_summary">Package Summary</label>
                    <textarea id="package_summary" name="summary" required></textarea>
                </div>
                <div class="form-group">
                    <label for="package_price">Package Price</label>
                    <input type="number" id="package_price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="starting_point">Starting Point</label>
                    <input type="text" id="starting_point" name="starting_point" required>
                </div>
                <div class="form-group">
                    <label for="ending_point">Ending Point</label>
                    <input type="text" id="ending_point" name="ending_point" required>
                </div>
                <div class="form-group">
                    <label for="package_days">Package Days</label>
                    <input type="number" id="package_days" name="package_days" required>
                </div>
                <div class="form-group">
                    <label for="package_catagory_id">Package Category</label>
                    <select id="package_catagory_id" name="package_catagory_id" required>
                        <option value="1">Adventure</option>
                        <option value="2">Romantic</option>
                        <option value="3">Luxury</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="package_image">Package Image</label>
                    <input type="file" id="package_image" name="package_image" required>
                </div>
                
                <div class="form-group">
                    <label for="image_caption">Image Caption</label>
                    <input type="text" id="image_caption" name="image_caption" required>
                </div>

                <button type="submit" class="btn">Add Package</button>
            </form>

            <!-- Example: View Bookings Table -->
            <h2 id="viewbooking">Bookings List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Client</th>
                        <th>Booking Date</th>
                        <th>Journey Date</th>
                        <th>Bkash Account Number</th>
                        <th>Transaction ID</th>
                        <th>Status</th>
                        <th>Update Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->package_name }}</td>
                        <td>{{ $booking->client_name }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->created_date)->format('Y-m-d') }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->journey_date)->format('Y-m-d') }}</td>
                        <td>{{ $booking->bkash_account_number }}</td>
                        <td>{{ $booking->transaction_id }}</td>
                        <td>{{ $booking->booking_status }}</td>
                        <td>
                            <form action="{{ route('admin.updateStatus', ['bookingId' => $booking->id, 'userId' => $user->id]) }}" method="POST">
                                @csrf
                                <select name="status_id" required>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}" 
                                            @if ($status->id == $booking->status_id) selected @endif>
                                            {{ $status->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn-update">Update</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>