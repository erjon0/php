<?php
$dbname = "db2";
$host = "localhost";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected successfully";
}
catch(PDOException $e){
    echo "Connection failed: " ;
}
?> 