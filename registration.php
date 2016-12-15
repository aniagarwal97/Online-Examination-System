<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="./css/theme.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<link rel="stylesheet" type="text/css" href="./css/register.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="./js/registration.js"></script>
</head>
<body>
	<form action="registration.php" method="post">
		<input class="field form-control" type="email" name="email" placeholder="Email-Id"><br>
		<!-- <input class="field form-control" type="password" name="password" placeholder="Password"><br>
		<input class="field form-control" type="password" name="confpassword" placeholder="Confirm Password"><br> -->
		<input class="field form-control" type="text" name="regno" placeholder="Enter Registration No."><br>
	    <div class="dropdown">
	    	<select class="field btn btn-primary dropdown-toggle" name="branch" id="branch" placeholder="Select Branch">
				<option value="cse">Computer Science and Engineering</option>
				<option value="me">Mechanical Engineering</option>
				<option value="civ">Civil Engineering</option>
				<option value="ee">Electrical Engineering</option>
				<option value="ece">Electronics and Communication Engineering</option>
				<option value="other">other</option>
	  		</select>
	    </div><br>
		<div id="otherType" style="display:none;">
	  		<br><input class="field form-control" type="text" name="specify" placeholder="Specify Your Branch"/><br>
		</div>
	   	<input class="register-btn btn btn-primary" type="submit" name="submit">
	</form>
</body>
</html>
<?php
include('connect.php');
if(isset($_POST["submit"]))
{
	if(isset($_POST["email"]) &&  isset($_POST["branch"]) && isset($_POST["regno"]))
	{
			$email = $_POST["email"];  
			$branch =  $_POST["branch"];
			$regno = $_POST["regno"];
			$table_name="user";
			$table_create = "CREATE TABLE $dbname.$table_name (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			regno VARCHAR(30) NOT NULL,
			email VARCHAR(30) NOT NULL,
			password VARCHAR(32) NOT NULL,
			branch VARCHAR(50),
			hash VARCHAR(32) NOT NULL ,
			active INT(1) NOT NULL DEFAULT '0'
			)";
			$hash = md5('".rand(0,1000)."'); 
			$password = rand(1000,5000);
			if (mysqli_query($conn, $table_create)) 
			{
				$query="INSERT INTO $dbname.$table_name (regno, email, password, branch, hash) VALUES ('".$regno."','".$email."','".md5($password)."', '".$branch."', '".$hash."')";
				if(mysqli_query($conn, $query))
				{
					echo"successfully Registered";
					header("./verificationemail.php/");
				}
				else
				{
					echo $conn->error;
				}
			}
			else
			{
				$query="INSERT INTO $dbname.$table_name (regno, email, password, branch, hash) VALUES ('".$regno."','".$email."','".md5($password)."', '".$branch."', '".$hash."')";
				if(mysqli_query($conn, $query))
				{
					echo"successfully Registered";
					require('verificationemail.php');
					}
				else
				{
					echo $conn->error;
				}
			}
		}
	}
	else
	{?>
		<p><span class="white">*All fields are mandatory</span></p>
	<?php
	}
	?>