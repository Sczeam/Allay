<?php
require 'db_conn.php';

$email = $_POST["email"];

// Generate an authentication code (6 digits)
$authCode = random_int(100000, 999999);

$query = "UPDATE `user` SET `verificationCode` = '$authCode', `codeExpiryDate` = now() + INTERVAL 1 DAY WHERE `user`.`email` = $email";

try {
    $stmt = $conn->prepare($query);
    $stmt->execute();
    echo $stmt->rowCount();
} catch (PDOException $e) {
    echo $e->getMessage();
}
