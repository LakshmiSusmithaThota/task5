<?php
session_start();
include "db.php";

$user=$_SESSION['user'];
$package=$_GET['id'];

mysqli_query($conn,"INSERT INTO bookings(user_id,package_id,status)
VALUES($user,$package,'Booked')");

echo "Booking Successful";
?>