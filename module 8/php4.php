<?php
$host = "localhost";
$user = "root";
$db = "db";
$pass = "";

try { 
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

   $sql = " DROP TABLE user1";

    echo "New record DROPED successfully.";
    $pdo->exec($sql); 


} catch (Exception $e) {
   
    echo $e->getMessage();
}
?>