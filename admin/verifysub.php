<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "findfastai" , "bx%a6J967" , "findfastai"); 
$id = mysqli_real_escape_string($conn,$_GET['id']);
$sql1 ="UPDATE `Memberships` SET `verification`= 1 WHERE id = '$id'";
$result = $conn->query($sql1);
echo "1";
$conn->close();
?>