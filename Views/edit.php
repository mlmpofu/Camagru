<?php
    require '../Controllers/editpro.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/index.css">
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>

</head>
<body class="b1">
<ul>
  <li><a href="../Views/fileUpload.php">Home</a></li>
  <li><a href="edit.php">Edit Profile</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li style="float:right"><a class="active" href="../Views/login.php">Logout</a></li>
</ul>
     
    </div>
<div id = "signup">
        <form action= "../Views/edit.php" method = "post" style="margin-top: 100px;">
             <img src = "../images/user.png" width = "300" height = "300">
            <p id = "errmsg">
            </p>
            <input class="row" type= "text" name="username" placeholder="Username" required/>
            <br/>
            <input class="row" type= "email" name="email" placeholder="example@domain.com" required/>
            <br/>
            <input class="row" type= "password" name="passwd" placeholder="P******" required/>
            <br/>
    
            <input  type= "submit" name="submit" value = "Save"/>
        </form>
        <div class="div_pic" style = "background-image: url('logback.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center; width:500px">
        </div>
    </div>
    <div class="footer" style="    background: rgba(209, 8, 8, 0.274);
    position: absolute;
    bottom: 0;
    left: 0;
    height :10%;
    overflow: hidden;
    width: 100%;">
    <center><h1 style="display:inline; color:white"> &copy mlmpofu </h1></center>
</div>
</body>
</html>