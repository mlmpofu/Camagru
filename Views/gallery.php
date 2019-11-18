<html>
<?php

require ("../Controllers/register.php");
require("../Config/connection.php");
session_start();
if (isset($_SESSION['login']))
{
    $login_id = $_SESSION['login']['id'];
    $login_username = $_SESSION['login']['username'];
}

?>
<html>
    <head>
        <h2 Cclass="HEAD">
            <?php
            echo "<h2>".$login_username."</h2>"; 
            ?>
        </h2>
        <title>Imaging</title>
        <link rel="stylesheet" type="text/css" href="../CSS/index.css">
     <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>

</head>
<body class="b1">
<ul>
  <li><a href="../Views/fileUpload.php">Home</a></li>
  <li><a href="edit.php">Edit Profile</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li style="float:right"><a class="active" href="../Controllers/logout.php">Logout</a></li>
</ul>
<?php

    require ("../Models/model.php");
    $image_array = getAllImages();
    $img_id = null;
    if (isset($_GET['img_id']))
    {
        $img_id = $_GET['img_id'];    
    }
    if (isset($_POST['submit_comment']))
    {
        $comment = strip_tags($_POST['comment']);
        if (empty($comment))
        {
            echo "<p>blank comment</p>";
        }
        else
        {
            require("../Config/connection.php");
            $sql = "INSERT INTO comments (username, image_id, comment) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $login_username);
            $stmt->bindParam(2, $img_id);
            $stmt->bindParam(3, $comment);
            $stmt->execute();
        }
    // $stmt = null;
    // $conn = null;
    $msg = "$username Your Credidantials have been updated!";
    $msg = wordwrap($msg,70);
    mail($email,"verify",$msg);

    }
    
    if (isset($_POST['del'])){
        $dell = $_POST['del'];
        $sql = "DELETE FROM CAMAGRU.images WHERE id = $img_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    if (isset($_POST['like']))
    {
        if ($login_username)
        {
            require("../Config/connection.php");
            $sql = "INSERT INTO CAMAGRU.likes (username, image_id) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $login_username);
            $stmt->bindParam(2, $img_id);
            $stmt->execute();
        }
        
}


    function display_comment($comment_id)
    {
        require ("../Config/connection.php");
        $sql = "SELECT * FROM comments WHERE image_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $comment_id);
        $stmt->execute();
        $comments = $stmt->fetchAll();
        if ($stmt->rowCount() > 0)
        {
            foreach($comments as $comment)
            {
                echo "<h5>".$comment['username']."</h5>";
                echo "<p>".$comment['comment']."</p>";
            }
        }
    }
    function count_likes($like_id)
    {
        require ("../Config/connection.php");
        $sql = "SELECT * FROM likes WHERE image_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $like_id);
        $stmt->execute();
        echo $stmt->rowCount()." like";
    }
?>
<?php foreach($image_array as $image): ?>
<img class="pic" src="<?php echo $image['picture']; ?>" alt=""><br>
<form method="post" action="?img_id=<?php echo $image['id']; ?>">
    <textarea name="comment" class="comme" cols="20" rows="5"></textarea><br>
    <!-- <input class="comme" type="text" name="comment" placeholder="type comment here ..."><br> -->
    <button  name="submit_comment" type="submit">submit comment</button>
    <?php count_likes($image['id']); ?>
    <button class="b2" type="submit" name="like">like</button>
    <button class="b2" type="submit" name="del">Delete</button><br>
</form>
<?php display_comment($image['id']) ?>
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