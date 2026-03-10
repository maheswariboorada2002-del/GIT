<?php
$conn = new mysqli("localhost","root","","travel_users");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo " Login Successful!";
} else {
    echo " Invalid username or password";
}

$conn->close();
?>