<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "findfastai" , "bx%a6J967" , "findfastai"); 
$sql1 ="SELECT id, email, name from Users LIMIT 100;";
$result = $conn->query($sql1);
while($row = $result->fetch_assoc()) {
	echo $row['id'] . "@@@" . $row['email']. "@@@".$row['name'] . "@@@@";
}
$conn->close();
?>