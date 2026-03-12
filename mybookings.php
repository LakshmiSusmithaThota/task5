<?php
session_start();
include "db.php";

$user=$_SESSION['user'];

$res=mysqli_query($conn,"
SELECT packages.title, bookings.status, bookings.booking_date
FROM bookings
JOIN packages ON bookings.package_id=packages.id
WHERE bookings.user_id=$user
");

?>

<h2>My Bookings</h2>

<?php

while($row=mysqli_fetch_assoc($res)){

echo "<p>";

echo "Package: ".$row['title']."<br>";
echo "Status: ".$row['status']."<br>";
echo "Date: ".$row['booking_date'];

echo "</p><hr>";

}

?>