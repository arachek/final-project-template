<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dock Times</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #343a40 !important;
            color: #fff;
        }

        .navbar-brand, .navbar-item {
            color: #ADD8E6 !important;
        }

        .container {
            margin-top: 50px;
        }

        .table {
            background-color: #fff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Port Jefferson Yacht Club</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

<div class="container">
    <h1 class="my-5">Dock Times</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Date</th>
            <th>Start Time</th>
            <th>End Time</th>
        </tr>
        </thead>
        <tbody id="dock-times-body">
        <!-- Data will be dynamically inserted here -->
        </tbody>
    </table>
</div>

<script src="https://unpkg.com/@supabase/supabase-js"></script>
<script>
    const { createClient } =  supabase
    supabase = createClient("https://yzimmbofcvyfirspzdqw.supabase.co", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Inl6aW1tYm9mY3Z5Zmlyc3B6ZHF3Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTM2Mzc3NjQsImV4cCI6MjAyOTIxMzc2NH0.34rXLJXTLIwjq9AYweVbbAELK8SOsxZ_kXuXr1bmbKo")

    // Fetch data from the database
    async function fetchDockTimes() {
        const { data, error } = await supabase
            .from('dockTimes')
            .select('*'); // Select all columns

        if (error) {
            console.error('Error fetching dock times:', error.message);
            return;
        }

        // Clear previous data
        const dockTimesBody = document.getElementById('dock-times-body');
        dockTimesBody.innerHTML = '';

        // Insert data into the table
        data.forEach(({ Date, startTime, endTime }) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${Date}</td>
                <td>${startTime}</td>
                <td>${endTime}</td>
            `;
            dockTimesBody.appendChild(row);
        });
    }

    // Fetch and display dock times when the page loads
    window.onload = fetchDockTimes;
</script>
</body>
</html>
