<?php
    require '../Controllers/forgotPassword.php';
  ?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Camagru | Login</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    </head>
    <body>
        <div class="header">
        <h2>Forgot Password</h2>
        </div>
        <?php if(isset($result)) echo $result; ?>
        <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>

        <div class = "form">
        <form method="post" action="../Controllers/forgotPassword.php">
    
             <div class="input-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter Email..."required>
            </div>
            <div class="input-group">
                <button type="submit" name="forgotPassword" class="btn">Reset Password</button>
            </div>
            <div>
                
            
            </div>
        </form>
          
    <div>
    </body>
</html>