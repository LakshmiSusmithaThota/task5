<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$res=mysqli_query($conn,"SELECT * FROM users
WHERE email='$email' AND verified=1");

$user=mysqli_fetch_assoc($res);

if($user && password_verify($password,$user['password'])){

$_SESSION['user']=$user['id'];
$_SESSION['role']=$user['role'];

header("Location:index.php");

}else{

echo "Login failed";

}

}
?>

<form method="post">

<input name="email"><br>
<input name="password" type="password"><br>

<button name="login">Login</button>

</form>