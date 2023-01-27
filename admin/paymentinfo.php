<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "findfastai" , "bx%a6J967" , "findfastai"); 
$id = mysqli_real_escape_string($conn,$_GET['id']);
$sql1 ="SELECT id, amount, reason, created_date FROM `Payments` WHERE id = '$id' LIMIT 1";
$result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) {
         echo $row['id'] . "@@@" . $row['amount']. "@@@".$row['reason'] . "@@@" . $row['created_date'];
     }
$conn->close();
?>