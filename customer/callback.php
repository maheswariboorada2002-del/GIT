<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $credential = $_POST['credential'];

    $payload = json_decode(
        base64_decode(
            str_replace('_','/', str_replace('-','+', explode('.', $credential)[1]))
        ),
        true
    );

    echo "<h2>Login Successful</h2>";
    echo "Welcome " . $payload['name'] . "<br>";
    echo "Email: " . $payload['email'] . "<br>";
    echo "<br><a href='index.php'>Logout</a>";
}
?>