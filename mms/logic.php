<?php 

session_start();

require_once ('config.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        echo "Username and password cannot be empty";
        exit;
    }else {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        
        $selectUser =$conn->query($sql);

        $selectUser-> bindParam("ss", $username, $password);

        $selectUser->execute ();

        $data= $selectUser->fetch(PDO::FETCH_ASSOC);

        if ($data==false) {
            echo "Invalid username or password";
            exit;
        } else {
            $_SESSION['id'] = $data['id'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['emri'] = $data['emri'];
            
            header("Location: dashbaord.php");


        } else {
            echo "Invalid username or password";
        }
    }
 