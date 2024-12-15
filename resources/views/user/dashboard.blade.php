<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User Dashboard for AmarPoth">
    <title>AmarPoth | User Dashboard</title>
    <link rel="icon" href="{{ asset('images/AmarPoth-Favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/userdashboard.css') }}">
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
                <a href="/user/dashboard/{{ $user->id }}">Dashboard</a>
                <a href="#view_package">View Packages</a>
                <a href="#view_hotels">View Hotels</a>
                <a href="#purchased_packages">Purchased Packages</a>
                <a href="/">Logout</a>
            </nav>
            <footer>
                <p>&copy; 2024 AmarPoth. All Rights Reserved.</p>
            </footer>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>User Dashboard</h1>
            <p><b>{{ $user->name }}</b>, welcome to AmarPoth!</p>

            @if (session('success'))
                <div class="alert alert-success" style="padding-bottom: 20px">
                    {{ session('success') }}
                </div>
            @endif

            <h2 id="view_package">Available Packages</h2>
            <div class="packages">
                @foreach ($packages as $package)
                <div class="package-card">
                    @foreach($package->packageImages as $image)
                        <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->caption }}">
                        <p>{{ $image->caption }}</p>
                    @endforeach
                    <h3>{{ $package->name }}</h3>
                    <p>{{ $package->summary }}</p>
                    <p><strong>Price:</strong> {{ $package->price }} BDT</p>
                    <button class="btn" onclick="showPackageDetails({{ $package->id }})">Book Now</button>
                </div>
                @endforeach
            </div>

            <!-- Modal Structure -->
            <div id="package-modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h3>Book Package</h3>

                    <!-- Dynamic Package Information -->
                    <div>
                        <img id="modalImage" src="" alt="Package Image" style="width: 100%; height: auto;">
                    </div>
                    <div>
                        <h4 id="modalName">Package Name</h4>
                        <p id="modalDescription">Package Description</p>
                        <p><strong>Price:</strong> <span id="modalPrice"></span> BDT</p>
                        <p><strong>Start Point:</strong> <span id="modalStartPoint"></span></p>
                        <p><strong>End Point:</strong> <span id="modalEndPoint"></span></p>
                    </div>

                    <form action="{{ route('package.booking.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="package_id" id="package_id" value="">
                        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="created_date" id="created_date" value="{{ now() }}">
                        
                        <div>
                            <label for="payment_amount">Payment Amount (BDT):</label>
                            <input type="text" name="payment_amount" id="payment_amount" readonly>
                        </div>
                        
                        <div>
                            <label for="journey_date">Journey Date:</label>
                            <input type="date" name="journey_date" id="journey_date" required>
                        </div>
                        
                        <div>
                            <label for="bkash_account_number">bKash Account Number:</label>
                            <input type="text" name="bkash_account_number" id="bkash_account_number" required>
                        </div>
                        
                        <div>
                            <label for="transaction_id">Transaction ID:</label>
                            <input type="text" name="transaction_id" id="transaction_id" required>
                        </div>
                        
                        <button type="submit" class="btn">Confirm Booking</button>
                    </form>
                </div>
            </div>

            <!-- Add JavaScript -->
            <script src="{{ asset('js/userdashboard-popup.js') }}"></script>


            <h2 id="view_hotels">Available Hotels</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Branch</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->name }}</td>
                        <td>{{ $hotel->country }}</td>
                        <td>{{ $hotel->branch }}</td>
                        <td>{{ $hotel->address }}</td>
                        <td>{{ $hotel->mobile }}</td>
                        <td>{{ $hotel->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p style="text-align: center; padding: 10px;">You can manually book our partner hotels.</p>

            <h2 id="purchased_packages">Your Purchased Packages</h2>
            <table>
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Journey Date</th>
                        <th>Payment Amount</th>
                        <th>Transaction ID</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchased_packages as $purchase)
                    <tr>
                        <td>{{ $purchase->package->name }}</td>
                        <td>{{ $purchase->journey_date }}</td>
                        <td>{{ $purchase->payment_amount }} BDT</td>
                        <td>{{ $purchase->transaction_id }}</td>
                        <td>{{ $purchase->status->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>
