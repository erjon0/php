<?php

$user = 'root';
$pass = '';
$server = 'localhost';
$dbname = 'mms';

try {
    $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


?>
