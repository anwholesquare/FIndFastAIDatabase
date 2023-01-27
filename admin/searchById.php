<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "findfastai" , "bx%a6J967" , "findfastai"); 
$id = mysqli_real_escape_string($conn,$_GET['id']);
$sql1 ="SELECT `id`, `name`, `email`, `usage_time`, `last_active`, `created_date` from Users where id = '$id'";
$result = $conn->query($sql1);
     while($row = $result->fetch_assoc()) {
         $mainArray[] = $row;
     }
$js_array = json_encode($mainArray);
echo $js_array;
$conn->close();
?>