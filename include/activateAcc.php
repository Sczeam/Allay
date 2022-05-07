<?php
require 'db_conn.php';
require 'functions.php';

$authCode = $_POST["authCode"];
$email = $_POST["email"];

if ($email && $authCode) {
    $status = validate($email, $authCode);
    if ($status === 1) {
        $query1 = "UPDATE `user` SET `status` = 'active' WHERE `user`.`email` = $email";
        $stmt1 = $conn->prepare($query1);
        $stmt1->execute();
        echo $stmt1->rowCount();
    } else if ($status === 0) {
        echo 0;
    } else if ($status === -1) {
        echo -1;
    }
}
