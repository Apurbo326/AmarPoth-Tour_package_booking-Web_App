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
                <a href="/admin/dashboard/{{ $user->id }}">Add Package</a>
                <a href="/admin/add_hotel/">Add Hotel</a>
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
            <!-- Dashboard Heading -->
            <h1>Admin Dashboard</h1>

            <!-- Admin Name Display -->
            <p><b>{{ $user->name }}</b>, welcome to AmarPoth!</p>

            @if (session('success'))
                <div class="alert alert-success" style="padding-bottom: 20px">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Example: Add Package Form -->
            <h2>Add New Package</h2>

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
            <h2>Bookings List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Client</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luxury Bali</td>
                        <td>John Doe</td>
                        <td>2024-12-15</td>
                        <td>Confirmed</td>
                    </tr>
                    <tr>
                        <td>Romantic Paris</td>
                        <td>Jane Smith</td>
                        <td>2024-12-20</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Adventure Iceland</td>
                        <td>Emily Johnson</td>
                        <td>2024-12-18</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Relaxing Maldives</td>
                        <td>Michael Brown</td>
                        <td>2024-12-22</td>
                        <td>Cancelled</td>
                    </tr>
                    <tr>
                        <td>Romantic Paris</td>
                        <td>Amy Wilson</td>
                        <td>2024-12-25</td>
                        <td>Confirmed</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>