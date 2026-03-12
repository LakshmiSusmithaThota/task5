<?php
include "db.php";

$q=$_GET['q'];

$res=mysqli_query($conn,"
SELECT * FROM packages
WHERE location LIKE '%$q%'
");

while($row=mysqli_fetch_assoc($res)){

echo "<p>".$row['title']." - ".$row['location']."</p>";

}
?>