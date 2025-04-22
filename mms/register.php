<?php
include_once ('config.php');

if (isset($_POST['submit'])) {
    $name= $_POST['emri'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['password'];
    $password = $_POST['tempPass,PASSWORD_DEFAULT'];
    $tempConfirmPass = $_POST['confirm_password'];
    $confirm_password =password_hash ['tempConfirmPass,PASSWORD_DEFAULT'];
   
    if (empty($name) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit;
    }else 
     $sql = "INSERT INTO users (name, username, email, password) VALUES (:name, :username, :email, :password)";
     $insertsql = $db->prepare($sql);
    
     $insertsql->bindParam(':name', $name);
     $insertsql->bindParam(':username', $username); 
        $insertsql->bindParam(':email', $email);
        $insertsql->bindParam(':password', $password);
        $insertsql->bindParam(':confirm_password', $confirm_password);
        $insertsql->execute();

        echo "Registration successful!";
       
        header('Location: login.php'); 
    }


    // Check if the username already exists
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->rowCount() > 0) {
        echo "Username already exists. Please choose a different one.";
        exit;
    }

    // Insert the new user into the database
    $stmt = $db->prepare("INSERT INTO users (username, password, email, phone, address, city, state, zip) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt->execute([$username, password_hash($password, PASSWORD_BCRYPT), $email, $phone, $address, $city, $state, $zip])) {
        echo "Registration successful!";
        header('Location: login.php');
        exit;
    } else {
        echo "Registration failed. Please try again.";
    }
}

?>x