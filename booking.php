<?php

$conn = new mysqli("localhost", "root", "", "bus_booking");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $From = $_POST['From'];
    $To = $_POST['To'];
    $Date_of_Journey = $_POST['Date_of_Journey'];
    $No_of_Passengers = $_POST['No_of_Passengers'];

    $sql = "INSERT INTO bookings (from_city, to_city, travel_date, passengers)
            VALUES ('$From', '$To', '$Date_of_Journey', '$No_of_Passengers')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Booking Successful!</h2>";
        echo "<a href='booking.html'>Go Back Home</a>";
    } 
    else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>