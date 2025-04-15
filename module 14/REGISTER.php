<?php
include_once 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $password = password_hash($password, PASSWORD_DEFAULT);
}

    if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($password)) {
        echo 'Please fill in all fields';
        return;
    }
    else {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
    }
    if ($stmt->rowCount() > 0) {
        echo 'Username already exists';
        header('refresh:2;url=singup.php');
    }
    else {
        $sql = "INSERT INTO users (name, surname, username, email, password) VALUES (:name, :surname, :username, :email, :password)";
        $insert = $db->prepare($sql);

        $insert->bindParam(':name', $name);
        $insert->bindParam(':surname', $surname);
        $insert->bindParam(':username', $username);
        $insert->bindParam(':email', $email);
        $insert->bindParam(':password', $password);
        $insert->execute();
        echo 'Registration successful';
        header('refresh:2;url=login.php');
   
}

?>