<?php

namespace app\controllers;


class ReservationController
{
    public function submitReservation()
    {
        // Logic to handle reservation submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $date = $_POST["date"];
            $time = $_POST["time"];

            // Insert reservation into database
            // Example using PDO (assuming you have established a database connection)
            $dsn = 'mysql:host=localhost;dbname=mydatabase';
            $username = 'username';
            $password = 'password';
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            try {
                $pdo = new PDO($dsn, $username, $password, $options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }

            $sql = "INSERT INTO reservations (date, time) VALUES (:date, :time)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['date' => $date, 'time' => $time]);

            // Optionally, you can redirect the user to a thank you page or display a success message
            // header("Location: /thank-you.php");
            // exit;
        }
    }

    // Other methods for managing reservations can be added here
}
