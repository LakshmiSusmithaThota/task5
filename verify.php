<?php
include "db.php";

if(isset($_POST['verify'])){

$email=$_POST['email'];
$otp=$_POST['otp'];

$res=mysqli_query($conn,"SELECT * FROM users
WHERE email='$email' AND otp='$otp'");

if(mysqli_num_rows($res)>0){

mysqli_query($conn,"UPDATE users
SET verified=1 WHERE email='$email'");

echo "Account Verified";

}else{

echo "Invalid OTP";

}

}
?>

<form method="post">

<input name="email"><br>
<input name="otp"><br>

<button name="verify">Verify</button>

</form>