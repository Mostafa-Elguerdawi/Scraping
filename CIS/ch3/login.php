<?php

    require("main.php");
    if(isset($_POST['login'])){
        if(strlen($_POST['username']) > 0 and strlen($_POST['password']) > 0){
            $l = new Login();
            $r = $l->Log($_POST['username'], $_POST['password']);
            if($r == 1){
                header('Location: settings.php');
            }elseif($r == 10){
                echo "Invalid Username OR Password";
            }
        }
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
                </form>
        </div>
</body>
</html>