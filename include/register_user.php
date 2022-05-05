<?php
require 'db_conn.php';

$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];

// hash password
$hashPassword = md5($password);

// Generate an authentication code (6 digits)
$authCode = random_int(100000, 999999);

// insert into "user" table
$query = "INSERT INTO `user` (`userId`, `name`, `email`, `password`, `mobileNo`, `address`, `registrationDate`, `verificationCode`, `codeExpiryDate`, `status`) VALUES (NULL, '$name', '$email', '$hashPassword', NULL, NULL, current_timestamp(), '$authCode', now() + INTERVAL 1 DAY, 'inactive')";
// $conn->exec($query);

echo "Registered";
