<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "findfastai" , "bx%a6J967" , "findfastai");

$sql1 ="SELECT COUNT(id) as OK FROM `Users`";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$ok =  $row['OK'];
echo $ok . '@';


$old_time =  (string) date("Y-m-d",strtotime('-30 days'));
$sql1 ="SELECT COUNT(id) as OK FROM Users WHERE DATE(last_active) > '$old_time'";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$ok =  $row['OK'];
echo $ok . '@';

$sql1 ="SELECT COUNT(id) as OK FROM `Topics`";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$ok =  $row['OK'];
echo $ok . '@';


$sql1 ="SELECT SUM(amount) as OK FROM `Payments`";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$ok =  $row['OK'];
echo $ok;
?>