<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "findfastai" , "bx%a6J967" , "findfastai"); 
$sql1 ="SELECT id, user_id, `status`, expiry_date, payment_id, created_date FROM `Memberships` WHERE `verification` = 0 LIMIT 100";
$result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) {
         echo $row['id'] . "@@@" . $row['user_id']. "@@@".$row['status'] . "@@@". $row['expiry_date'] . "@@@". $row['payment_id'] . "@@@". $row['created_date'] . "@@@@";
     }
$conn->close();
?>