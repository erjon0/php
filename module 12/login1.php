<?php
include_once('config.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo 'Please fill in all fields';
        header('refresh:2;url=login.php');
    } else {
        $sql = "SELECT * FROM users WHERE username = :username";
        $insert = $db->prepare($sql);
        $insert->bindParam(':username', $username);
        $insert->execute();
    }
    
    
}
?>