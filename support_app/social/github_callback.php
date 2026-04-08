<?php

$client_id = "Ov23liEiHAUjam2XjcfH";
$client_secret = "1d0350cfa278dfaedb416a7daf9fb0c17d1e0927";

$code = $_GET['code'];

$token_url = "https://github.com/login/oauth/access_token";

$post = [
    "client_id" => $client_id,
    "client_secret" => $client_secret,
    "code" => $code
];

$ch = curl_init($token_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json"]);

$response = curl_exec($ch);
$data = json_decode($response, true);

$access_token = $data['access_token'];

// Get user info
$user_url = "https://api.github.com/user";

$ch = curl_init($user_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: token $access_token",
    "User-Agent: PHP-App"
]);

$user_response = curl_exec($ch);
$user = json_decode($user_response, true);

echo "<h2>GitHub Login Successful</h2>";
echo "Username: " . $user['login'] . "<br>";
echo "GitHub ID: " . $user['id'] . "<br>";
echo "<br>Social Login Working ";

?>