<html>
<head>
<link rel="stylesheet" href="register.css">
<title>
Register
</title>
</head>

<body>
<?
if(isset($_POST['submit'])){
	$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	
	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
	
	$emailquery = " select * from registration where email='$email' ";
	$query = mysqli_query($con,$emailquery);
	
	$emailcount = mysqli_num_rows($query);
	
	if($emailcount > 0){
		echo "Email already exists";
	}
	else{
		/*if ($password == $cpassword){
		{
			$insertquery = "insert into registration(firstname , lastname , email, password, cpassword) values ('$firstname','$lastname','$email','$pass','$cpass');
			$iquery = mysqli_query($con,$insertquery);
			
			if($con{
				?>
					<script>
						alert("Connection Successful");
					</script>
				<?php
			}
			else{
			?>
				<script>
					alert("No connection");
				</script>
			<?php
			}
			}
			
		}
		
		else{
		echo "Password are not matching";
		
		}
	}
?>*/

<h2 class="head"> <center>Registration Form</center> </h2>
<form class="place">
<label class="ldesign"> First Name : </label>
<input class= "input1" name="firstname"  type="text" placeholder="Enter First Name" required><br><br>

<label class="ldesign"> Last Name :</label>
<input class= "input1" name="lastname" type="text" placeholder="Enter Last Name" required><br><br>

<label class="ldesign"> Email :</label>
<input class= "input1"  name="email" type="email" placeholder="Enter Email address" required><br><br>

<label class="ldesign"> Password :</label>
<input class= "input1" name="password" text="password" placeholder="Enter Password" required> <br><br>

<label class="ldesign"> Confirm Password : </label>
<input class= "input1"  name="cpassword" text="password" placeholder="Repeat Password" required
><br><br>

<button type="submit" name="submit" class="butt">Register Now</button> 
<p class="message"> Already Registered? <a href="login.html"> Login</a></p>

</form>
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script>
$('.message a').click(function(){
$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>