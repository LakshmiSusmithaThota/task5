<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include "db.php";

if(isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$otp = rand(100000,999999);

$sql = "INSERT INTO users(name,email,password,otp) 
VALUES('$name','$email','$password','$otp')";

$result = mysqli_query($conn,$sql);

if($result){
    echo "<h3>Registration Successful</h3>";
    echo "Your OTP: <b>$otp</b><br>";
    echo "<a href='verify.php'>Go to Verify Page</a>";
}else{
    echo "Error: ".mysqli_error($conn);
}

}
?>

<h2>User Registration</h2>

<form method="post">

<input type="text" name="name" placeholder="Enter Name" required><br><br>

<input type="email" name="email" placeholder="Enter Email" required><br><br>

<input type="password" name="password" placeholder="Enter Password" required><br><br>

<button type="submit" name="register">Register</button>

</form>