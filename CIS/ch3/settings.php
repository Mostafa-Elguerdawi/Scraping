<?php

    require("main.php");
    $c = new Settings();
    if(isset($_POST['change'])){
        $r = $c->Change($_POST['username'], $_POST['password'], $_POST['confpassword']);
        if($r == 1){
            echo "Username Already Registered";
        }elseif($r == 10){
            echo "Username is Avilable";
        }
    }

    if(isset($_POST['logout'])){
        $out = new Logout();
    }            

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Settings</title>
    <link rel="stylesheet" href="css/settings.css">
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
        <h2><?php echo "Hi " . $_SESSION['user'];?></h2>
        <label for="name">Username</label>
        <input type="text" id="username" name="username" value="<?php session_start(); echo $_SESSION['user'];?>" >

        <label for="password">New Password</label>
        <input type="password" id="password" name="password">

        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confpassword">

        <button type="submit" name="change">Save Changes</button>
        <button type="send" name="logout" style="background-color: #970000; color: white;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                margin-top: 20px;
                cursor: pointer;">Logout</button>
        <?php
        
        session_start();
        $j = $_SESSION['user'];
        if($j == 'jdnorton'){
            echo "<br><p>Your Flag is CIS{6810592016859719}</p>";
        }
        ?>
      </form>
    </div>
  </body>
</html>
