<?php
include "db.php";
?>

<h2>Available Tour Packages</h2>

<?php

$res=mysqli_query($conn,"SELECT * FROM packages");

while($row=mysqli_fetch_assoc($res)){

echo "<h3>".$row['title']."</h3>";
echo "<p>Location: ".$row['location']."</p>";
echo "<p>Price: ₹".$row['price']."</p>";
echo "<p>".$row['description']."</p>";

echo "<a href='book.php?id=".$row['id']."'>Book Now</a>";

echo "<hr>";

}

?>