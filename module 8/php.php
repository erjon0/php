<?php
$host = "localhost";
$user = "root";
$db = "db";
$pass = "";

try { 
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Connected to MySQL successfully.\n";

    $sql = "CREATE TABLE user1 (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL
    )";
    $pdo->exec($sql);
    echo "Table created successfully.\n";

} catch (Exception $e) {
    echo "Failed to connect to MySQL: " . $e->getMessage();
}
?>