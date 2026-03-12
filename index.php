<?php
include "db.php";
?>

<h2>Tour Packages</h2>

<a href="mybookings.php">My Bookings</a> |
<a href="logout.php">Logout</a>

<br><br>

<input type="text" id="search" placeholder="Search location">

<div id="result"></div>

<script src="assets/js/search.js"></script>

<?php

$res=mysqli_query($conn,"SELECT * FROM packages");

while($row=mysqli_fetch_assoc($res)){

echo "<h3>".$row['title']."</h3>";
echo "<p>".$row['location']."</p>";
echo "<p>Price: ₹".$row['price']."</p>";

echo "<a href='book.php?id=".$row['id']."'>Book</a>";

echo "<hr>";

}

?>