<?php

	require("main.php");
	if(isset($_POST['signup'])){
		if(strlen($_POST['username']) > 0 and strlen("password") > 0){
			$S = new Signup();
			$S->Sign($_POST['username'], $_POST['password'], $_POST['confpassword']);
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="signup-box">
		<h1>Signup</h1>
		<form method="POST" action="">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Enter username">
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter password">
			<label for="confirm-password">Confirm Password</label>
			<input type="password" id="confirm-password" name="confpassword" placeholder="Enter password again">
			<input type="submit" value="Signup" name="signup">
            <br><a href="login.php">Already Have an Account</a><br>
		</form>
	</div>
</body>
</html>
