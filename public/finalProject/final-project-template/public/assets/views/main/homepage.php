<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            position: relative;
            background-image: url('https://soneva-offload-media-library.storage.googleapis.com/wp-content/uploads/2023/10/30143630/MicrosoftTeams-image-99.png'); /* Replace 'path/to/your/image.jpg' with your image URL */
            background-size: cover;
            background-position: bottom;
            color: #fff;
            padding: 100px 0;
            margin-bottom: 0;
        }

        .jumbotron::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .container {
            position: relative;
            z-index: 1;
        }

        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            color: #ADD8E6;
        }
        #about-us {
            background-color: #212529; /* Dark background color */
            color: #fff; /* Text color */
            padding: 100px 0;
        }

        #about-us h2 {
            color: #fff; /* Header text color */
        }

        #about-us p {
            color: #ccc; /* Paragraph text color */
        }
        #map {
            height: 400px; /* Adjust the height as needed */
            margin-top: 50px; /* Add some margin for spacing */
        }

        /* Map and text section */
        #map-section {
            background-color: #f8f9fa; /* Light background color */
            padding: 100px 0;
        }

        #map-section .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #map-section h2 {
            margin-right: 50px; /* Add some margin between map and text */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Port Jefferson Yacht Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="our-story">Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sign-up">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dock-times">Docking Availability</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Welcome to Port Jefferson Yacht Club</h1>
        <p class="lead">Experience the luxury of yachting with us</p>
    </div>
</div>

<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Welcome to the Port Jefferson Yacht Club, where you can find all of your boating needs. We are a tight-knit group of members that love to explore Long Island's coast. Please reach out to us to become a member, rent boats, or learn more about our organization</p>
            </div>
            <div class="col-md-6">
                <img src="https://img.marinas.com/v2/775c06d981dcec3b6ea51d3186c9c90daf43483faf0c80816ef031592319e253.jpg" alt="Picture of PJ Harbor">
            </div>
        </div>
    </div>
</section>
<section id="map-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Explore Our Area</h2>
                <p>Port Jefferson was originally a community built on the ship-building industry. Today, it hosts plenty of small businesses and nautical events. Our harbor is home to one of the best views of the Long Island sunset. Stop by the Port Jefferson Yacht club for an evening view of the harbor.</p>
            </div>
            <div class="col-md-6">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.429438276222!2d-73.06929182392784!3d40.95017032300077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e84068a7e7107b%3A0x4ab51a5c4ac042dd!2sPort%20Jefferson%20Yacht%20Club!5e0!3m2!1sen!2sus!4v1713316704219!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reservation">
    <div class="container">
        <h2>Reserve Dock Space</h2>
        <form>
            <div class="mb-3">
                <label for="date">Select Date:</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="mb-3">
                <label for="time">Select Time:</label>
                <input type="time" id="time" name="time">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<footer class="bg-dark text-light text-center py-4">
    <p>&copy; 2024 Port Jefferson Yacht Club</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

