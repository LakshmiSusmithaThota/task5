<?php
session_start();
include "../db.php";

/* ---------- SECURITY CHECK ---------- */
if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){
    header("Location: ../login.php");
    exit();
}

/* ---------- STATISTICS ---------- */
$users = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
$packages = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM packages"));
$bookings = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM bookings"));

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<style>

body{
font-family: Arial;
margin:40px;
background:#f4f4f4;
}

.card{
display:inline-block;
background:white;
padding:20px;
margin:10px;
border-radius:8px;
box-shadow:0 2px 5px rgba(0,0,0,0.2);
}

a{
text-decoration:none;
margin-right:10px;
}

table{
border-collapse:collapse;
width:80%;
margin-top:20px;
background:white;
}

th,td{
border:1px solid #ddd;
padding:10px;
}

th{
background:#333;
color:white;
}

</style>

</head>

<body>

<h1>Admin Dashboard</h1>

<a href="add_package.php">Add Package</a>
<a href="bookings.php">View Bookings</a>
<a href="../logout.php">Logout</a>

<br><br>

<!-- STAT CARDS -->

<div class="card">
<h3>Total Users</h3>
<p><?php echo $users; ?></p>
</div>

<div class="card">
<h3>Total Packages</h3>
<p><?php echo $packages; ?></p>
</div>

<div class="card">
<h3>Total Bookings</h3>
<p><?php echo $bookings; ?></p>
</div>

<br><br>

<h2>Package List</h2>

<table>

<tr>
<th>ID</th>
<th>Title</th>
<th>Location</th>
<th>Price</th>
<th>Action</th>
</tr>

<?php

$res=mysqli_query($conn,"SELECT * FROM packages");

while($row=mysqli_fetch_assoc($res)){

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['title']."</td>";
echo "<td>".$row['location']."</td>";
echo "<td>".$row['price']."</td>";

echo "<td>";

echo "<a href='edit_package.php?id=".$row['id']."'>Edit</a>";

echo "<a href='delete_package.php?id=".$row['id']."' onclick=\"return confirm('Delete package?')\">Delete</a>";

echo "</td>";

echo "</tr>";

}

?>

</table>

<br><br>

<h2>Analytics</h2>

<canvas id="chart" width="400" height="200"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

new Chart(document.getElementById("chart"),{

type:"bar",

data:{
labels:["Users","Packages","Bookings"],

datasets:[{
label:"System Data",
backgroundColor:["blue","green","orange"],
data:[<?php echo $users ?>,<?php echo $packages ?>,<?php echo $bookings ?>]
}]

},

options:{
responsive:true
}

});

</script>

</body>
</html>