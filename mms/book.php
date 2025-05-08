<?php

session_start();

include_once 'config.php';

$user_id = $_SESSION['user_id'];

$nr_tickets = $_POST['nr_tickets'];

$data = $_POST['date'];

$time = $_POST['time'];

$sql = "SELECT INTO bookings(user_id, movie_id, nr_tickets, date, time) VALUES (:user_id, :movie_id, :nr_tickets, :date, :time)";

$insertBookings = $db->prepare($sql);
$insertBookings->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$insertBookings->bindParam(':movie_id', $movie_id, PDO::PARAM_INT); 
$insertBookings->bindParam(':nr_tickets', $nr_tickets, PDO::PARAM_INT);
$insertBookings->bindParam(':date', $data, PDO::PARAM_STR);
$insertBookings->bindParam(':time', $time, PDO::PARAM_STR);
$insertBookings->execute();

header('Location: home.php');

?>
