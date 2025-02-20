<?php
$host = "localhost";
$user = "root";
$pass = "";

try { 
    $conn = new PDO("mysql:host=$host", $user, $pass);
    echo "Connected to MySQL successfully.\n";
}
catch (Exception $e) {
    echo "Failed to connect to MySQL: " . $e->getMessage();
}
?>