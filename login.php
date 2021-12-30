<?php
	include 'dbcon.php';

	$email = $_POST["email"]; 
    $password = $_POST["password"]; 
	
	$sql = "select * from registration where email= '$email' AND pass ='$password' ";
	$result = mysqli_query($con, $sql);    
    $num = mysqli_num_rows($result);

	if($num > 0) {
		echo "Successfully login";
	} else {
		echo "id or password is incorrect";
	}
?>