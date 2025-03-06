<?php
require "php.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];

    // Prepare SQL and bind parameters
    $sql = "INSERT INTO users (name, email, username) VALUES (:name, :email, :username)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);

    // Execute the statement
    if($stmt->execute()){
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
} else {
    echo "No data";
}
?>