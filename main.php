<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    $roomType = $_POST["room_type"];

    // In a real-world scenario, you would typically store this information in a database.
    // For simplicity, we'll just display the booking details.

    // Display booking details
    echo "<h2>Booking Details</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Check-In Date:</strong> $checkin</p>";
    echo "<p><strong>Check-Out Date:</strong> $checkout</p>";
    echo "<p><strong>Room Type:</strong> $roomType</p>";
}
?>
