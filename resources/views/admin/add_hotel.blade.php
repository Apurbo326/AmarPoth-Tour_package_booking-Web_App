<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Add Hotel | AmarPoth Admin Dashboard">
    <title>Add Hotel | AmarPoth Admin Dashboard</title>
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
                <a href="/admin/dashboard/31">Dashboard</a>
                <a href="/admin/dashboard/31">Add Package</a>
                <a href="/admin/hotels">Add Hotel</a>
                <a href="#">Add Discount Coupon</a>
                <a href="#">View Bookings</a>
                <a href="#">Client Bookings</a>
                <a href="/">Logout</a>
            </nav>
            <footer>
                <p>&copy; 2024 AmarPoth. All Rights Reserved.</p>
            </footer>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Add New Hotel</h1>

            @if (session('success'))
                <div class="alert alert-success" style="padding-bottom: 20px">
                    {{ session('success') }}
                </div>
            @endif


            <form action="{{ route('admin.hotels.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="hotel_name">Hotel Name</label>
                    <input type="text" id="hotel_name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required>
                </div>
                <div class="form-group">
                    <label for="branch">Branch</label>
                    <input type="text" id="branch" name="branch">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit" class="btn">Add Hotel</button>
            </form>
        </div>
    </div>
</body>
</html>
