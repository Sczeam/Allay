<?php

function validate($email, $authCode)
{
    require 'db_conn.php';

    $query = "SELECT verificationCode FROM `user` WHERE email='$email' AND codeExpiryDate > now()";

    if ($email && $authCode) {
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();

        if ($result) {
            if ($result["verificationCode"] == $authCode) {
                // code is not expired and activated
                echo 1;
            } else {
                // code is not expired but wrong code
                echo 0;
            }
        } else {
            // code is expired
            echo -1;
        }
    }
}
