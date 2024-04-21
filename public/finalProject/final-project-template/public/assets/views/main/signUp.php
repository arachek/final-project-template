<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .hero.is-primary {
            background-color: #343a40;
            color: #fff;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand, .navbar-item {
            color: #ADD8E6 !important;
        }

        .navbar-burger {
            color: #fff;
        }

        .section {
            margin-top: 50px;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
        }

        .footer a {
            color: #ADD8E6 !important;
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
                <li class="nav-item active">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">Contact</a>
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


<section class="section container">
    <h1 class="title" id="aboutus">About us</h1>
    <h2 class="subtitle">
        Welcome to the Port Jefferson Yacht Club! We were first founded in 1882 with the goal of providing a community for boaters on the North shore of Long Island. Home to one of the greatest beaches in the world, Port Jefferson will provide a beautiful getaway for you and your family.
    </h2>
</section>
<hr>
<section class="section container">
    <h1 class="title" id="ourteam">Our Team</h1>
    <h2 class="subtitle">
        Our team is made to create the most luxurious experience for you and your family. Our team of experts in the nautical industry will make sure that your stay in Port Jefferson will be well spent. Please enter your information below if you would like to learn more about any of our services. Have a great day!
    </h2>
</section>
<hr>
<section class="section container">
    <form name="contact" id="contact-form">
        <h1 class="title" id="contact">Contact</h1>
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input required class="form-control" type="text" placeholder="Your Name" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" required placeholder="Email input" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label" for="subject">Subject</label>
            <select name="subject" class="form-select">
                <option value="">Select a subject</option>
                <option value="Boat Rental">Boat Rental</option>
                <option value="Membership Interest">Membership Interest</option>
                <option value="Docking">Docking</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea required class="form-control" placeholder="Your Message" name="message"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</section>

<footer class="bg-dark text-light text-center py-4">
    <p>&copy; 2024 Port Jefferson Yacht Club</p>
</footer>

<script src="https://unpkg.com/@supabase/supabase-js"></script>
<script>
    const { createClient } =  supabase
    supabase = createClient("https://yzimmbofcvyfirspzdqw.supabase.co", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Inl6aW1tYm9mY3Z5Zmlyc3B6ZHF3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTM2Mzc3NjQsImV4cCI6MjAyOTIxMzc2NH0.34rXLJXTLIwjq9AYweVbbAELK8SOsxZ_kXuXr1bmbKo")

    const form = document.querySelector('#contact-form')
    form.addEventListener('submit', async (event) => {
        event.preventDefault()

        const formInputs = form.querySelectorAll('input, select, textarea')

        let submision = {}

        formInputs.forEach(element => {
            const { value, name } = element
            if (value) {
                submision[name] = value
            }
        })

        const { error } = await supabase.from('Users').insert([submision], { returning: 'minimal'})

        if (error) {
            alert('There was an error please try again')
        } else {
            alert('Thanks for contacting us')
        }

        formInputs.forEach(element => element.value = '')

    })
</script>
</body>
</html>
