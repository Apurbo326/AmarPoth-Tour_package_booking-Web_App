<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore exciting travel packages with AmarPoth. Book your dream destinations with ease and convenience!">
    <title>AmarPoth | Your Ultimate Travel Partner</title>
    <link rel="icon" href="/images/AmarPoth-Favicon.ico">
    <link rel="shortcut icon" href="/images/AmarPoth-Favicon.ico">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/signup.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <!-- Custom font -->
    <style>
        h1 {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }

        p {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>
<body>
    <h1>Welcome, {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Mobile: {{ $user->mobile }}</p>
</body>
</html>
