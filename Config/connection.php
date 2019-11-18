<?php

$servername = "localhost";
$username = "root";
$dbname = "CAMAGRU";
$password = "mludakriss";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connection successful";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>
