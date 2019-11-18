<?php 
require_once '../Controllers/register.php';
     $_SESSION['id'] = 1;
    // SESSION_START();
    $error = NULL;
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Camagru | Register</title>
       
    </head>
    <body class="b123">
        <div class="header">
        <h2>Camagru Register</h2>
        </div>

        <form class="frm1" method="post" action="register.php">
            <div class="input-group">
                <label>Username</label>
                <input class="row" type="text" name="username" placeholder="Enter Username..."required>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input class="row" type="text" name="email" placeholder="Enter Email..."required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input class="row" type="password" name="password_1" placeholder="Enter Password..."required>
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input class="row" type="password" name="password_2" placeholder="Enter Password..."required>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</a></button>
                <p >
                <?php 
                    if (!empty($_SESSION['error'])){
                        echo $_SESSION['error'];
                        $_SESSION['error'] = '';
                    }
                ?>
                </p>
            </div>
            <p class="txt">
                Already a member? <a class="txt2" href="Login.php">Login</a>
            </p>
        </form>
        <center>
            <?php
                echo $error;
            ?>
        </center>
    </body>
</html>