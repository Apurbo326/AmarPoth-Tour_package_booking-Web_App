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
    <link rel="stylesheet" href="css/welcome.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <!-- Custom font -->
    <style>
        body p {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        h1 {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }

        h2 {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }

        h3 {
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

        li {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        b {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }

        .text {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        /* General section styles */
        #packages {
            padding: 50px 0; /* Add padding for spacing */
            text-align: center; /* Center text */
        }

        #packages h2 {
            font-size: 2.5rem; /* Increase font size for the heading */
            color: #333; /* Dark color for text */
            margin-bottom: 30px; /* Space below the heading */
        }

        .package-cards {
            display: flex;
            flex-wrap: wrap; /* Wrap cards in case of small screen */
            justify-content: center; /* Center align the cards */
            gap: 20px; /* Space between the cards */
        }

        .package-card {
            background-color: #fff; /* White background for each card */
            border-radius: 8px; /* Rounded corners for the cards */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow around the cards */
            width: 300px; /* Set a fixed width for the cards */
            padding: 20px; /* Padding inside the cards */
            text-align: left; /* Left align the text */
            transition: transform 0.3s ease; /* Smooth transition on hover */
        }

        .package-card:hover {
            transform: translateY(-5px); /* Lift the card slightly on hover */
            box-shadow: 0px 0px 0px grey;
            -webkit-transition:  box-shadow .6s ease-out;
                box-shadow: .8px .9px 3px grey;
        }

        .package-card h3 {
            font-size: 1.8rem; /* Font size for the package name */
            margin-bottom: 15px; /* Space below the name */
        }

        .package-card p {
            font-size: 1rem; /* Standard font size for text */
            color: #555; /* Dark gray for the description text */
            line-height: 1.6; /* Line spacing for readability */
        }

        .package-card img {
            width: 100%; /* Make image fill the container */
            height: 200px; /* Set a fixed height for images */
            object-fit: cover; /* Ensure the image covers the area without distortion */
            border-radius: 8px; /* Rounded corners for images */
            margin-bottom: 10px; /* Space below the image */
        }

        .package-card .caption {
            font-size: 0.9rem; /* Smaller font size for captions */
            color: #888; /* Lighter color for captions */
            text-align: center; /* Center align captions */
        }
    </style>

</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">
            <img id="one" src="images/AmarPoth_-_Main_Logo-removebg-preview.png" alt="Main logo">
                <a href="/">
                    <img src="images/AmarPoth_-_Text_Logo-removebg-preview.png" alt="Text Logo">
                </a>
            </h1>
            <nav class="nav">
                <a href="/">Home</a>
                <a href="/packages">Packages</a>
                <a href="/contact">Contact</a>
                <a href="/signup">Login / Signup</a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Discover Your Next Adventure</h2>
            <p>Book your dream destination today!</p>
            
            <a href="#packages" class="button" style="--clr: #7808d0">
            <span class="button__icon-wrapper">
                <svg
                viewBox="0 0 14 15"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="button__icon-svg"
                width="10"
                >
                <path
                    d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                    fill="currentColor"
                ></path>
                </svg>

                <svg
                viewBox="0 0 14 15"
                fill="none"
                width="10"
                xmlns="http://www.w3.org/2000/svg"
                class="button__icon-svg button__icon-svg--copy"
                >
                <path
                    d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                    fill="currentColor"
                ></path>
                </svg>
            </span>
            Explore Our Popular Packages
            </a>

        </div>
    </section>

    <section id="packages" class="packages">
        <h2>Our Packages</h2>
        <span style="margin: 5px;"></span>
        <div class="package-cards">
            @foreach($packages as $package)
                <div class="package-card">
                    <h3>{{ $package->name }}</h3>
                    <p>{{ $package->description }}</p><br>
                    <!-- Iterate through package images -->
                    @foreach($package->packageImages as $image)
                    <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->caption }}" style="width: 200px; height: auto;">
                        <p>{{ $image->caption }}</p>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>


    </section>

    <section class="login-section">
        <div class="container">
            <h2>Login / Sign In to Purchase...</h2>
            
            <form action="/signup" method="get">
            <button type="submit">
                <span>Login / Sign In</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 74 74"
                    height="34"
                    width="34"
                >
                    <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                    <path
                        fill="black"
                        d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z"
                    ></path>
                </svg>
            </button>
        </form>

        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 AmarPoth. All Rights Reserved.</p>
    </footer>
</body>
</html>