<?php 
  include "connection.php";
 ?>
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD Operation</title>
  </head>
  <body>
    <div class="container">
		<button class="btn btn-primary my-5"><a href ="user.php" class="text-light">ADD USER</a></button>
		
		
		
		<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">EMAIL</th>
	  <th scope="col">PASSWORD</th>
	  <th scope="col">OPERATION</th>
	  
    </tr>
  </thead>
  <tbody>
  <?php 
  
		$sql = "select * from form";
		$result = mysqli_query($con,$sql);
		if($result){
			while($row= mysqli_fetch_assoc($result)){
				$id=$row['id'];
				$fname=$row['fname'];
				$lname=$row['lname'];
				$email=$row['email'];
				$password=$row['password'];
			echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$email.'</td>
	  <td>'.$password.'</td>
	  <td>
	  <button class="btn btn-primary"><a href="update1.php?deleteid='.$id.' " class="text-light">UPDATE</a></button>
	  <button class="btn btn-danger"><a href="delete1.php?deleteid='.$id.' " class="text-light">DELETE</a></button>
	  </td>
    </tr>';
		
		}
		}
  
  
  ?>
    </tbody>
	</table>
	</div>
	</body>
</html>