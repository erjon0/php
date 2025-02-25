<?php
$host = "localhost";
$user = "root";
$db = "db";
$pass = "";

try { 
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username = "John";
    $password = password_hash("mypassword", PASSWORD_DEFAULT); 

    $sql = "INSERT INTO user1 (firstname, password) VALUES ($username, $password)";
    
   

    echo "New record created successfully.";

} catch (Exception $e) {
   
    echo $e->getMessage();
}
?>