<?php

include_once 'config.php';

$id = $_GET['id'];
$sql = "UPDATE bookings SET status = 'declined' WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

header('Location: bookings.php');

?>
