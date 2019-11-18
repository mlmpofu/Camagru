<html>
<?php

require ("../Controllers/register.php");
require("../Config/connection.php");

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/index.css">
        <h2 Cclass="HEAD">
            <?php
            // echo "<h2>".$login_username."</h2>"; 
            ?>
        </h2>
        <title>Imaging</title>
     <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>

</head>
<body class="b1">
    <ul>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
    </ul>
<?php

    require ("../Models/model.php");
    $image_array = getAllImages();
    $img_id = null;
    if (isset($_GET['img_id']))
    {
        $img_id = $_GET['img_id'];    
    }

?>
<?php foreach($image_array as $image): ?>
<img class="pic" src="<?php echo $image['picture']; ?>" alt=""><br>
<form method="post" action="?img_id=<?php echo $image['id']; ?>">
</form>
<?php endforeach; ?>
 <div class="footer" style="    background: rgba(139, 132, 132, 0.596);;
    position: fixed;
    bottom: 0;
    left: 0;
    height :10%;
    overflow: hidden;
    width: 100%;">
    <center><h1 style="display:inline; color:black"> &copy mlmpofu </h1></center>

</body>
</html>
