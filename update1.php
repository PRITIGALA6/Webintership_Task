<?php

	include 'connection.php';
	$deleteid = $_GET['deleteid'];
	$sql ="select * from form where id=$deleteid";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	$fname = $row['fname'];
	$lname = $row['lname'];
	$email = $row['email'];
	$password = $row['password'];
	
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "update form set id=$deleteid,fname='$fname' ,lname='$lname',email='$email'  ,password='$password' where id=$deleteid";
		$result=mysqli_query($con,$sql);
		if($result){
			header('location:display.php');
		}
		else{
			die(mysqli_error($con));
		}
	}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD operation</title>
  </head>
  <body>
		<div class="container my-5">
		<form method="post">
			<div class="form-group">
			<label>First Name</label>
			<input type="text" class="form-control"  placeholder="Enter First Name" name="fname" autocomplete="off">
			</div>
		  <div class="form-group">
			<label>Last name</label>
			<input type="text" class="form-control"  placeholder="Enter Last Name" name="lname"> 
			</div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
			</div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  </div>
		  <div class="form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
		
		</div>
   </body>
</html>