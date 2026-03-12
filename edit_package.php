<?php
include "../db.php";

$id=$_GET['id'];

$data=mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM packages WHERE id=$id")
);

if(isset($_POST['update'])){

$title=$_POST['title'];
$location=$_POST['location'];
$price=$_POST['price'];
$desc=$_POST['description'];

mysqli_query($conn,"
UPDATE packages
SET title='$title',location='$location',price='$price',description='$desc'
WHERE id=$id
");

header("Location: dashboard.php");

}
?>

<form method="post">

<input name="title" value="<?php echo $data['title']; ?>"><br>

<input name="location" value="<?php echo $data['location']; ?>"><br>

<input name="price" value="<?php echo $data['price']; ?>"><br>

<textarea name="description"><?php echo $data['description']; ?></textarea>

<button name="update">Update</button>

</form>