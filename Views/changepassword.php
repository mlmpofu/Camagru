<?php

    require '../Controllers/changepassword.php';
  
?>

<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Camagru | Changepassword</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    </head>
    <body>
        <div class="header">
        <h2>Change Password</h2>
        </div>

        <div class = "form">
        <form method="post" action="../Controllers/changepassword.php">
        
            <div class="input-group">
                <label>New Password</label>
                <input type="text" name="password_1" placeholder="Enter New Password..."required>
            </div>
            
            <div class="input-group">
                <label>Comfirm Password</label>
                <input type="password" name="password_2" placeholder="Enter Comfirm Password..."required>
            </div>
            
            <div class="input-group">
                <button type="submit" name="reset" class="btn">Login</button>
            </div>
        </form>
          
    <div>
    </body>
</html>