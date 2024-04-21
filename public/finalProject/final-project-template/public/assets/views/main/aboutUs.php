<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story - Port Jefferson Yacht Club</title>
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

        #our-story {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #our-story h1 {
            color: #343a40;
        }

        #our-story p {
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
                <li class="nav-item active">
                    <a class="nav-link" href="our-story">Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sign-up">Sign Up</a>
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
    <div id="our-story">
        <h1>Our Story</h1>
        <p>Welcome to the Port Jefferson Yacht Club! We were first founded in 1882 with the goal of providing a community for boaters on the North shore of Long Island. Home to one of the greatest beaches in the world, Port Jefferson will provide a beautiful getaway for you and your family.</p>
        <p>Here, you can find all of your boating needs. We are a tight-knit group of members that love to explore Long Island's coast. Please reach out to us to become a member, rent boats, or learn more about our organization</p>
    </div>
</div>

<footer class="bg-dark text-light text-center py-4">
    <p>&copy; <?php echo date("Y"); ?> Port Jefferson Yacht Club</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
