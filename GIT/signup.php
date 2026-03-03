<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->mydatabase;
$collection = $db->users;

if(isset($_POST['signup'])){

    $collection->insertOne([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);

    echo "Signup Successful!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>

<h2>Signup</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="signup" value="Signup">
</form>

</body>
</html>