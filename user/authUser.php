<?php
header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("localhost" , "findfastai" , "bx%a6J967" , "findfastai");
$email = mysqli_real_escape_string($conn, $_GET['email']);
$name = mysqli_real_escape_string($conn, $_GET['name']);
$sql1 ="SELECT COUNT(id) as OK FROM `Users` where email = '$email'";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$ok =  $row['OK'];
if ($ok == '1') {
		echo "old";
}else {
	$curr_time =  (string) date("Y/m/d h:m:s");
	$sql2 = "INSERT INTO `Users`(`name`, `email`, `token`, `usage_time`, `last_active`) VALUES ('$name', '$email', 'NULL', '0', '$curr_time')";
	$result = mysqli_query($conn, $sql2);
	echo "new";
}

?>