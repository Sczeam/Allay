<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "allay_ecommerce";

// Create a connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo json_encode("Connected successfully");
} catch (PDOException $e) {
    echo json_decode("Connection failed: " . $e->getMessage());
}
