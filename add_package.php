<?php
include "../db.php";

if(isset($_POST['add'])){

$title=$_POST['title'];
$location=$_POST['location'];
$price=$_POST['price'];
$desc=$_POST['description'];

mysqli_query($conn,"INSERT INTO packages(title,location,price,description)
VALUES('$title','$location','$price','$desc')");

echo "Package Added";

}
?>

<form method="post">

<input name="title"><br>
<input name="location"><br>
<input name="price"><br>

<textarea name="description"></textarea>

<button name="add">Add</button>

</form>