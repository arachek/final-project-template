<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Port Jefferson Yacht Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }

        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            color: #ADD8E6;
        }

        .container {
            margin-top: 20px;
        }

        #contact-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #contact-details h1 {
            color: #343a40;
        }

        #contact-details p {
            color: #6c757d;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/#">Port Jefferson Yacht Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="our-story">Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contact</a>
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

<div class="container mt-5">
    <div id="contact-details">
        <h1>Contact Us</h1>
        <p>Thank you for your interest in the Port Jefferson Yacht Club. Please feel free to contact us using the information below:</p>
        <ul>
            <li><strong>Address:</strong> 123 Yacht Club Lane, Port Jefferson, NY 11777</li>
            <li><strong>Phone:</strong> (555) 123-4567</li>
            <li><strong>Email:</strong> info@portjeffyachtclub.com</li>
        </ul>
    </div>
</div>

<footer class="bg-dark text-light text-center py-4">
    <p>&copy; <?php echo date("Y"); ?> Port Jefferson Yacht Club</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
