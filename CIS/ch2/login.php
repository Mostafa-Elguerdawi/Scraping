<?php

    require("main.php");

    if(isset($_POST['login'])){
        $a = new Login();
        $al = $a->Log($_POST['username'], $_POST['password']);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="login-box">
		<h1>Login</h1>
		<form method="POST" action="">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Enter username">
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter password">
			<input type="submit" value="Login" name="login">
            <br><a href="signup.php">Create New User</a><br>
		</form>
	</div>
</body>
</html>