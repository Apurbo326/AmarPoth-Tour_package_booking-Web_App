<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore exciting travel packages with AmarPoth. Book your dream destinations with ease and convenience!">
    <title>AmarPoth | Login</title>
    <link rel="icon" href="/images/AmarPoth-Favicon.ico">
    <link rel="shortcut icon" href="/images/AmarPoth-Favicon.ico">
    <link rel="stylesheet" href="css/login.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <style>
        body p {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        h2 {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }

        a {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        label {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        button {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }
        /* Popup Styling */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .popup-overlay.active {
            display: block;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            text-align: center;
        }
        .popup.active {
            display: block;
        }
        .popup button {
            background: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }
        .popup button:hover {
            background: #000;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <h2>Login</h2>
            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <p style="color: red;">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>

        <p>Not have an account? <a href="/signup">Sign up</a></p>
    </div>

    <!-- Popup -->
    <div class="popup-overlay" id="popup-overlay"></div>
    <div class="popup" id="popup">
        <p id="popup-message"></p>
        <button onclick="closePopup()">OK</button>
    </div>

    <script>
        // Check for session message
        @if(session('success'))
            const message = @json(session('success'));
            showPopup(message);
        @endif

        function showPopup(message) {
            const overlay = document.getElementById('popup-overlay');
            const popup = document.getElementById('popup');
            const messageEl = document.getElementById('popup-message');

            messageEl.textContent = message;
            overlay.classList.add('active');
            popup.classList.add('active');
        }

        function closePopup() {
            const overlay = document.getElementById('popup-overlay');
            const popup = document.getElementById('popup');
            overlay.classList.remove('active');
            popup.classList.remove('active');
        }
    </script>
</body>
</html>
