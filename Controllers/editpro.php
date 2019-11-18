<?php


session_start();

require '../Config/connection.php';



if (isset($_POST['submit']))


{
        $username = ($_POST['username']);
        $password = md5($_POST['passwd']);
        $email = $_POST['email'];
        $uname = $_SESSION['username'];
        $sql = "UPDATE users SET username = :uname, pass = :pass, email = :email WHERE username = :username";
        $stmt= $conn->prepare($sql);
            $stmt->bindParam(':uname', $username);
            $stmt->bindParam(':pass', $password);
             $stmt->bindParam(':email', $email);
             $stmt->bindparam(':username', $uname);
            $stmt->execute();
            echo "<br> "; 
     
  }
 
$msg = "$username Your credidantials have been updated!";
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
// send email
mail($email,"verify",$msg);

?>