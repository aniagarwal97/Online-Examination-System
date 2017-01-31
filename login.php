<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<form action="login.php" method="post">
	<input class="field form-control" type="text" name="Email" placeholder="Email-Id"><br>
	<input class="field form-control" type="password" name="password" placeholder="Password"><br>
	<input class="login-btn btn btn-primary" type="submit" name="Submit"><br><br>
	<div class="account">Don't have an account,<a href="./registration.php"> Create an Account</a>
	</div>
</form>
</body>
</html>
<?php
