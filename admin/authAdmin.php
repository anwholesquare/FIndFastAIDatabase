<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "findfastai" , "bx%a6J967" , "findfastai");
$pass = mysqli_real_escape_string($conn,$_GET['pass']);
$user = mysqli_real_escape_string($conn, $_GET['user']);
$sql1 ="SELECT COUNT(id) as OK FROM `Admin` where username = '$user' and password = '$pass'";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$ok =  $row['OK'];
echo $ok;
?>