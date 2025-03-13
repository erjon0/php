<?php
include_once("php.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (username, email, surname, age) VALUES (:name, :email, :surname, :age)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':age', $age, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: data.php");
    exit();
}
?>