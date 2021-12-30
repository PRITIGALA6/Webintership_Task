<?php
	include 'dbcon.php';

	$firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"]; 
	$email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
            
    
    $sql = "Select * from registration where email ='$email' ";
    
    $result = mysqli_query($con, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num  < 1) {
        if($password == $cpassword) {
                
            $sql = "INSERT INTO registration(fname, lname, email, pass, confirm_pass) VALUES ('$firstname', '$lastname', '$email', '$password', '$cpassword')";
    
            $result = mysqli_query($con, $sql);
		
            if ($result) {
                echo "Inserted"; 
            }
			
        } 
		else { 
            echo "Passwords do not match"; 
        }      
    } 
	else {
      echo "Username not available"; 
	}
?>