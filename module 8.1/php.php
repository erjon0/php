<?php
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo $username;
    echo "<br>";
    echo $uassword; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
    <form action="php.php" method="get">

        <label for="username">Name:</label>
        <input type="text" id="username" name="username" placeholder="username">
        <label for="password">password:</label>
        <input type="password" id="password" name="password"placeholder="password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>