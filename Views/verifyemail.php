<?php session_start(); ?>
<html>
    <head>
        <link type="text/css" href="../CSS/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Camagru | Verify Mail</title>
        
    </head>
    <body>
        <center>
            <div>
                <?php
                    if (!empty($_SESSION['message'])){
                        echo $_SESSION['message']. "<center><button><a href='login.php'>Login</a></button></center>";
                    }
                ?>
            </div>
        </center>    
    </body>
</html>