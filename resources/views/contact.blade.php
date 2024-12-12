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

        h4 {
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

    /* General Contact Section Styling */
    #contact {
        padding: 80px 0;
        background-color: #fff; /* White background for contrast */
        color: #333; /* Dark text for readability */
        font-family: Arial, sans-serif;
    }

    #contact h2 {
        text-align: center;
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333; /* Dark text */
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Contact Information */
    .contact-info {
        background-color: #f9f9f9; /* Light gray background for the contact box */
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-info:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .contact-info h3 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #333; /* Dark text */
        font-weight: bold;
        text-transform: uppercase;
    }

    .contact-info p {
        font-size: 1rem;
        margin-bottom: 15px;
    }

    .contact-info strong {
        font-weight: 600;
    }

    /* Social Links Styling */
    .social-links {
        margin-top: 20px;
        text-align: center;
    }

    .social-links h4 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
    }

    .social-links a {
        color: #333; /* Dark text color */
        text-decoration: none;
        margin-right: 20px;
        font-size: 1.2rem;
        transition: color 0.3s ease;
        padding-left: 10px;
        padding-right: 5px;
    }

    .social-links a:hover {
        color: #555; /* Lighter gray for hover effect */
    }

    /* Google Map Section */
    .map {
        text-align: center;
        margin-top: 50px;
    }

    .map h3 {
        font-size: 1.8rem;
        margin-bottom: 30px;
        color: #333;
        font-weight: bold;
        text-transform: uppercase;
    }

    .map iframe {
        max-width: 100%;
        height: 400px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }

    .map iframe:hover {
        transform: scale(1.05);
    }

    /* Responsive Design */
    @media (max-width: 1120px) {
        .container {
            display: grid;
        }
        #contact h2 {
            font-size: 2.5rem;
        }

        .contact-info {
            padding: 25px;
        }

        .map iframe {
            width: 100%;
            height: 300px;
        }
    }

    @media (max-width: 480px) {
        .container {
            display: grid;
        }
        #contact {
            padding: 60px 0;
        }

        #contact h2 {
            font-size: 2rem;
        }

        .contact-info {
            padding: 20px;
        }

        .map iframe {
            height: 250px;
        }
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

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Info</h2>
        
            <!-- Contact Information -->
            <div class="contact-info">
                <h3>Our Office</h3>
                <p><strong>Address:</strong> House no. 827, F block, Afroza Begum Road, Bashundhara R/A, Dhaka, Bangladesh</p>
                <p><strong>Phone:</strong> +880 1797 531431</p>
                <p><strong>Email:</strong> support@amarpoth.com</p>

                <div class="social-links">
                    <h4>Follow Us:</h4>
                    <a href="#" target="_blank">Facebook</a> | 
                    <a href="#" target="_blank">Twitter</a> |
                    <a href="#" target="_blank">Instagram</a>
                </div>
            </div>

            <!-- Google Map -->
            <div class="map">
                <h3>Find Us On The Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1824.9489784602804!2d90.43388727417012!3d23.82222739819552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73930f2c32d%3A0x5ed11efd18ac14b0!2sHouse%20827!5e0!3m2!1sen!2sus!4v1734011222926!5m2!1sen!2sus" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 AmarPoth. All Rights Reserved.</p>
    </footer>
</body>
</html>