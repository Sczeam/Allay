<?php
require 'db_conn.php';
if ($_POST["email"] && $_POST["password"]) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $query = "SELECT name FROM user WHERE email = '$email' AND password = '$password' AND status = 'active'";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();

    if ($result && $stmt->rowCount() == 1) {
        $_SESSION["user"] = $result["name"];
        $responseArr = array($stmt->rowCount(), $result["name"]);
        echo json_encode($responseArr);
    } else {
        $responseArr = array($stmt->rowCount(), "");
        echo json_encode($responseArr);
    }
}
