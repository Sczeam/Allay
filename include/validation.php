<?php
require 'db_conn.php';

$authCode = $_POST["authCode"];
$email = $_POST["email"];

$query = "SELECT verificationCode FROM `user` WHERE email='$email' AND codeExpiryDate > now()";

if ($email && $authCode) {
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();

    if ($result) {
        if ($result["verificationCode"] == $authCode) {
            echo "verified";
            return true;
        } else {
            echo "wrong code";
        }
    } else {
        echo "expired";
    }
}
