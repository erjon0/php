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
    
    $sql = "ALTER TABLE user1 DROP COLUMN email ";
    echo "New record DROPED successfully.";
    $pdo->exec($sql); 


} catch (Exception $e) {
   
    echo $e->getMessage();
}
?>