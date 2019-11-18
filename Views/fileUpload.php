<?php
    session_start();
    echo $_SESSION['error'];
    $_SESSION['error'] = '';
?>

<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Imaging</title>
        <link rel="stylesheet" type="text/css" href="../CSS/index.css">
     <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>

</head>
<body class="round">

<ul>
  <li><a href="fileUpload.php">Home</a></li>
  <li><a href="edit.php">Edit Profile</a></li>
  <li><a href="../Views/gallery.php">Gallery</a></li>
  <li style="float:right"><a class="active" href="../Controllers/logout.php">Logout</a></li>
</ul>
<div class="container">
    <h1 style="color: white">WELCOME TO YOUR STUDIO...</h1>
<form action="../Controllers/fileUpload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" required>
    <input type="submit" value="Upload Image" name="upload">
</form>
<script src="../JS/cam.js"></script>
<div class="input-group" style="text-align:center;">
    <div class="container2" style="display:inline-block;">
    <button onclick="stickers('../stickers/star.png')" class="btn">star</button>
    <button onclick="stickers('../stickers/bloom.png')" class="btn">bloom</button>
    <button onclick="stickers('../stickers/brokenglass2.png')" class="btn">brokenglass2</button>
    <button onclick="stickers('../stickers/brokenglass.png')" class="btn">brokenglass</button>
    <button onclick="stickers('../stickers/cool.png')" class="btn">cool</button>
    <button onclick="stickers('../stickers/dust.png')" class="btn">dust</button>
    <button onclick="stickers('../stickers/fire.png')" class="btn">fire</button>
    <button onclick="stickers('../stickers/flowerdrop.png')" class="btn">flowerdrop</button>
    <button onclick="stickers('../stickers/goldenframe.png')" class="btn">glodenframe</button>
    <button onclick="stickers('../stickers/happy newyear.png')" class="btn">newyear</button>
    <button onclick="stickers('../stickers/mirrorframe.png')" class="btn">mirrorframe</button>
    <button onclick="stickers('../stickers/phoneframe.png')" class="btn">phoneframe</button>
    <button onclick="stickers('../stickers/samntaframe.png')" class="btn">santa</button>
    <button onclick="stickers('../stickers/wireframe.png')" class="btn">wireframe</button>
    <button onclick="stickers('../stickers/jolly.png')" class="btn">jolly</button>
    <button onclick="stickers('../stickers/flowerframe.png')" class="btn">flowerframe</button>
</div>


<div class="booth">
    <video id="video" width="400" height="300" autoplay></video>
    <canvas id="canvas" width="400" height="300"></canvas>
</div>

<form action="../Controllers/fileUpload.php" method="post">
    <input type="hidden" id="img" name="img">
    <input class="btt" type="submit" name="cam_pic" value="save">
</form>

<input type="submit" id="capture" name="capture" value="Capture">
<input type="submit" id="clear" name="clear" value="Clear"><br>
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
<script src="../JS/cam.js"></script>

<div class="footer" style="    background: rgba(209, 8, 8, 0.521);
};
    position: fixed;
    bottom: 0;
    left: 0;
    height :10%;
    overflow: hidden;
    width: 100%;">
    <center><h1 style="display:inline; color:white"> &copy mlmpofu </h1></center>
</div>

</body>
</html>