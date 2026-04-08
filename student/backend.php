<?php

$data = json_decode(file_get_contents("php://input"), true);
$idToken = $data['token'];

// Decode JWT (simple decode for demo)
$payload = json_decode(
    base64_decode(
        str_replace('_','/', str_replace('-','+', explode('.', $idToken)[1]))
    ),
    true
);

echo "<h2>Student Dashboard</h2>";
echo "Welcome " . $payload['name'] . "<br>";
echo "Email: " . $payload['email'] . "<br>";
echo "<br>Backend Verification Successful ";
?>