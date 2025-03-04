<?php
$server = "localhost ";
$userneame = "root";
$password = "";
$dbname = "db";

try {
    $conection = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
}
 catch (Exception $e) {
    echo "Connection failed: ";
}
?>