<?php
session_start();
include "../db.php";

$res=mysqli_query($conn,"
SELECT users.name, packages.title, bookings.status, bookings.booking_date
FROM bookings
JOIN users ON bookings.user_id=users.id
JOIN packages ON bookings.package_id=packages.id
");

?>

<h2>All Bookings</h2>

<?php

while($row=mysqli_fetch_assoc($res)){

echo "<p>";

echo "User: ".$row['name']."<br>";
echo "Package: ".$row['title']."<br>";
echo "Status: ".$row['status']."<br>";
echo "Date: ".$row['booking_date'];

echo "</p><hr>";

}

?>